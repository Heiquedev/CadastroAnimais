<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body class="bg-secondary-subtle">
    <div class="d-flex justify-content-center mt-5">
        <div class="d-flex justify-align-content-around ">
            <a class="btn btn-outline-success me-2" href="/animal/formanimal">Cadastro</a>
            <a class="btn btn-outline-success me-2" href="/animal">Lista</a>
        </div>
    </div>
</body>

</html>

<?php

include 'Controller/AnimalController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//echo $url;
//echo "<br>";

switch ($url) {

    case '/':
        echo "🏡";
        break;

    case "/animal":
        AnimalController::index();
        break;

    case '/animal/formanimal':
        AnimalController::form();
        break;

    case '/animal/formanimal/save':
        AnimalController::save();
        break;

    case '/animal/delete':
        AnimalController::delete();
        break;

    default:
        echo "<br>erro 404";
        break;
}
