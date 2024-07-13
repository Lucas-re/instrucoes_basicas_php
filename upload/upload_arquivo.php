<html>
    <body>

        <?php
            // ini_set('display_errors', 1);

            /**
             *  para fazer upload de arquivos, utilizamos o metodo POST para receber as informações 
             *  do formulário e a variavel global $_FILES para pegar as informações do arquivo
             * 
             *  utilizamos a função move_uploaded_file() para movermos o arquivo de upload da pasta 
             *  para a pasta definitiva arquivos/
             */

            if(isset($_POST['enviar-formulario'])):
                $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
                $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

                if(in_array($extensao, $formatosPermitidos)):
            
                    $pasta = "arquivos/";
                    $tmp = $_FILES['arquivo']['tmp_name'];
                    $novoNome = uniqid().".$extensao";
                    
                    if(move_uploaded_file($tmp, $pasta.$novoNome)):
                        $mensagem = "Upload feito com sucesso";
                    else:
                        $mensagem = "Erro, não foi possivel fazer o upload";
                    endif;
                else:
                    $mensagem = "Formato não permitido";
                endif;

            endif;
        ?>
        <fieldset>
            
            <!-- no formulário, utilizamos o atributo  enctype="multipart/form-data" na tag form
            para definir que será feito o upload de arquivos é o metodo POST para encviar as informações -->

            <!-- na tag input utilizamos o atributo file para indicar que este campo receberar um arquivo -->

            <h3>Upload de Arquivos</h3>
            <form action="<?php echo $_SERVER['SELF_PHP'];?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="arquivo"><br>
                <button type="submit" name="enviar-formulario">Enviar</button>
            </form>
            <?php echo $mensagem;?>
        </fieldset>
    </body>
</html>