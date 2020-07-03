<?php include_once ("header.php");?>
 
<?php include_once ("footer.php");?>
 
<!DOCTYPE html>
<html>
 <head>
 <title>mini-site-vitrine</title>
 </head> 
 
 <a href="http://localhost:8888/ISCC-2020/Jour-05/EX_02/vitrine-accueil.php">Page 1</a>
<a href="http://localhost:8888/ISCC-2020/Jour-05/EX_02/vitrine-programme.php"> Page 2</a>
<a href="http://localhost:8888/ISCC-2020/Jour-05/EX_02/vitrine-contacts.php"> Page 3</a>
 
<?php
if ($_GET["page"]=="1")
 {
 echo "<h1> Acceuil! </h1>";
}
elseif ($_GET["page"]=="2")
{
 echo "<h1> Programme! </h1>";
}
elseif ($_GET["page"]=="3")
{
 echo "<h1> Contacts! </h1>";
}
?>