<html>
    <body>

        <?php
            // ini_set('display_errors', 1);

            /**
             *  para fazer o upload de multiplos arquivos criamos um laço de repetição
             *  que se repete de acordo com a quantidade de arquivo selecionados.
             * 
             *  para cada repetição ele pega cada arquivo da varivel global, da posição
             *  do contador, e usa o metodo move_uploaded_file() para fazer o upload
             */
            
            if(isset($_POST['enviar-formulario'])):

                $quantiadeArquivos = count($_FILES['arquivo']['name']);
                $contador = 0;
                $mensagens = array();

                while($contador < $quantiadeArquivos):

                    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
                    $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

                    if(in_array($extensao, $formatosPermitidos)):
                
                        $pasta = "arquivos/";
                        $tmp = $_FILES['arquivo']['tmp_name'][$contador];
                        $novoNome = uniqid().".$extensao";
                        
                        if(move_uploaded_file($tmp, $pasta.$novoNome)):
                            $mensagens[] = "<p style='color: blue;'> Upload feito com sucesso do arquivo ".$_FILES['arquivo']['name'][$contador]."</p>";
                        else:
                            $mensagens[] = "<p style='color: purple;'> Erro, não foi possivel fazer o upload do arquivo ".$_FILES['arquivo']['name'][$contador]."</p>";
                        endif;
                    else:
                        $mensagens[] = "<p style='color: red;'> Formato do arquivo " .$_FILES['arquivo']['name'][$contador]." não é permitido  </p>";
                    endif;

                    $contador++;

                endwhile;

            endif;
        ?>
        <fieldset>

            <!-- no formulario é adicionado como atributo os metodos name="arquivo[]" e multiple
            na tag input do tipo file -->

            <!-- o atributo name="arquivo[]" indica que o campo irá receber um array de arquivo
            já o atributo multiple indica que o campo pode receber multiplos arquivos -->

            <h3>Upload de Arquivos Multiplos</h3>
            <form action="<?php echo $_SERVER['SELF_PHP'];?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="arquivo[]" multiple><br>
                <button type="submit" name="enviar-formulario">Enviar</button>
            </form>

            <?php 

                /**
                 *  aqui foi criado um laço de repetição que verifica se o vetor com as mensagens
                 *  não esta vazio; se ele não estiver vazio, imprimi a mensagem na tela 
                 */
                
                foreach($mensagens as $mensagem){
                    echo !empty($mensagem) ? "<p>".$mensagem."</p>" : "";
                }
            ?>
        </fieldset>
    </body>
</html>