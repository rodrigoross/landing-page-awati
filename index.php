<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta charset="utf-8">
    <meta name="keywords" content="awati">
    <meta name="keywords" content="sucupira">
    <meta name="keywords" content="computador por assinatura">
    <meta name="keywords" content="computação em nuvem, consultoria, outsourcing, implantações, TI">
    <meta name="description" content="Awati tecnologia planejada, &eacute; uma empresa de TI que opera em Cuiab&aacute;/V&aacute;rzea Grande, prestando servi&ccedil;os de consultoria, outsourcing e implanta&ccedil;&otilde;es para empresas nas mais diversos ramos de trabalho.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Computador por assinatura">
    <title>Computador por assinatura</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="images/icons/favicon.png" />
    <!-- Booststrap 4.0 -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <!--Author Stylesheet-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <section class="col-8">
                <img class="row"src=https://via.placeholder.com/1024x768>
            </section>
            <div class="col-3 ml-5 bg-light rounded "> 
                <form class="formulario pt-5" name="formContato" method="POST" onsubmit="return(validate());">
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
                    <div class="form-group row">
                        <div class="col col-form-label text-center mt-4">
                            <button type="submit" class="btn btn-outline-awati btn-lg btn-block" disabled >Enviar</button>
                            <span class="sr-only">Enviar</span>
                        </div>
                    </div>
                    <small id="infoHelp" class="form-text text-muted text-left">Suas informações serão mantidas em sigilo e não serão distribuidas!</small>
                </form>
            </div>
        </div>
    </div>
</body>
</html>