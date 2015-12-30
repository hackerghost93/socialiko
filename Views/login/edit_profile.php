<div class="form-group has-feedback">
  <form action = "<?=URL?>/login/update" method = "post">
            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

<!--           <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password"
            name="password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div> -->

          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Phone number" name="phone" id="phone">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="text" name="hometown" class="form-control" placeholder="Hometown" id="hometown">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <label class = "Gender">Select Gender : </label>
      <label class = "male">Male </label><input type="radio" name="gender" value="male" checked="checked"/>
        <label>Female</label><input type="radio" name="gender" value="female" /><br><br>

      <label class = "Marital">Status : </label>
      <label class = "Single">Single</label>
      	<input type="radio" name="status" value="single" checked="checked"/>
      <label>Engaged</label>
      	<input type="radio" name="status" value="engaged" />
      <label> Married</label>
      	<input type="radio" name="status" value="married" /><br><br>

        <label class = "Birthday">Birthday : </label>
        <input type="date" max="2016-12-31" min="1900-01-01" name="birthday" id = "birthday"/>
        <br/>

        <label>Profile Picture</label>
        <input type="file" name="profile_picture"><br>


      <label class = "aboutme">About yourself :</label><br><br>
      <textarea name="aboutme"class="aboutmearea" rows="3" cols="45"></textarea><br><br>
      <button type="submit" class="btn btn-default">Confirm Edit</button>
      </form>
</div>