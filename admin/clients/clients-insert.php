<?php
include "../init2.php";
foreach ($_POST as $input => $value) {
    $inputs[] = $input;
    $values[] = $value;
    if(($key = array_search(submit, $inputs)) !== false) {
        unset($inputs[$key]);
        }
    }
    $values_imp = implode("','", $values);
$inputs_imp = implode(",", $inputs);
$name = $_POST['name'];
$table = $_POST['table'];
upload("file","","../../data/uploads/");
// sql("INSERT INTO $table (name,image) VALUES ('$name','$insert_src')","");
sql("INSERT INTO $table (name,image) VALUES ('$values_imp')","");
// $insert = $con->prepare("INSERT INTO $table ($inputs_imp) VALUES ('$values_imp')");
?>
