<?php
// get the values from the submitted form.
$attempted_username = $_POST['username'];
$attempted_password = $_POST['pass'];

// define possible login pairs. this would usually come from a database.
$legalLogins = [ ['admin', 'somepass'], ['vicky', 'pa$$word'], ['me', 'you'] ];

// assume the login fails first
$loggedIn = FALSE;

// check attempt to all legal pairs of values
foreach ($legalLogins as $x)
{
  if ($x[0] == $attempted_username && $x[1] == $attempted_password)
  {
    $loggedIn = TRUE;
  }
}

// if a match was found, proceed. else, reject the login.
if ($loggedIn == TRUE)
{
  echo "Welcome, $attempted_username!";
  echo "click <a href='securepage.php'>Here</a> to enter the secure page.";
}
else
{
  echo "Login failed.";
}
?>
