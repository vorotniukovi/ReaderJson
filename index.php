<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?
set_time_limit(0);
ini_set('memory_limit', '2056M');
use dump_r\Core;

$jsonStream = \JsonMachine\JsonMachine::fromFile("data.json");
foreach ($jsonStream as $name) {
    echo "<pre>";
        print_r($name);
    echo "</pre>";
}
?>
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>