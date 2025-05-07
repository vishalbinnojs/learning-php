<?php
echo "<h1 style='color:green;'> php with HTML</h1>";
echo "<h2 style='background-color:pink;'>php with HTML</h2>";
?> 

<?php 
$name = "vishal bhardwaj";
echo "<h1 style='color:red;'>$name</h1>";  // latest version

echo "<h1 style='color:red;'>" .$name. "</h1>"  // old version
?>

<h1>My name  is <?php echo $name; ?></h1>
<h2><?php echo "This is written by adding php tag inside h2 tag"?></h2>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<?php
// dynamic styling using php
$color = "blue";

?>
<h3 style="color:<?php echo $color;?>"><?php echo "This is h3 tag.";?></h3>
<h3 style="color:<?php echo $color;?>"><?php echo $name;?></h3>
<h3 style="color:<?php echo $color;?>">My name is <?php echo $name;?>.</h3>
