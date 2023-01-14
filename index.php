<?php include_once("includes/conn.php");

$erro = "";
$nome_pag = 'Cesta';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $conn->real_escape_string($_POST['login']);
    $senha = $conn->real_escape_string($_POST['senha']);

    if (empty($login)) {
        $erro = "<div class='alert alert-danger text-center fw-bold' role='alert'>Digite o Login !</div>";
    } else if (empty($senha)) {
        $erro =  "<div class='alert alert-danger text-center fw-bold' role='alert'>Digite a Senha !</div>";
    } else {
        $sql = "SELECT * FROM user where login = '$login' AND senha = '$senha'";
        $query = $conn->query($sql) or die("erro query" . $conn->error);

        $qnt = $query->num_rows;

        if ($qnt == 1) {
            $login = $query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION["login"] = $login;

            header("Location: home.php");
        } else {
            $erro =  "<div class='alert alert-danger text-center fw-bold' role='alert'>Login ou Senha Incorretos !</div>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nome_pag ?></title>
    <?php include_once("includes/head.php") ?>
</head>

<body>
    <div class="container_principal">
        <div class="bg-danger rounded-2 p-4">
            <form method="POST">
                <h1 class="fw-bold mb-5 text-center"><?php echo $nome_pag ?></h1>
                <div class="form-outline mb-4">
                    <input type="text" value="<?php if (isset($login)) {
                                                    echo $login;
                                                } ?>" placeholder="Login" name="login" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <input type="password" placeholder="Senha" name="senha" class="form-control" />
                </div>
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    </div>
                </div>
                <div><?php echo $erro; ?></div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark btn-block mb-4">Entrar</button>
                </div>
            </form>
        </div>
    </div>
    <?php include_once("includes/scripts.php") ?>
</body>

</html>