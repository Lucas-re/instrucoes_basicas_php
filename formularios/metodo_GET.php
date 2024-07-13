<html>
    <body>

        <!-- no metodo GET as informações são enviadas pela URL da requisição HTTP, 
        ou seja, de forma visivel para o script dados.php -->

        <form action="dados.php" method="GET">
            Nome: <input type="text" name="nome"><br>
            Email: <input type="email" name="email"><br>
            <button type="submit">Enviar</button>
        </form>

        <a href="dados.php?idade=23&sobrenome=Lucas">Enviar dados</a>
    </body>
</html>