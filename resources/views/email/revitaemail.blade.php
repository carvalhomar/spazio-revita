<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Envio Dinâmico de E-mail</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p><strong>Nome:</strong>{{ $details['name'] }}</p>
    <p><strong>Assunto:</strong>{{ $details['subject'] }}</p>
    <p><strong>E-mail:</strong>{{ $details['email'] }}</p>
    <p><strong>Mensagem:</strong>{{ $details['message'] }}</p>
</body>
</html>
