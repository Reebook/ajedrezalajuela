<?php
    if(isset($_SESSION['username'])) {
?>
        Bienvenido: <a href="perfil.php?id=<?=$_SESSION['id']?>"><strong><?=$_SESSION['username']?></strong></a><br />
        <a href="logout.php">Cerrar Sesión</a>
<?php
    }
?> 