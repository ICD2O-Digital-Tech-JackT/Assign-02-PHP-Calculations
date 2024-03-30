<?php
  $radius = $_POST['radius'];
  $height = $_POST['height'];
  $volume = M_PI* pow($radius,2)*($height/3);
  $surface = M_PI*$radius*($radius+sqrt(pow($radius,2)+pow($height,2)))
?>
<h3>Result:</h3>

The volume of the cone is <?php echo $volume ?>cm<sup>3</sup>
<br>
<br>
The surface area of the cone is <?php echo $surface ?>cm<sup>2</sup>