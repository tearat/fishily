<?php

//Загрузка smarty
require_once '/smarty/Smarty.class.php';
$smarty = new Smarty();

//Загрузка класса приложения
require_once '/app/app.class.php';
$app = new App();

//============================================================

$smarty->display( './views/_constructor.html' );

?>