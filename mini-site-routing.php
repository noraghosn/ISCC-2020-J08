<!doctype html>
<html>
    <meta charset= "utf-8">
<header>
    <nav> 
        <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/mini-site-routing.php?page=1"> Accueil </a>
        <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/mini-site-routing.php?page=2"> Page 1 </a>
        <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/mini-site-routing.php?page=3"> Page 2 </a>
    <title> mini-site-routing </title>
</header>
<body>
    <?php
        if ($_GET['page'] ==1)
        {
            echo '<h1> Accueil ! </h1>';
        }
        elseif ($_GET['page']==2)
        {
            echo '<h1> Page 2 ! </h1>';
        }
        elseif ($_GET['page']==3)
        {
            echo '<h1> Page 3 ! <h1>';
        }
        ?>
</body>
<footer>
</footer>
</html>