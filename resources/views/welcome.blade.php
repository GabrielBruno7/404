<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>404</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>

    <body>
        <div class="container-link">
            <div class="left-container">
                <div class="text-container">
                    <h1 class="text-one text">404</h1>
                    <h1 class="text-two text" text>GO</h1>
                </div>
            </div>
            <div class="right-container">
                <div class="triangle-container">
                    <a href="https://404-production.up.railway.app/api/404"><span class="material-symbols-outlined text">change_history</span></a>
                </div>
            </div>
        </div>   
    </body>
</html>


<style>
    body{
        background-color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .container-link {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        width: 400px;
        height: 200px;
    }
    .left-container{
        display: flex;
        align-items: center;
        justify-content: end;
        width: 100%;
        height: 100%;
    }
    .right-container{
        display: flex;
        align-items: center;
        justify-content: start;
        width: 100%;
        height: 100%;
    }
    .text-container{
        display: flex;
        flex-direction: column;
        position: relative;
        bottom: 45px;
    }
    .text {
        font-size: 3rem;

    }
    .material-symbols-outlined{
        font-size: 5rem;
        transform: rotate(90deg);
        color: white;

    }
    .material-symbols-outlined:hover{
        color: #4793AF;
        transition: all .2s ease-in-out;
        cursor: pointer;
        transform: rotate(90deg);
    }
    .text-one, .text-two {
        width: 80px;
        height: 10px;
        color: white;

    }
    .text-one {
        display: flex;
        position: relative;
        top: 40px;
    }

</style>
