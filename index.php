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
    <!--jQuery CDN 3.2.1-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!--Author Stylesheet-->
    <script src="js/nqvb.js"></script>
    <script src="js/enquire.js"></script>
</head>
<body>
    <!-- Jeito 1
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <img class="img-fluid" src=https://via.placeholder.com/1200x720>
            </div>
            <div class="col-lg-3 bg-light rounded "> 
                <form class="container pt-5" name="formContato" method="POST" onsubmit="return(validate());">
                    <div class="form-group row">
                        <label class="col col-form-label text-center" for="nome">Nome Completo</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Seu nome" name="nome" id="nome" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu nome!" data-trigger="manual">
                    </div>
                    <div class="form-group row">
                        <label class="col col-form-label text-center" for="mail">E-mail</label>
                        <input type="email" class="form-control form-control-lg" placeholder="nome@exemplo.com" name="mail" id="mail" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu e-mail!" data-trigger="manual">
                    </div>
                    <div class="form-group row">
                        <label class="col col-form-label" for="tel">Telefone</label>
                        <input type="tel" class="form-control form-control-lg" placeholder="Contato" name="tel">
                    </div>
                    <div class="form-group row">
                        <label class="col col-form-label" for="mensagem">Fale conosco</label>
                        <textarea class="form-control" name="mensagem" id="mensagem" rows="4" placeholder="Sua mensagem aqui!" data-toggle="tooltip" data-placement="bottom" title="Mensagem obrigatória" data-trigger="manual"></textarea>
                    </div>
                    <small id="infoHelp" class="form-text text-muted text-right">Suas informações serão mantidas em sigilo e não serão distribuidas!</small>
                    <div class="form-group row">
                        <div class="col col-form-label text-center mt-4">
                            <button type="submit" class="btn btn-outline-awati btn-lg btn-block" disabled >Enviar</button>
                            <span class="sr-only">Enviar</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    -->
<!-- Desktop -->
<!--
<div id="caixa" class="container-fluid">
    <form class="float-right mt-5 p-4 bg-light rounded rodape" name="formContato" method="POST" onsubmit="return(validate());">
        <div class="form-group row">
            <label class="col col-form-label text-center" for="nome">Nome Completo</label>
            <input type="text" class="form-control form-control-lg" placeholder="Seu nome" name="nome" id="nome" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu nome!" data-trigger="manual">
        </div>
        <div class="form-group row">
            <label class="col col-form-label text-center" for="mail">E-mail</label>
            <input type="email" class="form-control form-control-lg" placeholder="nome@exemplo.com" name="mail" id="mail" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu e-mail!" data-trigger="manual">
        </div>
        <div class="form-group row">
            <label class="col col-form-label" for="tel">Telefone</label>
            <input type="tel" class="form-control form-control-lg" placeholder="Contato" name="tel">
        </div>
        <div class="form-group row">
            <label class="col col-form-label" for="mensagem">Fale conosco</label>
            <textarea class="form-control" name="mensagem" id="mensagem" rows="4" placeholder="Sua mensagem aqui!" data-toggle="tooltip" data-placement="bottom" title="Mensagem obrigatória" data-trigger="manual"></textarea>
        </div>
        <div><small id="infoHelp" class="form-text text-muted text-right">Suas informações serão mantidas em sigilo e não serão distribuidas!</small></div>
        <div class="form-group row">
            <div class="col col-form-label text-center mt-4">
                <button type="submit" class="btn btn-outline-awati btn-lg btn-block" disabled >Enviar</button>
                <span class="sr-only">Enviar</span>
            </div>
        </div>
    </form>
</div>-->
<!-- Moveis -->
<div id="caixa" class="container-fluid">
    <form id="formulario" class="m-3 p-4 bg-light rounded" name="formContato" method="POST" onsubmit="return(validate());">
        <div class="form-group row">
            <label class="col col-form-label text-center" for="nome">Nome Completo</label>
            <input type="text" class="form-control form-control" placeholder="Seu nome" name="nome" id="nome" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu nome!" data-trigger="manual">
        </div>
        <div class="form-group row">
            <label class="col col-form-label text-center" for="mail">E-mail</label>
            <input type="email" class="form-control form-control" placeholder="nome@exemplo.com" name="mail" id="mail" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu e-mail!" data-trigger="manual">
        </div>
        <div class="form-group row">
            <label class="col col-form-label" for="tel">Telefone</label>
            <input type="tel" class="form-control form-control" placeholder="Contato" name="tel">
        </div>
        <div class="form-group row">
            <label class="col col-form-label" for="mensagem">Fale conosco</label>
            <textarea class="form-control" name="mensagem" id="mensagem" rows="3" placeholder="Sua mensagem aqui!" data-toggle="tooltip" data-placement="bottom" title="Mensagem obrigatória" data-trigger="manual"></textarea>
        </div>
        <div><small id="infoHelp" class="form-text text-muted text-right">Suas informações serão mantidas em sigilo e não serão distribuidas!</small></div>
        <div class="form-group row">
            <div class="col col-form-label text-center mt-4">
                <button type="submit" class="btn btn-outline-awati btn-lg btn-block" disabled >Enviar</button>
                <span class="sr-only">Enviar</span>
            </div>
        </div>
    </form>
</div>
</body>
</html>