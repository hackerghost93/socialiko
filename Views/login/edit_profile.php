<div class = "edit">
<form class = "form-group" action="<?=URL.'/login/update'?>" method="post" onsubmit = "return validate_this_form()">
  <h3>Edit Profile</h3>
  <label>First Name</label>
  <input class = "form-control" type="text" value = "<?=$this->user[0]['first_name'] ?>" 
  name="firstname" placeholder="First name"></br>
  <label>Last Name</label>
  <input class = "form-control" type="text" value = "<?=$this->user[0]['last_name'] ?>"
  name="lastname" placeholder="Last name"></br>
  <label>Phone Number</label>
  <input class = "form-control" type="text" name="phone" value = "<?=$this->user[0]['phone'] ?>"
   placeholder="Phone"></br>
  <label>Birthday</label>
  <input class = "form-control" type="date" name="birthdate" value = "<?=$this->user[0]['birthdate'] ?>"
   placeholder="Birthday"></br>
  <label>About me</label>
  <input class = "form-control" type="text" name="aboutme" value = "<?=$this->user[0]['about_me'] ?>"
   placeholder="aboutme"></br>
  <label>New Password</label>
  <input class = "form-control" type="password" name="password" placeholder = "Password"></br>
  <label>Confirm New Password</label>
  <input class = "form-control" type="password" name="password2" placeholder = "Confirm password"></br>
  <label>E-mail</label>
  <input class = "form-control" type="text" name="email" value = "<?=$this->user[0]['email'] ?>"
   placeholder = "email"></br>
   <label>Hometown</label>
  <input class = "form-control" type="text" name="hometown" value = "<?=$this->user[0]['hometown'] ?>"
   placeholder="hometown"></br>
    <label>Status : </label>
      <label>Single</label>
        <input type="radio" name="status" value="single"
          <?php if($this->user[0]['martial_status'] == 'single'):?>
            checked = "ischecked"
          <?php endif;?>
         />
      <label>Engaged</label>
        <input type="radio" name="status" value="engaged" 
        <?php if($this->user[0]['martial_status'] == 'engaged'):?>
            checked = "ischecked"
          <?php endif;?>
        />
      <label> Married</label>
        <input type="radio" name="status" value="married"
          <?php if($this->user[0]['martial_status'] == 'married'):?>
            checked = "ischecked"
          <?php endif;?>
         /><br>
  <input class = "btn btn-default" type="submit" value="Confirm">
</form>
</div>
