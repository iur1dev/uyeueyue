<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

unset($_SESSION['atualizado']);
unset($_SESSION['venda']);
unset($_SESSION['excluido']);
unset($_SESSION['valor_cesta']);

$nome_pag = "Cadastrar";
$nome = "";
$cpf = "";
$rg = "";
$data_nascimento = "";
$celular = "";
$cep = "";
$cidade = "";
$bairro = "";
$rua = "";
$numero = "";
$empresa = "";
$cep_empresa = "";
$cidade_empresa = "";
$bairro_empresa = "";
$rua_empresa = "";
$numero_empresa = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data_nascimento = $_POST['data_nascimento'];
    $celular = $_POST['celular'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $empresa = $_POST['empresa'];
    $cep_empresa = $_POST['cep_empresa'];
    $cidade_empresa = $_POST['cidade_empresa'];
    $bairro_empresa = $_POST['bairro_empresa'];
    $rua_empresa = $_POST['rua_empresa'];
    $numero_empresa = $_POST['numero_empresa'];

    if (empty($nome)) {
        echo '<div class="alert alert-danger text-center" role="alert">Preencha o Nome !</div>';
    } elseif (empty($celular)) {
        echo '<div class="alert alert-danger text-center" role="alert">Preencha o Celular !</div>';
    } else {
        $sql = "insert into clientes (nome, cpf, rg, data_nascimento, celular, cep, cidade, bairro, rua, numero,
         empresa, cep_empresa, cidade_empresa, bairro_empresa, rua_empresa, numero_empresa)
    values ('$nome', '$cpf', '$rg', '$data_nascimento', '$celular', '$cep', '$cidade', '$bairro', '$rua', '$numero',
     '$empresa', '$cep_empresa', '$cidade_empresa', '$bairro_empresa', '$rua_empresa', '$numero_empresa')";
        $query = $conn->query($sql) or die('erro sql ' . $conn->error);

        header('Location: clientes.php');
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
    <div class="container">
        <div class="row bg-danger rounded-2">
            <a href="home.php" class="col-3">
                <i class="fa-regular fa-circle-left mt-3" style="font-size: 3.5rem;color: snow;">
                </i>
            </a>
            <h1 class="fw-bold text-center my-3 col-6"><?php echo $nome_pag ?></h1>
            <div class="col-3"></div>
        </div>
        <h1 class="fw-bold text-center my-3">Dados Pessoais</h1>
        <form method="POST">
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" placeholder="Nome" name="nome" value="<?php echo $nome ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control cpf" placeholder="CPF" name="cpf" value="<?php echo $cpf ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" placeholder="RG" name="rg" value="<?php echo $rg ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control date" placeholder="Data de Nascimento" name="data_nascimento" value="<?php echo $data_nascimento ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" placeholder="Celular" name="celular" value="<?php echo $celular ?>">
            </div>
            <h1 class="fw-bold text-center my-3">Endereço Residencia</h1>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control cep" id="cep" placeholder="Cep" name="cep" value="<?php echo $cep ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade" value="<?php echo $cidade ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" value="<?php echo $bairro ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" id="rua" placeholder="Rua" name="rua" value="<?php echo $rua ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" placeholder="Número" name="numero" value="<?php echo $numero ?>">
            </div>
            <h1 class="fw-bold text-center my-3">Endereço do Trabalho</h1>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" placeholder="Empresa" name="empresa" value="<?php echo $empresa ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control cep" id="cep_" placeholder="Cep" name="cep_empresa" value="<?php echo $cep_empresa ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" id="cidade_" placeholder="Cidade" name="cidade_empresa" value="<?php echo $cidade_empresa ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" id="bairro_" placeholder="Bairro" name="bairro_empresa" value="<?php echo $bairro_empresa ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" id="rua_" placeholder="Rua" name="rua_empresa" value="<?php echo $rua_empresa ?>">
            </div>
            <div class="mb-3 col-md-4 mx-auto">
                <input type="text" class="form-control" placeholder="Número" name="numero_empresa" value="<?php echo $numero_empresa ?>">
            </div>
            <div class="col-md-4 mx-auto mt-5">
                <button type="submit" class="btn btn-primary col-12 mb-5 mt-">Cadastrar</button>
            </div>
        </form>
    </div>
    <?php
    include_once('includes/scripts.php');
    ?>
</body>
<script>
    $(document).ready(function() {

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#cidade").val("");
            $("#bairro").val("");
            $("#rua").val("");
        }

        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#cidade").val("...");
                    $("#bairro").val("...");
                    $("#rua").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#cidade").val(dados.localidade);
                            $("#bairro").val(dados.bairro);
                            $("#rua").val(dados.logradouro);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });

        // 

        function limpa_formulário_cep2() {
            // Limpa valores do formulário de cep.
            $("#cidade_").val("");
            $("#bairro_").val("");
            $("#rua_").val("");
        }

        //Quando o campo cep perde o foco.
        $("#cep_").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#cidade_").val("...");
                    $("#bairro_").val("...");
                    $("#rua_").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#cidade_").val(dados.localidade);
                            $("#bairro_").val(dados.bairro);
                            $("#rua_").val(dados.logradouro);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep2();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep2();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep2();
            }
        });
    });
</script>

</html>