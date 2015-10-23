<?php

// include the header
include 'includes/header.php';

?>

<div class="post">
<p>Get Signed Up Today!</p>
  <form id="register" method="post" action="register.php">
        <center>
        <label>E-Mail: </label><BR />
        <input type="text" name="email" class="rounded"><BR /><BR />
        <label>Password: </label><BR />
        <input type="password" name="password" class="rounded"<BR /><BR /><BR />
        <!--
        <label>Expansion: </label><BR />
        <select name="expansion" class="rounded">
          <option selected>Wrath of the Lich King</option>
          <option selected>Warlords of Draenor</option>
        </select>
        -->
        <BR /><BR />
        <input type="submit" value="Register" class="rounded">
        </center>
   </form>
 </div>

<?php

// include the footer
include 'includes/footer.php';

?>