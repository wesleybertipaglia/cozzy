<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cozzy | Usuários</title>
    <?php 
        // set paths
        $home = "http://localhost/cozzy/";
        $path = realpath("../../../");

        require_once $path."/blocks/site/sct_head.php"; 
        require_once $path."/functions/database/fun_connection.php";
    ?>
</head>
<body>
    <?php require_once $path."/blocks/site/sct_nav.php"; ?>
    <main>
        <?php require_once $path."/blocks/user/sct_users.php"; ?>
    </main>
    <?php require_once $path."/blocks/site/sct_footer.php"; ?>
</body>
</html>