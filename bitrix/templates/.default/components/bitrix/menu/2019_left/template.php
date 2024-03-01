<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
function dump($var){
	print '<pre style="font:11px fixedsys, arial; color: #000;">';
	var_dump($var);
	print '</pre>';
}

function startSubMenu($level){
	print "<ul class='level-$level'>";
}
function endSubmenu($prevLevel, $currLevel=1){
	print str_repeat("</ul></li>", ($prevLevel - $currLevel));
}

$GLOBALS['menuLevel'] = 1;
$GLOBALS['stopLevel'] = 99;
$GLOBALS['curDir'] = trim($APPLICATION->GetCurDir(), '/');

/**
 * Рекурсивно разбирает итемы в сложный массив.
 * Массив всегда собирается полностью, заодно выясняется,
 * какой пункт выделен и на каком он уровне.
 * @param  $items
 * @param bool $activeBranch
 * @return array
 */
function buildMenuR($items){
	$ret = array();
	// текущая вложенность
	$currentLevel = $items[0]['DEPTH_LEVEL'];

	foreach($items as $i => $item){

		// определяем, является ли данный пункт текущим
		// если да - устанавливаем выбранный уровень вложенности
		if ( $item["SELECTED"]
				&& ($GLOBALS['curDir'] == trim($item["LINK"], '/'))
		){
			$GLOBALS['menuLevel'] = $item["DEPTH_LEVEL"];
			$GLOBALS['stopLevel'] = $item["DEPTH_LEVEL"] + 1;
		}

		// элемент текущего уровня вставляем в результат
		if($item['DEPTH_LEVEL'] == $currentLevel){
			$ret[$i] = $item;
			unset($items[$i]);
			// если есть вложенные элементы - перебираем оставшиеся,
			// отбирая те, что уровнем ниже
			if($ret[$i]['IS_PARENT']){
				$subItems = array_slice($items, 0);
				$ret[$i]['items'] = buildMenuR($subItems);
			}
		}else{
			// если элемент уровнем выше - поднимаемся уровнем выше
			if($item['DEPTH_LEVEL'] > $currentLevel){
				unset($items[$i]);
				continue;
			}else{
				break;
			}
			// вложенные уровнем ниже пропускаем
		}
	}
	unset($items);
	// результат - меню элементов текущего уровня
	return $ret;
}


function showMenuR($items){
	foreach($items as $i=>$item){
		$addClass = $item['SELECTED'] ? 'typical-aside-nav__link active' : 'typical-aside-nav__link';
		if($item['DEPTH_LEVEL'] <= $GLOBALS['stopLevel']){
			if($item['DEPTH_LEVEL']!=1){ //отключаем вывод первого пункта меню
			printf(
				'<li class="typical-aside-nav__item"><a class="%s" href="%s"><span>%s</span></a>',
				$addClass,
				$item['LINK'],
				$item['TEXT']
			);
			}
			if($item['items'] && $item['SELECTED']){
				$level = $item['DEPTH_LEVEL'] + 1;
				print "<ul class='level-$level'>";
				showMenuR($item['items']);
				print '</ul>';
			}
			print '</li>';

		}
	}
}
?>
<?if (!empty($arResult)){?>
<ul class="sideMenu level-1">
<?
$previousLevel = 0;
$itemDisplayed = false;
//$currentDisplayed = false;
$currentLevel = 1;
$stopLevel = 99;
$showThisLevel = true;
$rootActive = false;

$newarr = $arResult;
$menuRecomposed = buildMenuR($newarr);
//dump($menuRecomposed);
showMenuR($menuRecomposed);

?>

</ul>
<?}?>