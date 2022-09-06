<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles --> 
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                text-align: center
            }
        </style>
    </head>
    <body>
       
        <h1>Desafio de Api para a Empresa SOFTWAR</h1>

        <p>Baixe o repositório e instale as dependências do projeto utilizando o comando:</p>
        <p>composer install</p>
        <p>Configure a localização do banco de dados no arquivo .ENV </p>
        <p>Após inicialize o servidor usando:</p>
        <p>php artisan serve</p>
        <p>Utilize um API Client para testar a API como por POSTMAN.</p>
        <p>Acessar via API client usando o metodo GET o endereço: </p>
        <p>http://127.0.0.1:8000/api/ranking</p>

   
    </body>
</html>
