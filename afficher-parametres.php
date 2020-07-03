<html>
<a href="http://localhost:8888/ISCC-2020/Jour-08/EX_01/afficher-parametres.php"> <?php $_GET?> </a>
</html>

<?php
    foreach ($_GET as $key=> $value){
    echo "<ul>";
    echo "<li>"; 
    echo "cle:" . $key . "valeur:" . $value;
    echo "</li>";
    echo "</ul>";
}    
?> 