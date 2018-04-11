<script src="js/tattest1.js"></script>

<html>
<title>W3.CSS</title>
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <div class="w3-container">
               <div class="row" style="text-align: center;">
                   <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Start TAT Test</button>
               </div>
               <div id="id01" class="w3-modal" ">
               <div class="w3-modal-content w3-animate-top w3-card-4">
                   <header class="w3-container w3-teal">
       <span onclick="document.getElementById('id01').style.display='none';"
             class="w3-button w3-display-topright;">&times;</span>
                       <h2>TAT TEST 1</h2>
                   </header>
                   <div class="w3-container" align="middle">
                       <div id="div1" style="width: 500px;height: 500px;"></div>
                       <button id="tat_test_b1" onclick="tat_test();tat_test_button();">Start Test</button>

                   </div>
                   <footer class="w3-container w3-teal" style="text-align: center">
                       <p>SSBPsych.com</p>
                   </footer>
               </div>

           </div>