<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
    <style>
    #subfooter1 {
    width: 600px;
    height: 250px;
    background: #f2f2f2;
    float: left;
    margin-top: 25px;
    border-radius: 10px;
    margin-right: 50px;
}
    #subfooter1 h3{
    text-align: left;
    margin-top: 20px;
    margin-bottom: 20px;
    font-family: sans-serif;
    font-size: 1.5em;
    font-weight: bold;
    color: #e8491d;
    text-align: center;
    text-transform: capitalize
}
[type=password], [type=email] {
    border: 1px solid #silver;
    border-radius: 3px;
    width: 250px;
    height: 30px;
    margin-left: 25px;
    margin-bottom: 20px;
}
[type=text]{
    border: 1px solid #silver;
    border-radius: 3px;
    width: 250px;
    height: 30px;
    margin-left: 25px;
    margin-bottom: 20px;
}
#submit{
    width: 100px;
    height: 40px;
    background: deepskyblue;
    color: #fff;
    float: left;
    margin-left: 25px;
    border: 1px solid deepskyblue;
    border-radius: 3px;
    font-weight: lighter;
    font-size: 1em;
}
    </style>
</head>
<body>
 <div id="subfooter1">
  <form action="config.php" method="POST">
  <h3>Register</h3>
  <input type="text" name="text" placeholder="username"><br>
  <input type="password" name="password" placeholder="password"><br>
  <input type="password" name="password" placeholder="confirm_password"><br>
  <input type="submit" name="submit" value="submit" id="submit">
  <input type="reset" name="reset" value="reset" id="submit">
  </form>
</div>
</body>
</html>