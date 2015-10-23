<?php

/*
 * Twisted Trinity
 * twistedtrinity.org
 * index.php
 * found in /
 *
 * Copyright Scott Cilley scott@twedev.com
 * Twisted Development
 * www.twedev.com
*/

// include the header
include 'includes/header.php';

/* Content only below the ?>
 * use the <div></div>
 * content div is closed in the footer
 * for universal usage
*/
?>

<div class="post">
  <h2>Why we are here</h2>
  <p>Twisted Trinity is a Game Development platform for the simple purpose of learning C++ and its game development application.
  We are not here to just play, we spend days and nights working the code, sql statements and all that goes with this kind of
  development with players and testers finding what bugs we have yet to find and reporting them. It's not just about the game,
  it's more about the development. We are here to learn, teach and mentor through a diverse gaming environment.</p>
</div>

<div class="post">
  <h2>Realms Are UP</h2>
  <p>Our weekly update is complete</p>
</div>

<div class="post">
    <h2>Realms</h2>
    <p>Our only current realm is Trinity which supports Current Version ( <?php echo $tc_version; ?> ), plans to initiate a 3.3.5a WotLK realm are in the works for those of you who
    love Classic Game Content.</p>
</div>

<?php
// include the footer
include 'includes/footer.php';
?>