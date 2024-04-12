<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
    box-sizing: border-box;
}

body{
    
    background-size: cover;
    background-image: url("background_img.jpg");
    width: 100%;
    height: 100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction: column;

}

 input{
    border: 0;
    outline: 0;
    background: #ffffff;
    color: black    ;
    padding: 10px 25px;
    border-radius: 30px;
    flex: 1;
    margin-right: 16px;
    font-size: 18px;
}
.search button{
    padding: 9px 20px;
    border-radius:10px;
}
.search{
    width: 40%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.weather{
    align-items: center;
    text-align: center;
    margin-bottom: 200px;
}
</style>         



<body>
    <div class="container">
        <div class="search">
        <input type="text" id='search' placeholder="Enter the city name" spellcheck="false">
        <button id="button" name='btn'  type="submit">searach</button>
        </div>

    </div>
        <br>
    <?php
        if(isset($_GET["btn"]))
        {
            include "savaData.php";
        }
    ?> 
    <script src='script.js'></script> 
</body>
</html>