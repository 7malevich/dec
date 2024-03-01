<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/install/wizard_sol/wizard.php");

class SelectSiteStep extends CSelectSiteWizardStep
{
	function InitStep()
	{
		parent::InitStep();
		$wizard =& $this->GetWizard();
		$wizard->solutionName = "in_studio_landing";
	}
}

class SelectTemplateStep extends CSelectTemplateWizardStep {

	function InitStep()
	{
		$this->SetStepID("select_template");
		$this->SetTitle(GetMessage("SELECT_TEMPLATE_TITLE"));
		$this->SetSubTitle(GetMessage("SELECT_TEMPLATE_SUBTITLE"));
		if (!defined("WIZARD_DEFAULT_SITE_ID"))
		{
			$this->SetPrevStep("select_site");
			$this->SetPrevCaption(GetMessage("PREVIOUS_BUTTON"));
		}
		else
		{
			$wizard =& $this->GetWizard(); 
			$wizard->SetVar("siteID", WIZARD_DEFAULT_SITE_ID); 
		}

		$this->SetNextStep("data_install");
		$this->SetNextCaption(GetMessage("NEXT_BUTTON"));
	}

}

class DataInstallStep extends CDataInstallWizardStep
{
}

class FinishStep extends CFinishWizardStep
{
	function InitStep()
	{
		parent::InitStep();
		$this->SetStepID("finish");
		$this->SetNextStep("finish");
	}
}