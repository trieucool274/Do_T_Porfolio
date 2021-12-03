<?php
    require("connect.php");
    require("functions.php");

    // filter the incoming request
    //If an ID is specified show that project, if not show all of them
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $result = getData($pdo, $id);

   // send the database result (our data) back to the javascript file
   echo json_encode($result);
