<?php
//Modal de confirmação
//$("#confirmacao").on('show.bs.modal', function(event)
//{
//    var btn = $(event)
//})
/*
if(isset($_POST['submit']))
{
    $to = "rodrigo@awati.com.br"; // this is your Email address
    $from = $_POST['mail']; // this is the sender's Email address
    $first_name = $_POST['nome'];
    $subject = "COMPUTADOR POR ASSINATURA - CONTATO TESTE";
    $message = $_POST['mensagem'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    
    //echo "Enviado com sucesso " . $first_name . ", entraremos em contato o mais breve possivel.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta charset="utf-8">
    <meta name="keywords" content="awati">
    <meta name="keywords" content="sucupira">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="computação em nuvem, consultoria, outsourcing, implantações, TI">
    <meta name="description" content="Awati tecnologia planejada, &eacute; uma empresa de TI que opera em Cuiab&aacute;/V&aacute;rzea Grande, prestando servi&ccedil;os de consultoria, outsourcing e implanta&ccedil;&otilde;es para empresas nas mais diversos ramos de trabalho.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Computador por assinatura">
    <title>Computador por assinatura</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="images/icons/favicon.png" />
    <!-- Booststrap 4.1.3 -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Booststrap Grid 4.1.3 
    <link href="css/bootstrap-grid.css" rel="stylesheet" type="text/css">-->
    <!--Author Stylesheet-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--jQuery CDN 3.2.1
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <!-- Enquire.js 2.1.6 -->
    <script src="js/enquire.js"></script>
    <!--Author Javascript-->
    <script src="js/nqvb.js"></script>
</head>
<body>
    <div id="caixa" class="container-fluid">
        <div id="cel-img" class="image">
            <img id="promo" class="img-fluid" src="https://via.placeholder.com/340x1200" alt="Imagem Promocional">
        </div>
        <form id="formulario" class="m-3 p-4 bg-light rounded" name="formContato" method="POST" onsubmit="return (validate());">
            <div class="form-group row">
                <label class="col col-form-label text-center" for="name">Nome Completo</label>
                <input type="text" id="nome" class="form-control form-control" placeholder="Seu nome" name="nome" id="nome" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu nome!" data-trigger="manual" required minlength="3">
            </div>
            <div class="form-group row">
                <label class="col col-form-label text-center" for="mail">E-mail</label>
                <input type="email" id="mail" class="form-control form-control" placeholder="nome@exemplo.com" name="mail" id="mail" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu e-mail!" data-trigger="manual" required>
            </div>
            <div class="form-group row">
                <label class="col col-form-label" for="tel">Telefone</label>
                <input type="tel" id="tel" class="form-control form-control" placeholder="Contato" name="tel" required minlenght="8" maxlength="12">
            </div>
            <div class="form-group row">
                <label class="col col-form-label" for="mensagem">Fale conosco</label>
                <textarea class="form-control" id="msg" name="mensagem" id="mensagem" rows="3" placeholder="Sua mensagem aqui!" data-toggle="tooltip" data-placement="bottom" title="Mensagem obrigatória" data-trigger="manual" required></textarea>
            </div>
            <div><small id="infoHelp" class="form-text text-muted text-right">Suas informações serão mantidas em sigilo e não serão distribuidas!</small></div>
            <div class="form-group row">
                <div class="col col-form-label text-center mt-4">
                    <button type="submit" class="btn btn-outline-awati btn-lg btn-block" data-toggle="modal" data-target="#confirmacao" >Enviar</button>
                    <span class="sr-only">Enviar</span>
                </div>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmacao"  role="dialog">
        <div class="modal-dialog">
            <!-- Modal Conteudo-->
            <div class="modal-content" tabindex='-1' >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Aguarde nosso contato</h4>
                </div>
                <div class="modal-body">
                    <p>Informações para contato recebidas com sucesso. Aguarde que nossa equipe entrará em contato o mais breve o possivel</p>
                </div>
                <div class="modal-fotter">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
    <!-- Modal -->
</body>
</html>