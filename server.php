<?php
header('Content-type: application/json');
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "", "adaurum") or die("Error:" . mysqli_connect_error());


$sql = "SELECT `id`, `title`, `address`, `tel` FROM `companies` WHERE 1";

$result = mysqli_query($link, $sql) or die('Query failed: '.mysqli_error());
// var_dump ($result);

$resp = new stdClass();

while ($data = mysqli_fetch_object($result)) {
    // var_dump ($data->id);
    $key = $data->id;
    $resp->$key = $data;
    // var_dump ($resp);
};
$ret = json_encode($resp, JSON_UNESCAPED_UNICODE);

echo $ret;


if ($_POST['saveData']) {
    print_r ($_POST);
    $data = json_decode($_POST['saveData']);
    
    $db = [
        "title" => $data->title,
        "inn" => $data->inn,
        "info" => $data->info,
        "gd" => $data->gd,
        "address" => $data->address,
        "tel" => $data->tel,
    ];
    print_r ($db);
    $sql = "INSERT INTO `companies`(`title`, `inn`, `info`, `gd`, `address`, `tel`) 
            VALUES ('$db[title]','$db[inn]','$db[info]','$db[gd]','$db[address]','$db[tel]');";

    $result = mysqli_query($link, $sql) or die('Query failed: '.mysqli_error());
};

// if ($_GET['id']) {
//     var_dump ($_GET['id']);
// };