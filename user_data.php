<?php
if(isset($_POST["name"],$_POST["email"],$_POST["date_birth"],$_POST["gender"],$_POST["country"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date_birth = $_POST["date_birth"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $filename = "./userdata.csv";
    $file = fopen($filename,"a");
    if(fwrite($file,"$name , $email, $date_birth, $gender, $country \n"))
    {
        header("location:output.php");
    }
    else
    {
        echo "error occur";
    }
    fclose($file);
    
}
?>