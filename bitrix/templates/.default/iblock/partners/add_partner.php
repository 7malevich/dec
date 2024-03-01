<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><? 
//добавление партнера
IncludeTemplateLangFile(__FILE__); //подключаем языковой файл
if(!$USER -> IsAdmin()):
	if(CModule::IncludeModule("iblock")):
		$IBLOCK = (isset($IBLOCK) ? $IBLOCK : "partners");
		$IBLOCK_TYPE = (isset($IBLOCK_TYPE) ? $IBLOCK_TYPE : "partners");

		$iblocks = GetIBlockList($IBLOCK_TYPE, $IBLOCK); //выбираем информационный блок
		$arIBlock = $iblocks->GetNext();
		foreach($_POST as $v_name => $v_val) //обрабатываем параметры
		{
			$$v_name = $v_val;
		}

		if (strlen($name) >= 3 && strlen($submit) > 0) // если форма отправлена и имя компании длиннее 3 символов
		{	

						$bs = new CIBlockElement;
						$ar_Fields["ACTIVE"]													= "Y";
						$ar_Fields["IBLOCK_ID"]											= $arIBlock["ID"];
						$ar_Fields["NAME"] 														= $name;
						$ar_Fields["PREVIEW_TEXT"] 									= $previewt;
						$ar_Fields["DETAIL_TEXT"] 										= $detailt;
						$ar_Fields["CREATED_BY"] 										= $USER->GetID();
						$ar_Fields["MODIFIED_BY"] 										= $USER->GetID();
						$ar_Fields["WF_STATUS_ID"] 									= 2;
						$ar_Fields["PROPERTY_VALUES"]["country"]	= $country;
						$ar_Fields["PROPERTY_VALUES"]["url"]				= $url;
						$ar_Fields["PROPERTY_VALUES"]["activity"]		= $activity;
						$ar_Fields["PROPERTY_VALUES"]["address"]	= $address;
						$ar_Fields["PROPERTY_VALUES"]["phone"]		= $phone;

						if ( strpos( "1".$_FILES["picture"]["type"], "image" ) == 0 ): //добавление картинки
							echo "<br><font class='errortext'></font>";					
						else:
							$ar_Fields["PREVIEW_PICTURE"] 	= $_FILES["picture"];
						endif;

						if ( $bs->Add($ar_Fields,true) > 0 ) //если добавление прошло без ошибок
						{
							echo "<font class='oktext'>".GetMessage("THANKS")."</font><br>";	
						}
						else
						{
							echo "<br><font class='errortext'>".GetMessage("ERROR")."</font><br>";	
						}

		}
		else
		{

			if (strlen($name) < 3  && strlen($submit) > 0)  // если форма отправлена и не введены обязательные поля
			{
				echo "<font class='errortext'>".GetMessage("REQUIRED_FIELDS")."</font>";
			}
		?>
		<!--Начало формы!-->
		<FORM ENCTYPE="multipart/form-data" NAME="ADD_RES" ACTION="" method="POST">
		<table border="0" cellpadding="1" cellspacing="0" width="100%" class="tableborder">
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tablebody">
			<tr>
				<td width="100%" align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tablebody">
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" class="tableheadtext" align="right" valign="top"><font class="required">*</font><font class="tableheadtext" align="right"><?echo GetMessage("NAME")?>:</font></td>
						<td width="55%" style="padding:5px 0px 2px 5px"><input type="TEXT" class="inputtext" name="name" value="<? echo $name?>" style="width:95%"></td>				
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" class="tableheadtext" align="right" valign="top"><?echo GetMessage("PROFILE")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><? $activity=array(); 
						$enum_conf1 = CIBlockPropertyEnum::GetList(Array("NAME"=>"ASC"), Array("IBLOCK_ID" => $arIBlock["ID"], "CODE" => "activity"));//получаем множественное свойство типа список
							while($arEnumConf1 = $enum_conf1->GetNext())
							{                             
								?>
								<input type="checkbox" class="inputcheckbox" id="<?=$arEnumConf1["ID"]?>" name="activity[]" value="<?echo $arEnumConf1["ID"];?>" <?if (in_array($arEnumConf1["ID"],  $activity)) echo " checked";?>><label for="<?=$arEnumConf1["ID"]?>"><?echo $arEnumConf1["VALUE"];?></label><br>
								<?
							}?></td>				
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
						<td width="55%" style="padding:5px 0px 2px 5px" align="left" valign="top"><input TYPE=FILE NAME="picture" style="width:95%" class="inputtext"></td>
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" class="tableheadtext" align="right" valign="top"><?echo GetMessage("SITE")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><input type="TEXT" class="inputtext" name="url" value="<? echo $url?>" style="width:95%"></td>				
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" class="tableheadtext" align="right" valign="top"><?echo GetMessage("COUNTRY")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><input type="input" name="country" style="width:95%; " class="inputtext" value="<? echo $country?>"></td>
					</tr>
					<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" class="tableheadtext" align="right" valign="top"><?echo GetMessage("ADDRESS")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><input type="TEXT" class="inputtext" name="address" value="<? echo $address?>" style="width:95%"></td>				
					</tr>
						<tr>
						<td width="45%" style="padding:5px 0px 2px 5px" class="tableheadtext" align="right" valign="top"><?echo GetMessage("PHONE")?>:</td>
						<td width="55%" style="padding:5px 0px 2px 5px" class="tablebodytext" align="left"><input type="TEXT" class="inputtext" name="phone" value="<? echo $phone?>" style="width:95%"></td>				
					</tr>
				</table>
				</td>	
			</tr>
			</table>
			</td>
		</tr>
		</table>
		<p align="left"><font class="required">*</font><font class="text"> - <?echo GetMessage("REQ_FIELDS")?></font></p>
		<p align="left"><input type="submit" alt="<?echo GetMessage("ADD")?>" value="<?echo GetMessage("ADD")?>" class="inputbutton" border="0" name="submit"></p>
		</FORM>
	<?
		}
	endif;

else:
	echo "<font class=\"text\">".GetMessage("ADMIN")."</font>";
endif;
?>