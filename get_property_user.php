<?
$arResult = [];
$filter = Array("ID" =>$_SESSION['SESS_AUTH']['USER_ID']);
$res = Bitrix\Main\UserTable::getList(Array(
    "select"=>array('PERSONAL_PHONE', 'PERSONAL_CITY', 'PERSONAL_BIRTHDAY'),
    "filter"=>$filter,
));

while($arRes = $res->fetch()){
    $arResult['USER'] = $arRes;
}
