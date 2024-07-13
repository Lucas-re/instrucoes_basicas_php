<html lang="pt-br">
<body>

    <!-- no metodo POST as informações são enviadas pelo corpo da requisição HTTP, 
        ou seja, de forma invisivel para o script dados.php -->

    <form action="dados.php" method="POST">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>