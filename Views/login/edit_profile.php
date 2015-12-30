<form action="<?=URL.'/login/update'?>" method="post">
  <input type="text" name="firstname" placeholder="First name"></br>
  <input type="text" name="lastname" placeholder="Last name"></br>
  <input type="text" name="phone" placeholder="Phone"></br>
  <input type="date" name="birthdate" placeholder="Birthday"></br>
  <input type="text" name="aboutme" placeholder="aboutme"></br>
  <input type="password" name="password" placeholder = "password"></br>
  <input type="text" name="email" placeholder = "email"></br>
  <input type="text" name="hometown" placeholder="hometown"></br>
      <label>Engaged</label>
        <input type="radio" name="status" value="engaged" />
      <label> Married</label>
        <input type="radio" name="status" value="married" /><br>
  <input type="submit" value="Confirm">
</form>