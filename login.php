<!DOCTYPE html>
<html>

<head>
    <title>Inicio</title>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=utf-8">
    <meta name="generator" content="Bluefish 2.2.2" >
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<script>
  $(document).ready(function () {
    $('.menu').load('./menu/menu.php');
});
</script>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="column1">
                <img src="./img/logo.png" alt="Logo">
            </div>
            <div class="column2">
                <div class="menu"></div>
            </div>
        </div>
    </div>

  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Login</h1>
      </div>

      <div class="login-form">
        <div class="control-group">
        <input type="text" class="login-field" value="" placeholder="username" id="login-name">
        <label class="login-field-icon fui-user" for="login-name"></label>
        </div>

        <div class="control-group">
        <input type="password" class="login-field" value="" placeholder="password" id="login-pass">
        <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>

        <a class="btn btn-primary btn-large btn-block" href="#">login</a>
        <a class="login-link" href="#">Lost your password?</a>
      </div>
    </div>
  </div>
</body>

</html>
