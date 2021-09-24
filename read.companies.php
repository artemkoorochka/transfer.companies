<?
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS",true);
define("BX_CRONTAB", true);
define('BX_WITH_ON_AFTER_EPILOG', true);
define('BX_NO_ACCELERATOR_RESET', true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

function d($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
$json = file_get_contents("companies.json");
$array = json_decode($json,TRUE);
$array = $array["Sheet1"];

$arParams = [
    "START" => 4
];

$arResult = [
    "SECTIONS" => [],
    "ITEMS" => []
];

foreach ($array as $k=>$item)
{
    if($k < $arParams["START"])
        continue;
    d($item);
}