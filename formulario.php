	    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Formulário anexo de arquivo</title>
        
            <!-- Layout -->
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
            
            <!-- JavaScript -->
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        </head>
        
        <body>
            <div class="container">
            <br>
            
            <form class="form-horizontal" name="email_form" method="POST" action="form_action.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>Formulário para envio do arquivo PDF</legend>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome">Nome</label>  
                        <div class="col-md-4">
                            <input id="nome" name="nome" placeholder="Informe seu nome" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome">Email</label>  
                        <div class="col-md-4">
                            <input id="replyto" name="replyto" placeholder="Informe seu email" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="arquivo">Anexo</label>
                        <div class="col-md-4">
                        <input id="arquivo" name="arquivo" class="input-file" type="file">
                            <!-- <span class="help-block">2MB por mensagem</span> -->
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-inverse">Enviar</button>
                        </div>
                    </div>
                    
                </fieldset>
            </form>
            
            </div>
        </body>
    </html>
