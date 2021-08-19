<?php


require_once(__DIR__ . "/quizlist.php");
session_start();

$num = range(0, 68);
shuffle($num);


for($i=0; $i<6; $i++){
  $number = $num;
};


?>



 <!DOCTYPE html> 
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Quiz</title>
  <!-- <script src="function.js"></script> -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="phpquiz.css">
</head>
<body>

<script>
    for(i = 1; i <= 6; i++){
        document.write(
        "<div class='quizes' id='quiz" + i + "'>"
        );
    }

</script>

<div class="quizes" id="quiz1">
    <div class="quiz_part">
   <br>
   <div class="result">
      <h1>Q1 / 6</h1>
      <p></p>
   </div>
         <div class="img_part">
            <img src="<?= $quizlist[$number[1]]["q"] ;?>" width="40%">
         </div>
         <div class="buttons">
         <button type="button" id="q1-1" value="Japanese" class="btn btn-j quiz">Japanese　<img src="jp.png" width="30px";></button>
         <button type="button" id="q1-2" value="Chinese" class="btn btn-c quiz">Chinese　<img src="cn2.png" width="30px";></button> 
         <button type="button" id="q1-3" value="Korean" class="btn btn-k quiz">Korean　<img src="kr.png" width="30px";></button>
         <p></p>
         <button type="button" id="next1" class="btn btn-n">NEXT</button>

         </div>
         <input type="hidden" id="q1-x" value="<?= $quizlist[$number[1]]["a"] ;?>">
      </div> 
</div>


<div class="quizes" id="quiz2">
<div class="quiz_part">
<br>
<div class="result">
      <h1>Q2 / 6</h1>
      <p></p>
   </div>
   
<div class="img_part">
   <img src="<?= $quizlist[$number[2]]["q"] ;?>" width="40%">
</div>
<div class="buttons">
<button type="button" id="q2-1" value="Japanese" class="btn btn-j quiz">Japanese　<img src="jp.png" width="30px";></button>
         <button type="button" id="q2-2" value="Chinese" class="btn btn-c quiz">Chinese　<img src="cn2.png" width="30px";></button> 
         <button type="button" id="q2-3" value="Korean" class="btn btn-k quiz">Korean　<img src="kr.png" width="30px";></button>
   <p></p>
   <button type="button" id="next2" class="btn btn-n">NEXT</button>
</div>
   <input type="hidden" id="q2-x" value="<?= $quizlist[$number[2]]["a"] ;?>"> 
</div>
</div>

<div class="quizes" id="quiz3">
<div class="quiz_part">
<br>
<div class="result">
      <h1>Q3 / 6</h1>
      <p></p>
   </div>
   
<div class="img_part">
    <img src="<?= $quizlist[$number[3]]["q"] ;?>" width="40%">
   </div>
   <div class="buttons">
   <button type="button" id="q3-1" value="Japanese" class="btn btn-j quiz">Japanese　<img src="jp.png" width="30px";></button>
         <button type="button" id="q3-2" value="Chinese" class="btn btn-c quiz">Chinese　<img src="cn2.png" width="30px";></button> 
         <button type="button" id="q3-3" value="Korean" class="btn btn-k quiz">Korean　<img src="kr.png" width="30px";></button>
    <p></p>
    <button type="button" id="next3" class="btn btn-n">NEXT</button>
</div>
    <input type="hidden" id="q3-x" value="<?= $quizlist[$number[3]]["a"] ;?>"> 
</div>
</div>

<div class="quizes" id="quiz4">
<div class="quiz_part">
<br>
<div class="result">
      <h1>Q4 / 6</h1>
      <p></p>
   </div>
   
<div class="img_part">
    <img src="<?= $quizlist[$number[4]]["q"] ;?>" width="40%">
</div>
<div class="buttons">
<button type="button" id="q4-1" value="Japanese" class="btn btn-j quiz">Japanese　<img src="jp.png" width="30px";></button>
         <button type="button" id="q4-2" value="Chinese" class="btn btn-c quiz">Chinese　<img src="cn2.png" width="30px";></button> 
         <button type="button" id="q4-3" value="Korean" class="btn btn-k quiz">Korean　<img src="kr.png" width="30px";></button>
    <p></p>
    <button type="button" id="next4" class="btn btn-n">NEXT</button>
</div>
    <input type="hidden" id="q4-x" value="<?= $quizlist[$number[4]]["a"] ;?>"> 
</div>
</div>


<div class="quizes" id="quiz5">
<div class="quiz_part">
<br>
<div class="result">
      <h1>Q5 / 6</h1>
      <p></p>
   </div>
   
<div class="img_part">
    <img src="<?= $quizlist[$number[5]]["q"] ;?>" width="40%">
</div>
<div class="buttons">
<button type="button" id="q5-1" value="Japanese" class="btn btn-j quiz">Japanese　<img src="jp.png" width="30px";></button>
         <button type="button" id="q5-2" value="Chinese" class="btn btn-c quiz">Chinese　<img src="cn2.png" width="30px";></button> 
         <button type="button" id="q5-3" value="Korean" class="btn btn-k quiz">Korean　<img src="kr.png" width="30px";></button>
    <p></p>
    <button type="button" id="next5" class="btn btn-n">NEXT</button>
</div>
    <input type="hidden" id="q5-x" value="<?= $quizlist[$number[5]]["a"] ;?>"> 
</div>
</div>

<div class="quizes" id="quiz6">
<div class="quiz_part">
<br>
<div class="result">
      <h1>Question Final</h1>
      <p></p>
   </div>
<div class="img_part">
    <img src="<?= $quizlist[$number[6]]["q"] ;?>" width="40%">
</div>
<div class="buttons">
<button type="button" id="q6-1" value="Japanese" class="btn btn-j quiz">Japanese　<img src="jp.png" width="30px";></button>
         <button type="button" id="q6-2" value="Chinese" class="btn btn-c quiz">Chinese　<img src="cn2.png" width="30px";></button> 
         <button type="button" id="q6-3" value="Korean" class="btn btn-k quiz">Korean　<img src="kr.png" width="30px";></button>
    <p></p>
    <button type="button" id="refresh" onclick="reload()" class="btn btn-n">REFRESH</button>
</div>
    <input type="hidden" id="q6-x" value="<?= $quizlist[$number[6]]["a"] ;?>"> 
</div>
</div>

<div id="total">
  <p></p>
</div>
</body>
<script>
var oneLocate = $("#quiz2").offset().top;
var twoLocate = $("#quiz3").offset().top;
var threeLocate = $("#quiz4").offset().top;
var fourLocate = $("#quiz5").offset().top;
var fiveLocate = $("#quiz6").offset().top;



$('#next1').click(function(){
        $(window).scrollTop(oneLocate);
    });


$('#next2').click(function(){
        $(window).scrollTop(twoLocate);
    });


$('#next3').click(function(){
        $(window).scrollTop(threeLocate);
    });

$('#next4').click(function(){
        $(window).scrollTop(fourLocate);
    });


$('#next5').click(function(){
        $(window).scrollTop(fiveLocate);
    });

    
function reload(){
      scrollTo(0, 0);
      window.location.reload();
   } 

elem1 = document.getElementById("q1-1");
element1 = elem1.getAttribute("value");

elem2 = document.getElementById("q1-2");
element2 = elem2.getAttribute("value");

elem3 = document.getElementById("q1-3");
element3 = elem3.getAttribute("value");

elemx = document.getElementById("q1-x");
elementx = elemx.getAttribute("value");

rem1 = document.querySelectorAll("#quiz1 .quiz");

function correct1(){
  tagc = document.querySelector("#quiz1 p");
  tagc.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/maru.png' style='height:100px; width:100px; position:absolute'>";
  totalnum++;
      for(i = 0; i < 3; i++){
         　rem1[i].removeEventListener("click", wrong1);
　　　　}
}

function wrong1(){
  tagw = document.querySelector("#quiz1 p");
  tagw.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/batu.png' style='height:100px; width:100px; position:absolute'>";
 　　　for(i = 0; i < 3; i++){
 　　　　　 rem1[i].removeEventListener("click",correct1);
　　　　}
}


if(element1 == elementx){
   elem1.addEventListener("click", correct1);  
}else if(element1 != elementx){   
   elem1.addEventListener("click", wrong1);
}


if(element2 == elementx){
   elem2.addEventListener("click", correct1);  
}else if(element2 != elementx){
   elem2.addEventListener("click", wrong1);
}


if(element3 == elementx){
   elem3.addEventListener("click", correct1);  
}else if(element3 != elementx){
   elem3.addEventListener("click", wrong1);
}


// total = document.querySelector("#total p");
// var totalnum = 0;

// total.innerText = totalnum; 
// q1ans = document.querySelector("#quiz1 p").innerText;
// if(q1ans == "○"){
//    totalnum++ ;
// }

//-------------------- Quiz 2 -----------------------------

elem1 = document.getElementById("q2-1");
element1 = elem1.getAttribute("value");

elem2 = document.getElementById("q2-2");
element2 = elem2.getAttribute("value");

elem3 = document.getElementById("q2-3");
element3 = elem3.getAttribute("value");

elemx = document.getElementById("q2-x");
elementx = elemx.getAttribute("value");

if(element1 == elementx){
   elem1.addEventListener("click", correct2);  
}else if(element1 != elementx){
   elem1.addEventListener("click", wrong2);
}


if(element2 == elementx){
   elem2.addEventListener("click", correct2);  
}else if(element2 != elementx){
   elem2.addEventListener("click", wrong2);
}


if(element3 == elementx){
   elem3.addEventListener("click", correct2);  
}else if(element3 != elementx){
   elem3.addEventListener("click", wrong2);
}

rem2 = document.querySelectorAll("#quiz2 .quiz");

function correct2(){
  tagc = document.querySelector("#quiz2 p");
  tagc.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/maru.png' style='height:100px; width:100px; position:absolute'>";
  totalnum++;
      for(i = 0; i < 3; i++){
         　rem2[i].removeEventListener("click", wrong2);
　　　　}
}

function wrong2(){
  tagw = document.querySelector("#quiz2 p");
  tagw.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/batu.png' style='height:100px; width:100px; position:absolute'>";
 　　　for(i = 0; i < 3; i++){
 　　　　　 rem2[i].removeEventListener("click",correct2);
　　　　}
}



// -------------------   QUIZ 3    -------------


elem1 = document.getElementById("q3-1");
element1 = elem1.getAttribute("value");

elem2 = document.getElementById("q3-2");
element2 = elem2.getAttribute("value");

elem3 = document.getElementById("q3-3");
element3 = elem3.getAttribute("value");

elemx = document.getElementById("q3-x");
elementx = elemx.getAttribute("value");


if(element1 == elementx){
   elem1.addEventListener("click", correct3);  
}else if(element1 != elementx){
   elem1.addEventListener("click", wrong3);
}


if(element2 == elementx){
   elem2.addEventListener("click", correct3);  
}else if(element2 != elementx){
   elem2.addEventListener("click", wrong3);
}


if(element3 == elementx){
   elem3.addEventListener("click", correct3);  
}else if(element3 != elementx){
   elem3.addEventListener("click", wrong3);
}

rem3 = document.querySelectorAll("#quiz3 .quiz");

function correct3(){
  tagc = document.querySelector("#quiz3 p");
  tagc.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/maru.png' style='height:100px; width:100px; position:absolute'>";
  totalnum++;
      for(i = 0; i < 3; i++){
         　rem3[i].removeEventListener("click", wrong3);
　　　　}
}

function wrong3(){
  tagw = document.querySelector("#quiz3 p");
  tagw.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/batu.png' style='height:100px; width:100px; position:absolute'>";
 　　　for(i = 0; i < 3; i++){
 　　　　　 rem3[i].removeEventListener("click",correct3);
　　　　}
}

// ----------Quiz4---------------------------------


elem1 = document.getElementById("q4-1");
element1 = elem1.getAttribute("value");

elem2 = document.getElementById("q4-2");
element2 = elem2.getAttribute("value");

elem3 = document.getElementById("q4-3");
element3 = elem3.getAttribute("value");

elemx = document.getElementById("q4-x");
elementx = elemx.getAttribute("value");

rem4 = document.querySelectorAll("#quiz4 .quiz");

function correct4(){
  tagc = document.querySelector("#quiz4 p");
  tagc.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/maru.png' style='height:100px; width:100px; position:absolute'>";
  totalnum++;
      for(i = 0; i < 3; i++){
         　rem4[i].removeEventListener("click", wrong4);
　　　　}
}

function wrong4(){
  tagw = document.querySelector("#quiz4 p");
  tagw.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/batu.png' style='height:100px; width:100px; position:absolute'>";
 　　　for(i = 0; i < 3; i++){
 　　　　　 rem4[i].removeEventListener("click",correct4);
　　　　}
}


if(element1 == elementx){
   elem1.addEventListener("click", correct4);  
}else if(element1 != elementx){   
   elem1.addEventListener("click", wrong4);
}


if(element2 == elementx){
   elem2.addEventListener("click", correct4);  
}else if(element2 != elementx){
   elem2.addEventListener("click", wrong4);
}


if(element3 == elementx){
   elem3.addEventListener("click", correct4);  
}else if(element3 != elementx){
   elem3.addEventListener("click", wrong4);
}



// -------------Quiz5---------------------

elem1 = document.getElementById("q5-1");
element1 = elem1.getAttribute("value");

elem2 = document.getElementById("q5-2");
element2 = elem2.getAttribute("value");

elem3 = document.getElementById("q5-3");
element3 = elem3.getAttribute("value");

elemx = document.getElementById("q5-x");
elementx = elemx.getAttribute("value");

rem5 = document.querySelectorAll("#quiz5 .quiz");

function correct5(){
  tagc = document.querySelector("#quiz5 p");
  tagc.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/maru.png' style='height:100px; width:100px; position:absolute'>";
  totalnum++;
      for(i = 0; i < 3; i++){
         　rem5[i].removeEventListener("click", wrong5);
　　　　}
}

function wrong5(){
  tagw = document.querySelector("#quiz5 p");
  tagw.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/batu.png' style='height:100px; width:100px; position:absolute'>";
 　　　for(i = 0; i < 3; i++){
 　　　　　 rem5[i].removeEventListener("click",correct5);
　　　　}
}


if(element1 == elementx){
   elem1.addEventListener("click", correct5);  
}else if(element1 != elementx){   
   elem1.addEventListener("click", wrong5);
}


if(element2 == elementx){
   elem2.addEventListener("click", correct5);  
}else if(element2 != elementx){
   elem2.addEventListener("click", wrong5);
}


if(element3 == elementx){
   elem3.addEventListener("click", correct5);  
}else if(element3 != elementx){
   elem3.addEventListener("click", wrong5);
}


// ---------Quiz6-------------------

elem1 = document.getElementById("q6-1");
element1 = elem1.getAttribute("value");

elem2 = document.getElementById("q6-2");
element2 = elem2.getAttribute("value");

elem3 = document.getElementById("q6-3");
element3 = elem3.getAttribute("value");

elemx = document.getElementById("q6-x");
elementx = elemx.getAttribute("value");

rem6 = document.querySelectorAll("#quiz6 .quiz");

function correct6(){
  tagc = document.querySelector("#quiz6 p");
  tagc.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/maru.png' style='height:100px; width:100px; position:absolute'>";
  totalnum++;
  swal("お疲れ様ですm(__)m", "正解数は" + totalnum + "問です", "success");
      for(i = 0; i < 3; i++){
         　rem6[i].removeEventListener("click", wrong6);
　　　　}
}

function wrong6(){
  tagw = document.querySelector("#quiz6 p");
  tagw.innerHTML ="<img src='http://takadakoki.com/projects/face/pics/batu.png' style='height:100px; width:100px; position:absolute'>";
  swal("お疲れ様ですm(__)m", "あなたの正解数は" + totalnum + "問です", "success");
 　　　for(i = 0; i < 3; i++){
 　　　　　 rem6[i].removeEventListener("click",correct6);
　　　　}
}


if(element1 == elementx){
   elem1.addEventListener("click", correct6);  
}else if(element1 != elementx){   
   elem1.addEventListener("click", wrong6);
}


if(element2 == elementx){
   elem2.addEventListener("click", correct6);  
}else if(element2 != elementx){
   elem2.addEventListener("click", wrong6);
}


if(element3 == elementx){
   elem3.addEventListener("click", correct6);  
}else if(element3 != elementx){
   elem3.addEventListener("click", wrong6);
}


// ------------------total number of correct------------------

// total = document.querySelector("#total p");
var totalnum = 0;

// total.innerText = totalnum; 

$('html *').css('overflow','hidden');
$(window).on('touchmove.noScroll', function(e) {
    e.preventDefault();
});

</script>

<!-- admax -->
<script src="https://adm.shinobi.jp/s/5ad9126d4f4671289db0cdd367900d2c"></script>
<!-- admax -->

</html> 
