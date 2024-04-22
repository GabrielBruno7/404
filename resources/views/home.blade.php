

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div class="screen">
            <div class="container-content">
                <form method="post">
                    <input class="input" type="text" value="{{$code}}">
                    <input class="input" id="response" type="text">
                    <input class="input" id="description" type="text" value="{{$description}}">
                    <div onclick="checkResponse()">Enviar</div>
                </form>
            </div>
        </div>
    </body>
</html>


<script>
    function checkResponse() {
        var response = document.getElementById('response').value;
        var description = document.getElementById('description').value;
        console.log("Response:", response);
        console.log("Description:", description);

        if (response === description) {
            alert('Acertou!');
            window.location.reload();
        }
        if (!response) {
            alert('Campo de resposta está vazio!');
            window.location.reload();
        }
        if (response !== description) {
            alert('Que pena, você errou !');
            window.location.reload();
        }
    }
</script>













<style>
    .screen {
       height: 100vh;
       display: flex;
       justify-content: center;
       align-items: center;
       background-color: #3C5B6F;

    }
    .container-content {
        background-color:#DFD0B8 ;
        display: flex;
        align-items: center;
        width: 600px;
        height: 200px;
        justify-content: center;
        border-radius: 10px;
        gap: 50px;
    }

    .input {
        outline: none;
    }
</style>
