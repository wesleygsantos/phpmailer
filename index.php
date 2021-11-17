<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendMail</title>
</head>
<body>

    <form action="sendmail.php" method="POST">

        <label for="nome">Nome Completo</label><br>
        <input type="text" name="nome" placeholder="Informe seu nome...">
        <br><br>

        <label for="pais">País</label><br>
        <select name="pais">
        <option value="">Selecione um país</option>
        <option value="brasil">Brasil</option>
        <option value="usa">Estados Unidos</option>
        </select>
        <br><br>

        <label for="mensagem">Mensagem</label><br>
        <textarea name="mensagem" cols="30" rows="10" placeholder="Insira sua mensagem aqui..."></textarea>
        <br><br>

        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>