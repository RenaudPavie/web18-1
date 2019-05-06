
<?php

$page = isset($_GET['page']) ? $_GET['page'] : "";
$page = './template/' . $page . '.php';

require $page;
