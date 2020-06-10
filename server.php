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




// var_dump (mysqli_fetch_object($result));
// foreach ($result as $value) {
    // var_dump ((object) $value);
    // var_dump (mysqli_fetch_object($result));

    // $resp->$value["id"] = $value;

    // var_dump ($resp);

    // var_dump (json_encode($value, JSON_UNESCAPED_UNICODE));
// };

