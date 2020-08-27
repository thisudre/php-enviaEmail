    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Formulário PHP com anexo</title>
        
            <!-- Layout -->
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
            
            <!-- JavaScript -->
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        </head>
        
        <body>
            <div class="container">
            <br>
            
            <form class="form-horizontal" method="POST" action="envia.php" enctype="multipart/form-data">
                <fieldset>
                
                    <!-- Título do formulário -->
                    <legend>Formulário para envio do arquivo PDF</legend>
                    
                    <!-- Campo: Nome -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome">Nome</label>  
                        <div class="col-md-4">
                            <input id="nome" name="nome" placeholder="Informe seu nome" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                    
                    <!-- Campo: Email -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome">Email</label>  
                        <div class="col-md-4">
                            <input id="replyto" name="replyto" placeholder="Informe seu email" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                    
                    <!-- Campo: anexo --> 
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="arquivo">Anexo</label>
                        <div class="col-md-4">
                        <input id="arquivo" name="arquivo" class="input-file" type="file">
                            <span class="help-block">2MB por mensagem</span>
                        </div>
                    </div> 
                    
                    <!-- Botão Enviar -->
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