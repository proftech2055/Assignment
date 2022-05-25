<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action = "user_data.php" method = "POST">
   NAME: <input type = "text" name = "name"><br><br>
   EMAIL: <input type = "email" name = "email"><br><br>
   DATE OF BIRTH <input type = "date" name = "date_birth"><br><br>
    <input type = "radio" name = "gender" value = "male">MALE
    <input type = "radio" name = "gender" value = "female">FEMALE<br><br>
   COUNTRY: <input type = "text" name = "country"><br>
    <input type = "submit" name = "submit">
</form>
</body>
</html>