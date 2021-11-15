<script src="https://livejs.com/live.js"></script>
<script src="src/showdown.js"></script>
<script src="src/script.js"></script><noscript>

<?php

//DEV or PROD
$APP_ENV = "DEV";

if($APP_ENV == "DEV"){
    $urlHost = "D:/Github/MyDocumentation/";
}else if ($APP_ENV == "PROD"){
    die("ERREUR : APP_ENV ????");
} else {
    die("ERREUR : APP_ENV ????");
}

//Home
if (empty($_GET['page'])){
    $url = $urlHost . "README.md";

} else if (empty($_GET['add'])) {
    $url = $urlHost . $_GET['page'] . "/README.md";

} else {
    $url = $urlHost . $_GET['page'] . "/" . $_GET['add'] . ".md";
}



include $url;