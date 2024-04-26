<?php
  include 'utils.php';
  error_log(print_r("DVPW{Ch3c2k_10gs_F9sak}", TRUE)); 
  error_log(print_r("It'll be very stupid if someone put a flag in /flag.txt, right?", TRUE)); 
?>

<!DOCTYPE html>

<html>
  <head>
    <title>DVPW</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php include 'templates/navbar.php';?>
    <!-- DVPW{N1C3_1N5P3C7OR} -->
    <!-- If you say "I <3 your chall" in the feedback form you're 0.12% more likely to get in -->
    <h3 class="d-flex justify-content-center">Welcome to the...</h3>
    <h2 class="d-flex justify-content-center">Damn Vulnerable Php Webapp!</h2>
    <div class="d-flex flex-column">
      <h4 class="d-flex justify-content-center">Flags are in the format DVPW{FLAG}</h4>
    <h4 class="d-flex justify-content-center">There are in total 7 flags (+1 bonus flag :3). You can do anything to get the flags. Good luck!</h4>
    </div>
    <p class="d-flex justify-content-center">
      Hint 1: Where are the robots? 🤔
      Hint 2: No one registered at my site 😔 There's only 1 user.
      Hint 3: INSERT INTO flag (flag) VALUES ('DVPW{sample_flag}');
      Other hints can be found as you progress!!
      Bonus hint: The most obvious place is the most secure (bonus flag)

      For /etc/passwd, the entire file is the flag.
    </p>
  </body>
</html>