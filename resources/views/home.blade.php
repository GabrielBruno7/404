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
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   </head>
   <style>
      .background {
      background-color: purple;
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
      background-color: red;
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
      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }
      .scoreboard {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 10px;
      }
   </style>
   <body class="background">
      <div class="main-container">
         <div class="top">
            <h2 class="text-return">Read the descriptions and try write the correctly error codes</h2>
         </div>
         <div class="mid">
            <div data-aos-anchor-placement="center-bottom" >
               <input readonly class="input_one input text" id="description" type="text"  value="{{$description}}">
               <input readonly class="hide" id="code" type="text" value="{{$code}}">
            </div>
            <div class="">
               <div>
                  <span 
                     data-aos="fade-right"
                     data-aos-offset="300"
                     data-aos-easing="ease-in-sine" 
                     class="material-symbols-outlined"
                     >
                  arrow_forward
                  </span>
               </div>
            </div>
            <div class="container-value-buttton">
               <input autocomplete="off"  class="input_two input" id="response" oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'  type="number" maxlength="3">
               <div id="border-error" class="btn" onclick="checkResponse()">
                  <h4 class="text-return" id="text-send">send</h4>
               </div>
            </div>
         </div>
         <div class="bot">
            <div>
               <h4 class="text-return">Your score: <span id="score">0</span>/6</h4>
            </div>
            <div class="scoreboard">
               <h1 class="text-return point" id="pointOne" id="point">-</h1>
               <h1 class="text-return point" id="pointTwo" id="point">-</h1>
               <h1 class="text-return point" id="pointThree" id="point">-</h1>
               <h1 class="text-return point" id="pointFour" id="point">-</h1>
               <h1 class="text-return point" id="pointFive" id="point">-</h1>
               <h1 class="text-return point" id="pointSix" id="point">-</h1>
            </div>
         </div>
      </div>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>AOS.init();</script>
      <script>
         var errors = localStorage.getItem('errors') ? parseInt(localStorage.getItem('errors')) : 0;
         var right = localStorage.getItem('right') ? parseInt(localStorage.getItem('right')) : 0;
         var trys = localStorage.getItem('trys') ? parseInt(localStorage.getItem('trys')) : 0;
         var scoreDisplay = document.getElementById('score');
         scoreDisplay.textContent = trys;
         
         var point_one = document.getElementById('pointOne');
         var point_two = document.getElementById('pointTwo');
         var point_three = document.getElementById('pointThree');
         var point_four = document.getElementById('pointFour');
         var point_five = document.getElementById('pointFive');
         var point_six = document.getElementById('pointSix');
         
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
                 trys++;
                 right++;
                 localStorage.setItem('right', right);
                 localStorage.setItem('trys', trys);
             }, 800);
             
             localStorage.setItem('errors', errors);
         
             setTimeout(function() { window.location.reload(); }, 1800);
         
             return;
         }
         
         if (!response) {
             return;
         }
         
         setTimeout(function() {
             responseInput.value = code;
             responseInput.style.borderColor = '#a82831';
             btn_border.style.borderColor = '#a82831';
             text_send.style.color = '#a82831';
             trys++;
             errors++;
             scoreDisplay.textContent = errors;
             localStorage.setItem('trys', trys);
         
             localStorage.setItem('errors', errors);
         
         
         
             setTimeout(function() { window.location.reload(); }, 200);
         }, 800);
         
         updateScoreboard();
         }
         
         function updateScoreboard() {
         point_one.textContent = (trys >= 1)    ? ((right >= 1) ? '🥳' : '😡') : '-';
         point_two.textContent = (trys >= 2)    ? ((right >= 2) ? '🥳' : '😡') : '-';
         point_three.textContent = (trys >= 3)  ? ((right >= 3) ? '🥳' : '😡') : '-';
         point_four.textContent = (trys >= 4)   ? ((right >= 4) ? '🥳' : '😡') : '-';
         point_five.textContent = (trys >= 5)   ? ((right >= 5) ? '🥳' : '😡') : '-';
         point_six.textContent = (trys >= 6)    ? ((right >= 6) ? '🥳' : '😡') : '-';
         
         if (trys >= 6) {
             if (right === 6) {
                 alert("🥳 Wow, you're amazing! You got all the codes right!");
             } else if (right === 5) {
                 alert("🎉 Fantastic! You got 5 out of 6 codes right!");
             } else if (right === 4) {
                 alert("👏 Great job! You got 4 out of 6 codes right!");
             } else if (right === 3) {
                 alert("👍 Good job! You got 3 out of 6 codes right!");
             } else if (right === 2) {
                 alert("🙂 You're on the right track! You got 2 out of 6 codes right!");
             } else if (right === 1) {
                 alert("😊 You got one of the codes right! Keep going!");
             } else {
                 alert("😕 It looks like you didn't get any of the codes right. Keep trying!");
             }
         
             localStorage.clear();
         
             window.location.reload();
         }
         }
         
         updateScoreboard();
         
      </script>
   </body>
</html>