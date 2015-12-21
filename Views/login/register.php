<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= URL?>/Public/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= URL?>/Public/bootstrap/css/awesomefont.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= URL?>/Public/bootstrap/css/code.ionicframework.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= URL?>/Public/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= URL?>/Public/plugins/iCheck/square/blue.css">

  </head>
  <body class="hold-transition register-page">
    <div class="register-box">

      <div class="register-box-body">
        <p class="login-box-msg">it is free and always will be , register now</p>
        <a href="<?= URL?>/login">OR SIGN IN</a>
        <form action="register" method="post">

          <div class="form-group has-feedback">
            <input type="text" name="firstname" class="form-control" placeholder="First name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="text" name="lastname" class="form-control" placeholder="Last name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" name="password"class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" name="password2"class="form-control" placeholder="Confirm password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

<!--           <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password"
            name="password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div> -->

          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Phone number" name="phone">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="text" name="hometown" class="form-control" placeholder="Hometown">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <label class = "Gender">Select Gender :</label>
      <label class = "male">Male </label><input type="radio" name="gender" value="male" />
        <label>Female</label><input type="radio" name="gender" value="female" /><br><br>

      <label class = "Marital">Status : </label>
      <label class = "Single">Single</label>
      	<input type="radio" name="status" value="single"/>
      <label>Engaged</label>
      	<input type="radio" name="status" value="engaged" />
      <label> Married</label>
      	<input type="radio" name="status" value="married" /><br><br>

        <label class = "Birthday">Birthday : </label>
        <input type="date" name="birthday"/>
        <br/>

        <label>Profile Picture</label>
        <input type='file' name='userFile'><br>


      <label class = "aboutme">About yourself :</label><br><br>
      <textarea name="aboutme"class="aboutmearea" rows="3" cols="45"></textarea><br><br>

          <div class="row">
            <div class="col-xs-8">
              <div >
                <label></label>
              </div>
            </div><!-- /.col -->

            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>

        </form>

    </div>

    <script src="<?= URL?>/Public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?= URL?>/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= URL?>/Public/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>