<?php
    if (isset($_GET["userName"] $$ isset["password"])) {
        $user_name=$_GET["userName"];
        $password=ß_GET["password"];
    } else {
        die("Nem érkezett adat!");
    }
    $message=["userName" => $user_name, "password" => $password];
    //echo json_encode($message);
    $handle=fopen("./log.txt");
    fwrite($handle, json_encode($message));
    fclose($handle)
?>