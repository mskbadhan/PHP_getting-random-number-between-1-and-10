<title>Welcome to the php works</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:100);
    body{
        background: #34495e;
        text-align: center;
        font-size:20px;
        margin-top:100px;
        color:white;
        font-family:'Raleway', sans-serif;;
    }
    textarea{
        font-size:17px;
    }
    .submit{
        width:100px;
        height:40px;
        background: #2dffdf;
        font-size: 17px;
    }
</style>

<?php
if(isset($_POST["roll"])){
    $rand = rand(1,10);  //the random number is here
    echo "$rand";
}
?>


<form action="index.php" method="POST">
    <br><input type="submit" value="Roll it" name="roll" class="submit">
</form>