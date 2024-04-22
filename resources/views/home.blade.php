
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>404</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        
    </head>

    <style>
        .background {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: "Quicksand", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        .main-container{
            display: flex;
            align-items: center;
            justify-content:space-around;
            flex-direction: column;
            width: 800px;
            height: 250px;
        }

        .top {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height:100%;
        }

        .mid {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            width: 100%;
            gap: 40px;
        }

        .bot {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            width: 100%;
            gap: 60px;
        }

        .container-value-buttton{
            background-color: purple;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: row;
            width: 256px;
        }

        .input_one {
            height: 60px;
            width: 256px;
            border: 3px solid #4793AF;
        }

        .input_two {
            height: 60px;
            border: 3px solid #e3e3e3;
        }

        .btn {
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            border: 3px solid #e3e3e3;
            cursor: pointer;
        }

        .input{
            background-color: black;
            color: white;
            outline: none;
            text-align: center;
        }

        .text{
            color: #4793AF;
            font-family: "Quicksand", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        .text-return{
            color: #e3e3e3;
            font-weight: 600;
            cursor: pointer;
        }

        .material-symbols-outlined{
            color: #e3e3e3;
        }

        .hide {
            display: none;
        }
    </style>

    <body class="background">
        <div class="main-container">

            <div class="top">
                <h2 class="text-return">Try descover what code its perfect about these descriptions</h2>
            </div>

            <div class="mid">

                <div class="">
                    <input readonly class="input_one input text" id="description" type="text" value="{{$description}}">
                    <input readonly class="hide" id="code" type="text" value="{{$code}}">
                </div>

                <div class="">
                    <div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </div>
                </div>

                <div class="container-value-buttton">
                    <input class="input_two input" id="response" type="text" maxlength="3" >
                    <div id="border-error" class="btn" onclick="checkResponse()">
                        <h4 class="text-return" id="text-send">send</h4>
                    </div>
                </div>
            </div>

            <div class="bot">
                <div>
                    <h4 class="text-return">Your score: 0/8</h4>
                </div>
                <div>
                    <h1 class="text-return">- - - - - -</h1>
                </div>
            </div>

        </div>
    
    
    
    </body>  
</html>

<script>
    function checkResponse() {
    var description = document.getElementById('description').value;
    var response = document.getElementById('response').value;
    var code = document.getElementById('code').value;
    var btn_border = document.getElementById('border-error');
    var responseInput = document.getElementById('response');
    var text_send = document.getElementById('text-send');
    

    if (response === code) {
        setTimeout(function() {
            responseInput.style.color = code;
            responseInput.style.borderColor = '#49d159';
            btn_border.style.borderColor = '#49d159';
            text_send.style.color = '#49d159';
        }, 800);

        setTimeout(function() { window.location.reload(); }, 1800);
    }

    if (!response) {
        alert('Campo de resposta está vazio!');
        window.location.reload();
        exit();
    }

    if (response !== code) {
        setTimeout(function() {
            responseInput.value = code;
            responseInput.style.borderColor = '#a82831';
            btn_border.style.borderColor = '#a82831';
            text_send.style.color = '#a82831';
        }, 800);

        setTimeout(function() { window.location.reload(); }, 1800);
    }


}
</script>


