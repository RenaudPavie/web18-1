<?php

$content = glob('./template/*.inc.php');
$page = isset($_GET['page']) ? $_GET['page'] : "";

$page = './template/' . $page . '.inc.php';

if (in_array($page, $content)) {
  require $page;
} else {
  require './template/home.inc.php';
}
