<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
global $USER, $APPLICATION;
$APPLICATION->SetTemplateCSS("form/form.css");
if (CModule::IncludeModule("form")):

	IncludeTemplateLangFile(__FILE__);

	if (is_array($_REQUEST)) extract($_REQUEST);

	$WEB_FORM_ID = intval($arParams["WEB_FORM_ID"]);
	if (intval($WEB_FORM_ID)<=0) $WEB_FORM_ID = intval($_REQUEST["WEB_FORM_ID"]);

	$WEB_FORM_ID = CForm::GetDataByID($WEB_FORM_ID, $arForm, $arQuestions, $arAnswers, $arDropDown, $arMultiSelect);

	if ($WEB_FORM_ID>0) :

		$F_RIGHT = intval(CForm::GetPermission($WEB_FORM_ID));
		if ($F_RIGHT>=10) :

			if (strlen($web_form_submit)>0)
			{
				$arrVALUES = $_REQUEST;
				$error = CForm::Check($WEB_FORM_ID, $arrVALUES);

				if (strlen($error)<=0) 
				{
					$rsFields = CForm::GetFieldByVarname("feedback_email"); 
					$arFieldEmail = $rsFields->GetNext();
					$EmailFieldID = $arFieldEmail["ID"];

					$rsAnswers = CForm::GetAnswerList($EmailFieldID);
					$arAnswerEmail = $rsAnswers->GetNext();
					$EmailAnswerID = $arAnswerEmail["ID"];

					$AnswerEmailIdent = "form_text_".$EmailAnswerID;
					if (!check_email($arrVALUES[$AnswerEmailIdent]))
					{
						$error .= GetMessage("FORM_INCORRECT_EMAIL")."<br>";
					}

					if (strlen($error)<=0) 
					{
						if ($RESULT_ID = CFormResult::Add($WEB_FORM_ID))
						{
							$strNote = GetMessage("FORM_DATA_SAVED");
							CForm::SetEvent($RESULT_ID);
							CForm::Mail($RESULT_ID);
							if (!(defined("ADMIN_SECTION") && ADMIN_SECTION===true) && $F_RIGHT>=15)
							{
								if (strlen($web_form_submit)>0 && strlen($arParams["REDIRECT_URL"])>0) 
								{
									LocalRedirect($arParams["REDIRECT_URL"]."?strNote=".urlencode($strNote));
								}
							}
						}
					}
					else $strError .= $error;
				}
				else $strError .= $error;
			}

			echo ShowError($strError);
			echo ShowNote($strNote);

			?>
			<form name="<?=$arForm["VARNAME"]?>" action="<?=$APPLICATION->GetCurPage()?>?WEB_FORM_ID=<?=$WEB_FORM_ID?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="WEB_FORM_ID" value="<?=intval($WEB_FORM_ID)?>">
			<input type="hidden" name="lang" value="<?=LANGUAGE_ID?>">
			<table cellspacing=0 cellpadding=0 width="100%">
				<?if (strlen(trim($arForm["DESCRIPTION"]))>0 || intval($arForm["IMAGE_ID"])>0) :?>
				<tr>
					<td width="100%"><?

					/***********************************************************************************
													Заголовок формы
					***********************************************************************************/ 

					if (strlen($arForm["TITLE"])>0):
					?><font class="h2"><b><?echo $arForm["TITLE"];?></b></font><br><img src="/bitrix/images/1.gif" width="1" height="6" border=0 alt=""><?
					endif;
					?><font class="text">
					<?if ($arForm["IMAGE_ID"]):?>
					<table cellpadding="0" cellspacing="0" border="0" align="left">
						<tr>
							<td><?echo ShowImage($arForm["IMAGE_ID"], 253, 300, "hspace='3' vspace='3' align='left' border='0'", "", true, GetMessage("FORM_ENLARGE"));?></td>
							<td valign="top" width="0%"><img src="/images/1.gif" width="10" height="1"></td>
						</tr>
						<tr>
							<td colspan=2><img src="/images/1.gif" width="1" height="10"></td>
						</tr>
					</table>
					<? endif; 
					if ($arForm["DESCRIPTION_TYPE"]=="html") : echo $arForm["DESCRIPTION"];
					else:
					?><font class="tablebodytext"><?=$arForm["DESCRIPTION"]?></font><?
					endif;
					?></td>
				<tr><td>&nbsp;</td></tr>
				<?endif;?>
				<tr>
					<td><?

					/***********************************************************************************
														Вопросы формы
					***********************************************************************************/ 
?>
			<table border="0" cellspacing="0" cellpadding="1" width="100%"  class="tableborder">
				<tr>
					<td width="100%">
						<table cellspacing="0" cellpadding="10" class="tablebody" width="100%">
							<tr>
								<td>
									<table cellspacing="0" cellpadding="3" width="100%">
										<tr>
											<td nowrap class="text" width="50%"><?
												$FIELD_VARNAME = "feedback_name";
												$arAnswer = $arAnswers[$FIELD_VARNAME];
												$arQuestion = $arQuestions[$FIELD_VARNAME];
												echo $arQuestion["TITLE"].":";
												if($arQuestion["REQUIRED"] == "Y")
													echo "<font class=required>*</font>";?></td>
											<td width="50%"><?
												$value = CForm::GetTextValue(
													$arAnswer[0]["ID"], 
													$arAnswer[0], 
													$arrVALUES);
												echo CForm::GetTextField(
													$arAnswer[0]["ID"],
													$value, 	
													$arAnswer[0]["FIELD_WIDTH"],
													$arAnswer[0]["FIELD_PARAM"]);?></td>
										</tr>
										<tr>
											<td nowrap class="text" width="50%"><?
												$FIELD_VARNAME = "feedback_company";
												$arAnswer = $arAnswers[$FIELD_VARNAME];
												$arQuestion = $arQuestions[$FIELD_VARNAME];
												echo $arQuestion["TITLE"].":";
												if($arQuestion["REQUIRED"] == "Y")
													echo "<font class=required>*</font>";?></td>
											<td width="50%"><?
												$value = CForm::GetTextValue(
													$arAnswer[0]["ID"], 
													$arAnswer[0], 
													$arrVALUES);
												echo CForm::GetTextField(
												$arAnswer[0]["ID"],
												$value, 	
												$arAnswer[0]["FIELD_WIDTH"],
												$arAnswer[0]["FIELD_PARAM"]);?></td>
										</tr>
										<tr>
											<td nowrap class="text" width="50%"><?
												$FIELD_VARNAME = "feedback_email";
												$arAnswer = $arAnswers[$FIELD_VARNAME];
												$arQuestion = $arQuestions[$FIELD_VARNAME];
												echo $arQuestion["TITLE"].":";
												if($arQuestion["REQUIRED"] == "Y")
													echo "<font class=required>*</font>";?></td>
											<td width="50%"><?
												$value = CForm::GetTextValue(
													$arAnswer[0]["ID"], 
													$arAnswer[0], 
													$arrVALUES);
												echo CForm::GetTextField(
													$arAnswer[0]["ID"],
													$value, 	
													$arAnswer[0]["FIELD_WIDTH"],
													$arAnswer[0]["FIELD_PARAM"]);?></td>
										</tr>
										<tr>
											<td nowrap class="text" width="50%"><?
												$FIELD_VARNAME = "feedback_phone";
												$arAnswer = $arAnswers[$FIELD_VARNAME];
												$arQuestion = $arQuestions[$FIELD_VARNAME];
												echo $arQuestion["TITLE"].":";
												if($arQuestion["REQUIRED"] == "Y")
													echo "<font class=required>*</font>";?></td>
											<td width="50%"><?
												$value = CForm::GetTextValue(
													$arAnswer[0]["ID"], 
													$arAnswer[0], 
													$arrVALUES);
												echo CForm::GetTextField(
													$arAnswer[0]["ID"],
													$value, 	
													$arAnswer[0]["FIELD_WIDTH"],
													$arAnswer[0]["FIELD_PARAM"]);?></td>
										</tr>
										<tr>
											<td nowrap class="text" width="50%"><?
												$FIELD_VARNAME = "feedback_date";
												$arAnswer = $arAnswers[$FIELD_VARNAME];
												$arQuestion = $arQuestions[$FIELD_VARNAME];
												echo $arQuestion["TITLE"].":";
												if($arQuestion["REQUIRED"] == "Y")
													echo "<font class=required>*</font>";?></td>
											<td width="50%" valign="top"><?
												$value = CForm::GetDateValue(
													$arAnswer["ID"], 
													$arAnswer, 
													$arrVALUES);
												echo "<font class='smalltext'> (".CLang::GetDateFormat("SHORT").")</font><br>";
												echo CForm::GetDateField(
													$arAnswer[0]["ID"],
													$arForm["VARNAME"],
													$value,
													$arAnswer["FIELD_WIDTH"]);?></td>
										</tr>
										<tr>
											<td nowrap class="text" width="50%"><?
												$FIELD_VARNAME = "feedback_phone_answ";
												$arAnswer = $arAnswers[$FIELD_VARNAME];
												$arQuestion = $arQuestions[$FIELD_VARNAME];
												echo $arQuestion["TITLE"].":";
												if($arQuestion["REQUIRED"] == "Y")
													echo "<font class=required>*</font>";?></td>
											<td width="50%"><?
												$value = CForm::GetCheckBoxValue(
													$FIELD_VARNAME, 
													$arAnswer, 
													$arrVALUES);
												echo CForm::GetCheckBoxField(
													$FIELD_VARNAME,
													$arAnswer[0]["ID"],
													$value,
													$arAnswer["FIELD_PARAM"]);
												?><font class="text">&nbsp;<?=$arAnswer["MESSAGE"]?></font></td>
										</tr>
										<tr>
											<td nowrap class="text" width="50%" valign="top"><?
												$FIELD_VARNAME = "feedback_cust";
												$arAnswer = $arAnswers[$FIELD_VARNAME];
												$arQuestion = $arQuestions[$FIELD_VARNAME];
												echo $arQuestion["TITLE"].":";
												if($arQuestion["REQUIRED"] == "Y")
													echo "<font class=required>*</font>";?></td>
											<td width="50%"><?
												$value = CForm::GetRadioValue(
													$FIELD_VARNAME, 
													$arAnswer, 
													$arrVALUES);
												echo CForm::GetRadioField(
													$FIELD_VARNAME,
													$arAnswer[0]["ID"],
													$value);
												?><font class="text">&nbsp;<?=$arAnswer[0]["MESSAGE"]."<br></font>";
												echo CForm::GetRadioField(
													$FIELD_VARNAME,
													$arAnswer[1]["ID"],
													$value);
												?><font class="text">&nbsp;<?=$arAnswer[1]["MESSAGE"]."<br></font>";
												echo CForm::GetRadioField(
													$FIELD_VARNAME,
													$arAnswer[2]["ID"],
													$value);
												?><font class="text">&nbsp;<?=$arAnswer[2]["MESSAGE"]."</font>";?></td>
										</tr>
										<tr>
											<td nowrap class="text" width="50%" valign="top"><?
												$FIELD_VARNAME = "feedback_section";
												$arAnswer = $arAnswers[$FIELD_VARNAME];
												$arQuestion = $arQuestions[$FIELD_VARNAME];
												echo $arQuestion["TITLE"].":";
												if($arQuestion["REQUIRED"] == "Y")
													echo "<font class=required>*</font>";?></td>
											<td width="50%"><?
												$value = CForm::GetMultiSelectValue(
													$FIELD_VARNAME, 
													$arMultiSelect, 
													$arrVALUES);
												echo CForm::GetMultiSelectField(
													$FIELD_VARNAME,
													$arMultiSelect[$FIELD_VARNAME],
													$value,
													$arAnswer["FIELD_HEIGHT"],
													$arAnswer["FIELD_PARAM"]);?></td>
										</tr>
										<tr>
											<td nowrap class="text" width="50%" valign="top"><?
												$FIELD_VARNAME = "feedback_image";
												$arAnswer = $arAnswers[$FIELD_VARNAME];
												$arQuestion = $arQuestions[$FIELD_VARNAME];
												echo $arQuestion["TITLE"].":";
												if($arQuestion["REQUIRED"] == "Y")
													echo "<font class=required>*</font>";?></td>
											<td width="50%"><?
												echo CForm::GetFileField(
													$arAnswer[0]["ID"],
													$arAnswer[0]["FIELD_WIDTH"],
													"IMAGE",
													0,
													"",
													$arAnswer[0]["FIELD_PARAM"]);?></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<img src="/bitrix/images/1.gif" width="1" height="10" border=0 alt="">
			<table border="0" cellspacing="0" cellpadding="1" width="100%"  class="tableborder">
				<tr>
					<td width="100%">
						<table cellspacing="0" cellpadding="10" class="tablebody" width="100%">
							<tr>
								<td width="100%">
									<table cellspacing="0" cellpadding="3" width="100%">
										<tr>
											<td width="100%">
												<table cellspacing="0" cellpadding="3" width="100%">
													<tr>
														<td nowrap class="text" valign="top" width="50%"><?
															$FIELD_VARNAME = "feedback_categ";
															$arAnswer = $arAnswers[$FIELD_VARNAME];
															$arQuestion = $arQuestions[$FIELD_VARNAME];
															echo $arQuestion["TITLE"].":";
															if($arQuestion["REQUIRED"] == "Y")
																echo "<font class=required>*</font>";?></td>
														<td width="50%" class="text"><?
															$value = CForm::GetDropDownValue(
																$FIELD_VARNAME, 
																$arDropDown, 
																$arrVALUES);
															echo CForm::GetDropDownField(
																$FIELD_VARNAME,
																$arDropDown[$FIELD_VARNAME],
																$value,
																$arAnswer["FIELD_PARAM"]);?></td>
													</tr>
													<tr>
														<td nowrap class="text" valign="top" width="50%"><?
															$FIELD_VARNAME = "feedback_message";
															$arAnswer = $arAnswers[$FIELD_VARNAME];
															$arQuestion = $arQuestions[$FIELD_VARNAME];
															echo $arQuestion["TITLE"].":";
															if($arQuestion["REQUIRED"] == "Y")
																echo "<font class=required>*</font>";?></td>
														<td width="50%"><?
															$value = CForm::GetTextAreaValue(
																$arAnswer[0]["ID"],
																$arAnswer, 
																$arrVALUES);
															echo CForm::GetTextAreaField(
																$arAnswer[0]["ID"], 
																$arAnswer[0]["FIELD_WIDTH"], 
																$arAnswer[0]["FIELD_HEIGHT"],
																$arAnswer[0]["FIELD_PARAM"],
																$value);?></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

			<font class="starrequired">*</font><font class="smalltext"> - <?=GetMessage("FORM_REQUIRED_FIELDS")?></font>
			<p align="left">
			<input <?if (intval($F_RIGHT)<10) echo "disabled"?> type="submit" name="web_form_submit" value="<?echo (strlen(trim($arForm["BUTTON"]))<=0) ? GetMessage("FORM_ADD") : $arForm["BUTTON"]?>" class="inputbutton">&nbsp;&nbsp;<input type="reset" value="<?=GetMessage("FORM_RESET")?>" class="inputbutton">
			</p>
			</form>
		<?
		else:
			echo ShowError(GetMessage("FORM_ACCESS_DENIED"));
		endif;
	else:
		echo ShowError(GetMessage("FORM_NOT_FOUND"));
	endif;
else:
	echo ShowError(GetMessage("FORM_MODULE_NOT_INSTALLED"));
endif;
?>