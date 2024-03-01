<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><? 
//редактирование информации о партнере
IncludeTemplateLangFile(__FILE__); //подключаем языковой файл
if(!$USER -> IsAdmin()):
	if(CModule::IncludeModule("iblock")):
		$error = "";
		
		$IBLOCK = (isset($IBLOCK) ? $IBLOCK : "partners");
		$IBLOCK_TYPE = (isset($IBLOCK_TYPE) ? $IBLOCK_TYPE : "partners");

		foreach($_POST as $v_name => $v_val) //обрабатываем параметры
		{
			$$v_name = $v_val;
		}


		$iblock_part = CIBlockElement::GetList(Array("SORT"=>"ASC", "NAME"=>"ASC"), Array("IBLOCK_CODE" => $IBLOCK,  "CREATED_BY" => $USER->GetID())); //выбираем партнера по привязке к пользователю, который создал это описание
		$arpart = $iblock_part -> GetNext();

		$parent = $arpart["ID"];
		$parentib = $arpart["IBLOCK_ID"];

		if ($submit == "")
		{
		$WF_ID = CIBlockElement::WF_GetLast($arpart["ID"]); //получаем последний элемент документооборота
		$result = CIBlockElement::GetByID($WF_ID);
		$res = $result -> GetNext();
		}

		$arpart["ID"] = $res["ID"];
		if ($arpart["ID"] == "" && $submit == "")
		{
			echo "<p class=errortext>".GetMessage("RIGHTS")."</a></p>";
			$error = "error";
		}

		if (strlen($name) >= 3 && strlen($submit) > 0) // если форма отправлена и имя компании длиннее 3 символов
		{
						/*Добавление элемента*/
						$bsp = new CIBlockElement;
						$arProp["NAME"] 									= $name;
						$arProp["IBLOCK_ID"] 						= $parentib;
						$arProp["IBLOCK_SECTION"]			= false;
						$arProp["DETAIL_TEXT"] 					= $detailt;
						$arProp["PREVIEW_TEXT"] 				= $previewt;
						$arProp["CREATED_BY"]						= $USER->GetID();
						$arProp["MODIFIED_BY"]					= $USER->GetID();
						$arProp["WF_STATUS_ID"] 				= 2;

						if(!$bsp->Update($parent, $arProp, true))
							echo $bsp->LAST_ERROR;
						
						$bs = new CIBlockElement;

						/*добавление свойств*/
						$ar_Fields["country"] = $country;
						$ar_Fields["url"] = $url;
						$ar_Fields["activity"] = $activity;
						$ar_Fields["address"] = $address;
						$ar_Fields["phone"] = $phone;

						/*добавление картинки*/
						$files = $_FILES["picture"];
						
						
						if(is_array($files)) // переварачиваем массив с файлом
						{
							foreach($files as $k1=>$val1)
							{
								foreach($val1 as $k2=>$val2)
								{
									if(!is_array($PROP[$k2]))
										$PROP[$k2] = Array();
									$PROP[$k2][$k1] = $val2;
								}
							}
						$ar_Fields["logo"] = $PROP;
						}
						
						//добавление свойств
						$WF_ID = CIBlockElement::WF_GetLast($parent);

						$result = CIBlockElement::GetByID($WF_ID);
						$res = $result -> Fetch();
						
						foreach($ar_Fields as $code => $val)
						{
							$bs->SetPropertyValues($res["ID"], $res["IBLOCK_ID"], $val, $code);
						}
						//конец добавления свойств				

						echo "<font class='oktext'>".GetMessage("THANKS")."</font><br>";	

		}else{
			if (strlen($name) < 3 && strlen($submit) > 0)  
			{
				echo "<font class='errortext'>".GetMessage("REQUIRED_FIELDS")."</font>";
				$req = "nado";
			}
		?>
		<?if ($error==""):?>

		<FORM ENCTYPE="multipart/form-data" NAME="EDIT" ACTION="" method="POST">
		<table border="0" cellpadding="1" cellspacing="0" width="100%" class="tableborder">
		<tr>
			<td width="100%" class="tableborder">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tablebody">
		<?		if ($req == "")
					{
								$elementbyid = CIBlockElement::GetByID($res["ID"]);
								$arIBlockElementP = $elementbyid -> Fetch();

								$propbyid = CIBlockElement::GetProperty($res["IBLOCK_ID"] ,$res["ID"], Array(), Array(), Array()); //получаем свойства
								while($arIBlockElementProp = $propbyid -> Fetch()):
										$$arIBlockElementProp["CODE"] = $arIBlockElementProp["VALUE"];
								endwhile;

								$propbyid = CIBlockElement::GetProperty($res["IBLOCK_ID"], $res["ID"], Array(), Array(), Array("CODE" => "activity")); // получаем множественное свойство типа список
								$activity = Array();
								while($arIBlockElementProp = $propbyid -> Fetch()):
								${$arIBlockElementProp["CODE"]}[] = $arIBlockElementProp["VALUE"];
								endwhile;

								$name = $arIBlockElementP["NAME"];
								$detailt = $arIBlockElementP["DETAIL_TEXT"];
								$previewt = $arIBlockElementP["PREVIEW_TEXT"];
								$picture = $arIBlockElementP["PREVIEW_PICTURE"];
					}	?>
						<input type="hidden" class="inputtext" name="picture[]" value="<? echo $picture;?>">
			<tr>
				<td width="100%" align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tablebody">
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px"  class="tableheadtext" align="right" valign="top"><font class="required">*</font><?echo GetMessage("NAME")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><input type="TEXT" class="inputtext" name="name" value="<? echo $name;?>" style="width:95%"></td>
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px"  class="tableheadtext" align="right" valign="top"><?echo GetMessage("PROFILE")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><?
						$enum_conf1 = CIBlockPropertyEnum::GetList(Array("NAME"=>"ASC"), Array("CODE"=>"activity", "IBLOCK_ID" => $res["IBLOCK_ID"])); //получаем значения множественного свойства типа список
						while($arEnumConf1 = $enum_conf1->GetNext())
						{
						?>
									<input type="checkbox" class="inputcheckbox" id="<?=$arEnumConf1["ID"]?>" name="activity[]" value="<?echo $arEnumConf1["ID"];?>" <? if (in_array($arEnumConf1["ID"], $activity)) echo " checked";?>><label for="<?=$arEnumConf1["ID"]?>"><?echo $arEnumConf1["VALUE"];?></label><br>
						<?}?></td>				
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" align="right" valign="top"><font class="tableheadtext"><?echo GetMessage("PREVIEW")?>:</font><br><font class="tableheadtext" size="-2"><?echo GetMessage("PREVIEW_LIM")?></font></td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><TEXTAREA name="previewt" ROWS="5" style="width:95%" class="inputtextarea"><? echo $previewt?></TEXTAREA></td>
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" align="right" valign="top"><font class="tableheadtext"><?echo GetMessage("DETAIL")?>:</font><br><font class="tableheadtext" size="-2"><?echo GetMessage("DETAIL_LIM")?></font></td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><TEXTAREA name="detailt" ROWS="5" style="width:95%" class="inputtextarea"><? echo $detailt?></TEXTAREA></td>
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" align="right" valign="top"><font class="tableheadtext"><?echo GetMessage("LOGO")?>:</font><br><font class="tableheadtext" size="-2"><?echo GetMessage("LOGO_LIM")?></font></td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left" valign="top"><? if(strlen($picture)>0) echo ShowImage($picture, 50, 10000, "hspace='2' vspace='2' align='left' border='0'", "")."<br clear=all>";?><input TYPE=FILE NAME="picture" style="width:95%" class="inputtext" style="width:95%"></td>
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px"  class="tableheadtext" align="right" valign="top"><?echo GetMessage("SITE")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><input type="TEXT" class="inputtext" name="url" value="<? echo $url?>" style="width:95%"></td>				
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" class="tableheadtext" align="right" valign="top"><?echo GetMessage("COUNTRY")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><input type="input" name="country" style="width:95%" class="inputtext" value="<? echo $country?>"></td>
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px"  class="tableheadtext" align="right" valign="top"><?echo GetMessage("ADDRESS")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><input type="TEXT" class="inputtext" name="address" value="<? echo $address;?>" style="width:95%"></td>			
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px"  class="tableheadtext" align="right" valign="top"><?echo GetMessage("PHONE")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><input type="TEXT" class="inputtext" name="phone" value="<? echo $phone;?>" style="width:95%"></td>				
					</tr>
					</table>
				</td>	
			</tr>
			</table>
			</td>
		</tr>
		</table>
		<p align="left"><font class="required">*</font><font class="text"> - <?echo GetMessage("REQ_FIELDS")?></font></p>
		<p align="left"><INPUT type="submit" alt="<?echo GetMessage("SAVE")?>" value="<?echo GetMessage("SAVE")?>" class="inputbutton" border="0" name="submit"></p>
		</FORM>
		<? 
			endif;
		}
	endif;
else:
	echo "<font class=\"text\">".GetMessage("ADMIN")."</font>";
endif;
?>