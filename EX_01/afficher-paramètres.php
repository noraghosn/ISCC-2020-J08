
<?php 

    foreach ($_GET as $key => $value) 
    {
        echo "<ul <li> $key : $value </li> </ul>";
        echo "<br>";
    }
?>