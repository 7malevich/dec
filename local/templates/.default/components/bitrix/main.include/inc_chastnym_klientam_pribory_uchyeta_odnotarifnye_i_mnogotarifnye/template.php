<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<p>
	В большинстве случаев достаточно установить однофазный прибор учета (без разбивки по ставкам и дифференциации по зонам суток).
</p>
<p>
	Однако иногда клиентам с очень высоким потреблением электроэнергии (например, при наличии электроотопительных установок) бывает выгоден расчет с дифференциацией по зонам суток.
</p>
<p>
	Многотарифный прибор учета предусматривает расчет по различным тарифам в зависимости от действующего времени суток. Самый недорогой тариф приходится на ночное время, а самый дорогой – на время пикового потребления электроэнергии.
</p>
<p>
	Дневная зона – это время с 7.00 до 23.00.
</p>
<p>
	Ночная зона – с 23.00 до 7.00.
</p>
<p>
	Пиковая зона – с 7.00 до 10.00, с 17.00 до 21.00.
</p>
<p>
	Полупиковая – зона с 10.00 до 17.00 и 21.00 до 23.00.
</p>
<p>
	Интервальные зоны суток установлены Приказом Федеральной службы по тарифам от 26.11.2013 № 1473-э.
</p>
<p>
	Бытовые потребители могут установить многотарифный счетчик. Но прежде рекомендуем ознакомиться с тарифами и произвести примерные&nbsp;<a href="/chastnym-klientam/distantsionnye-servisy/kalkulyator-ekonomicheskoy-vygody/">вычисления</a>&nbsp;– действительно ли вам удобно и выгодно производить дифференцированный расчет. Для того, чтобы это было выгодно, самые энергоемкие приборы и оборудование должны работать в ночной период.
</p>
<p>
	С 1 января 2022 года потребителям по текущим заявкам должны устанавливаться только «умные» приборы учета, которые обеспечивают возможность присоединения к интеллектуальной системе учета электроэнергии и возможность дистанционной смены тарифного плана*.<br>
 <br>
	 *Федеральный закон от 27.12.2018 № 522-ФЗ «О внесении изменений в отдельные законодательные акты Российской Федерации в связи с развитием систем учета электрической энергии (мощности) в Российской Федерации», внесены изменения в Федеральный закон от 26.03.2003 № 35-ФЗ «Об электроэнергетике».
</p>