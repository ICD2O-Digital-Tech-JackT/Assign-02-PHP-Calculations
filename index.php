<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
     <title>Calculating the volume of a cone in php</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Css -->
    <link rel="stylesheet" href="/css/style.css"> 

    <!-- Mdl -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-indigo.min.css" />
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Text -->
    <?php
      echo "<h1>Calculating the Volume of a Cone in PHP</h1>";
      echo "<br>";
    ?>
    <img src="/images/Cone.png">
    <!-- Action -->
    <form action="./calculations.php" method="post" target="calculations">
      <!-- Labels -->
      <label for=lblBase">Radius (cm):</label>
      <input type="number" id="radius" placeholder="Enter the radius (cm)" name="radius"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="number" id="height" placeholder="Enter the height (cm)" name="height"><br><br>
      <!-- Calculate button -->
      <button value="Calculate Volume" type="submit" class="mdl-button mdl-js-button mdl-button--accent">
        Calculate Volume
      </button>
    </form>
    <?php
    echo "<br>"
    ?>
    <!-- Frame to display the results -->
    <iframe id="calculations" name="calculations">
    </iframe>
  </body>
</html>