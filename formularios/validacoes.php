<html>
    <body>

        <?php
        /**
         *  validate filters: Funções e constantes usadas para validade os tipos de dados 
         *  passados pelo usuario no formulario
         * 
         *  funções (filter_input - filter_var)
         *  FILTER_VALIDATE_INT
         *  FILTER_VALIDATE_EMAIL
         *  FILTER_VALIDATE_FLOAT
         *  FILTER_VALIDATE_IP
         *  FILTER_VALIDATE_URL
         */
        ?>

        <?php

            if(isset($_POST['enviar-formulario'])):
                /**
                 *  array de erros
                 */
                $erros = array();

                /**
                 *  validações de dados passado pelo usuario
                 */
                if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
                    $erros[] = "Idade precisa ser um inteiro";
                }
                if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
                    $erros[] = "Email invalido";
                }
                if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
                    $erros[] = "Peso precisa ser float";
                }
                if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
                    $erros[] = "IP invalido";
                }
                if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
                    $erros[] = "URL invalida";
                }

                /**
                 *  exibindo mensagens de erro
                 */
                if(!empty($erros)){
                    foreach($erros as $erro){
                        echo "<li> $erro </li>";
                    }
                }else{
                    echo "Sucesso!";
                }
            endif

        ?>


        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Idade: <input type="text" name="idade"><br>
            Email: <input type="email" name="email"><br>
            Peso: <input type="text" name="peso"><br>
            IP: <input type="text" name="ip"><br>
            URL: <input type="text" name="url"><br>
            <button type="submit" name="enviar-formulario">Enviar</button>
        </form>

    </body>
</html>