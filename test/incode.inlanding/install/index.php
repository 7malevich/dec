<?
global $MESS;
$PathInstall = str_replace("\\", "/", __FILE__);
$PathInstall = substr($PathInstall, 0, strlen($PathInstall)-strlen("/index.php"));
IncludeModuleLangFile($PathInstall."/index.php");
Class incode_inlanding extends CModule
{
	var $MODULE_ID = "incode.inlanding";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $MODULE_GROUP_RIGHTS = "Y";
	function incode_inlanding()
	{
		$arModuleVersion = array();
		include(dirname(__FILE__)."/version.php");
		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->MODULE_NAME = GetMessage("INVICTO_INSTALL_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("INVICTO_INSTALL_DESCRIPTION");
		$this->PARTNER_NAME = GetMessage("SPER_PARTNER");
		$this->PARTNER_URI = GetMessage("PARTNER_URI");
	}
	function InstallDB($install_wizard = true)
	{
        RegisterModule("incode.inlanding");
		return true;
	}
	function UnInstallDB($arParams = Array())
	{
        UnRegisterModule("incode.inlanding");
		return true;
	}
	function InstallEvents()
	{
		return true;
	}
	function UnInstallEvents()
	{
		return true;
	}
	function InstallFiles()
	{
		return true;
	}
	function InstallPublic()
	{
	}
	function UnInstallFiles()
	{
		return true;
	}
	function DoInstall()
	{
        $this->InstallDB();
        $this->InstallFiles();
    }
	function DoUninstall()
	{
        $this->UnInstallDB();
        $this->UnInstallFiles();
    }
}