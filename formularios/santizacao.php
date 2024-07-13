<html>
    <body>

        <?php
        /**
         *  sanitaze filters: são os filtros utilizados para limpar   
         *  as variaveis 
         * 
         *  funções: filter_input // filtra dados vindo de inputs
         *           filter_var  // filtra dados de variaveis
         * 
         *  FILTER_SANITIZE_SPECIAL_CHARS // serve para escapar todos os códigos html
         *  FILTER_SANITIZE_NUMBER_INT // limpa os dados enviado aceitando somente numeros inteiros
         *  FILTER_SANITIZE_EMAIL // aceita somente formatos validos de email
         *  FILTER_SANITIZE_URL // serve para aceitar somente formatos validos de url
         */
        ?>

        <?php

        if(isset($_POST['enviar-formulario'])):
            /**
             *  array de erros
             */
            $erros = array();

            /**
             *  Sanitização de dados passado pelo usuario
             */
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            echo $nome."<br>";
            

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($idade, FILTER_VALIDATE_INT)):
                $erros[] = "Idade precia ser um inteiro";
            endif;
            

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                $erros[] = "Email invalido";
            endif;

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)):
                $erros[] = "Url invalida";
            endif;
            

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
            Nome: <input type="text" name="nome"><br>
            Idade: <input type="text" name="idade"><br>
            Email: <input type="email" name="email"><br>
            URL: <input type="text" name="url"><br>
            <button type="submit" name="enviar-formulario">Enviar</button>
        </form>

    </body>
</html>