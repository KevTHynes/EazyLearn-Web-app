var score = 0; //set score to 0
var total = 3; //Total number of questions
var point = 1; //Points per correct answer
var highest = total * point;

//Initializar
function init() {
  //set correct answers
  sessionStorage.setItem('a1','b');
  sessionStorage.setItem('a2','d');
  sessionStorage.setItem('a3','c');
}

$(document).ready(function() {
  //hide all questions
  $('.questionForm').hide();
  
  //Show first question
  $('#q1').show();
  
  $('.questionForm #submit') .click(function() {
    //Get data attributes
    current = $(this).parents('form:first').data('question');
    next = $(this).parents('form:first').data('question')+1;
    //Hide all question
    $('.questionForm').hide();
    //Show next question
    $('#q'+next+'').fadeIn(300);
    process(''+current+'');
    return false;
  })
  });
/*$(document).ready(function() {
  
  $('.questionForm').hide();
  $('#q1').show();
  $('#q1 #submit').click(function(){
    $('.questionForm').hide();
    process('q1');
    $('#q2').fadeIn(300);
    return false;
  });
  
  $('#q2 #submit').click(function(){
    $('.questionForm').hide();
    process('q2');
    $('#q3').fadeIn(300);
    return false;
  });
  
  $('#q3 #submit').click(function(){
    $('.questionForm').hide();
    process('q3');
    $('#q4').fadeIn(300);
    return false;
  });
  
  $('#q4 #submit').click(function(){
    $('.questionForm').hide();
    process('q4');
    $('#q5').fadeIn(300);
    return false;
  });
  
  $('#q5 #submit').click(function(){
    $('.questionForm').hide();
    process('q5');
    $('#results').fadeIn(300);
    return false;
  });
});*/

//process the answer 
function process(n){
  //Get input valueOf
  var submitted = $('input[name=q'+n+']:checked') .val();
  if(submitted == sessionStorage.getItem('a'+n+'')) {
      score++;
    }
  
  if(n == total){
    $('#results').html('<h3> Your final score is: ' + score +' out of 3</h3> <a href="irelandQ.html"> Take Quiz Again </a>');
  }
  return false;
}





/*function process(q){
  if(q == "q1"){
    var submitted = $('input [name=q1] :checked') .val();
    if(submitted == sessionStorage.a1) {
      score++;
    }
  }
  
  if(q == "q2"){
    var submitted1 = $('input [name=q2] :checked') .val();
    if(submitted1 == sessionStorage.a2){
      score++;
    }
  }
  
  if(q == "q3"){
    var submitted2 = $('input [name=q3] :checked') .val();
    if(submitted2 == sessionStorage.a3){
      score++;
    }
  }
  
  if(q == "q4"){
    var submitted3 = $('input [name=q4] :checked') .val();
    if(submitted3 == sessionStorage.a4){
      score++;
    }
  }
  
  if(q == "q5"){
    var submitted4 = $('input [name=q5] :checked') .val();
    if(submitted4 == sessionStorage.a5){
      score++;
    }
    $('#results').html('<h3> Your final score is: ' + score +' out of 3</h3> <a href="../irelandQ.html"> Take Quiz Again </a>');
  }
  return false;
}*/

//Add event listener
window.addEventListener('load',init,false);