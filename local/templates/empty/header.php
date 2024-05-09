
<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;?>
<!DOCTYPE html>
<head>
    <?$APPLICATION->ShowHead();?>



        <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/build/images/favicon.604825ed.ico" type="image/x-icon">


   <!-- <link href="<?//=SITE_TEMPLATE_PATH?>/components/bitrix/news.list/myTemplate1/build/css/common.css" rel="stylesheet">-->
    <link href="<?=SITE_TEMPLATE_PATH?>/build/css/common.css" rel="stylesheet">
</head>
<body>

<?$APPLICATION->ShowPanel();?>
