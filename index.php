<?php

spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.php';
});

require "exampleData.php";


foreach ($exampleData as $data) {

    try {
        $res = new Results($data);
    } catch (Exception $e) {
        echo $e->getMessage(), "\n";
    }
    $result = $res->countFinalResults($data);

    if ($result['result'] == "failed") {
        echo '<p style="color: red">' . $result['msg'] . '</p>';
    }
    if ($result['result'] == "success") {
        echo '<p style="color: darkgreen">' . $result['msg'] . '</p>';
    }
}
