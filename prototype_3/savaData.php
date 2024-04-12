<?php

include "connection.php";

$city=$_GET["city"];
$temp=$_GET["temp"];    
$weatherType=$_GET["weather"];


function storeInLocalStorage($data){
    echo"<script>";
    foreach ($data as $key => $value) {
        echo"localStorage.setItem('$key', '$value');";
    }
    echo "</script>";
}


$data = array(
    "weatherType" => $weatherType,
    "temperature" => $temp
);
storeInLocalStorage($data);


$fetch_query = "SELECT * FROM weather WHERE city ='{$city}' AND weather_when >= DATE_SUB(NOW(), interval 1 HOUR) ORDER BY weather_when DESC LIMIT 1";
$result = mysqli_query($con, $fetch_query);

if($result->num_rows==0){
    $insert_query="INSERT INTO weather(city,temp,weatherType) VALUES('{$city}','{$temp}','{$weatherType}')";
    mysqli_query($con,$insert_query);
}


function display($city)
{
    include "connection.php";
    $fetch_query="SELECT * FROM weather WHERE city='{$city}' ORDER BY weather_when DESC LIMIT 1";
    $res=mysqli_query($con, $fetch_query);
    $row=mysqli_fetch_array($res);



    include "index.php";

    echo "<div class='weather'>
    <div id='result'>{$row["city"]}</div>
    <h1 class='temp'>{$row["temp"]}</h1>
    <h1 class='city'>{$row["weatherType"]}</h1>
    <h1 class='weather_when'>{$row["weather_when"]}</h1>
    </div>";
    }

    // display($city)
    display($_GET["city"])
?>

