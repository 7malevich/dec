<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$skolko_dnei = 10;
$dir_rab = "uvedomleniya";
$dir_arc = "archive";
$mycounter = 0;

echo "<pre>Starting...<br><br>";

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
							echo "created dir: ".$dir_y_m;
					   }
						rename("$dir_rab/$file", "$dir_arc/$dir_y_m/$file"); 
					   echo 'file no.'.++$mycounter.': "'.$dir_y_m.'/'.$file.'" archived successfully<br>';
				   }
               }
           }
           closedir($handle);
        }
echo "Done.";
?>