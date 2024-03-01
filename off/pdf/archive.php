<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); //Подключили ядро битрикса

$skolko_dnei = 60;
$dir_rab = $_SERVER["DOCUMENT_ROOT"]."/off/pdf/uvedomleniya";
$dir_arc = $_SERVER["DOCUMENT_ROOT"]."/off/pdf/archive";
$mycounter = 0;

$mess = "<pre>Starting...<br>";

    if (is_dir("$dir_rab") )
        {
           $handle=opendir($dir_rab);
           while (false!==($file = readdir($handle))) {
               if ($file != "." && $file != "..") { 
                   $Diff = (time() - filemtime("$dir_rab/$file"))/60/60/24;
					$dir_y_m = date ("Y-m", filemtime("$dir_rab/$file"));
				   if ($Diff > $skolko_dnei) {
					   if (!file_exists("$dir_arc/$dir_y_m")) {
							mkdir("$dir_arc/$dir_y_m", 0755);
							$mess .= "created dir: ".$dir_y_m."<br>";
					   }
						rename("$dir_rab/$file", "$dir_arc/$dir_y_m/$file"); 
					   $mess .=  'file no.'.++$mycounter.': "'.$dir_y_m.'/'.$file.'" archived successfully<br>';
				   }
               }
           }
           closedir($handle);
        }
	$mess .= $mycounter." files moved to archive.<br>Done.";

echo $mess;
?>