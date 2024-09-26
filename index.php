<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
    <script src="app.js"></script>
</head>
<body>


<h1>Piesakies webināram!</h1>



<label>
    Vārds:
    <input type="text" name="name" dirname="name-dir" value="" />
  </label>
  <input type="submit" />
  <br>
  

  <label>
    e-pasts:
    <input type="text" name="e-pasts" dirname="e-pasts-dir" value="" />
  </label>
  <input type="submit" />
  <br>


    Kursa līmenis:
    <select name="līmenis">
  <option value="beginner">Beginner</option>
  <option value="intermediate" selected>Intermediate</option>
  <option value="advanced">Adsvanced</option>

  <br>
  
  <h2>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem</h2>

<form>
  <fieldset>
  <div>
    <input type="radio" id="yes" value="yes"/>
        <label for="yes">Yes</label>

    <input type="radio" id="no" value="no"/>
        <label for="no">No</label>
        <br>

    </div>
    </fieldset>
</form>


    <h4>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem</h4>

<form>
  <fieldset>
  <div>
    <input type="radio" id="yes" value="yes"/>
        <label for="yes">Yes</label>

    <input type="radio" id="no" value="no"/>
        <label for="no">No</label>
        <br>

    </div>
    </fieldset>
</form>

<a href="blog.php">Biografija</a>

<?php

$user1 = array (
    $Vārds  => array("Jānis Bērziņš"),
    $epasts => array("janis@berzins.com"),
    $limenis   => array("Intermediate"),
);


?>
</body>
</html>
