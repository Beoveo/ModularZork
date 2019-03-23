
var panel = $('#zork-area');
var counterStart = 40;


///////////////////////////////////////////////////////////////////////////////
//Eventos de click
///////////////////////////////////////////////////////////////////////////////

$(document).on('click', '#start-over', function(e) {
  game.reset();
});

$(document).on('click', '.answer-button', function(e) {
  game.clicked(e);
});

$(document).on('click', '#start', function(e) {
  $('#subwrapper').prepend('<h2>Tiempo para contestar: <span id="counter-number">40</span> segundos</h2>');
  game.loadQuestion();
});

///////////////////////////////////////////////////////////////////////////////
//questiones a resolver 
///////////////////////////////////////////////////////////////////////////////

var questions = [{
  question: "No sabes donde estas no se ve nada ,¿que puede hacer?",
  answers: ["Romper el cristal", "Encender una antorcha", "Buscar la salida a ciegas"],
  correctAnswer: "Romper el cristal",
  image:"zork/juegoimg/p1/calabozoOscuro.png"
}, {
  question: "Ahora si!!, estas en el calabozo, y la puerta esta bloqueada, tiene que haber algo por aqui para abrir la puerta.",
  answers: ["Gritar !!!", "Forzar la puerta", "Tirar el barril"],
  correctAnswer: "Tirar el barril",
  image:"zork/juegoimg/p1/calabozocerrado.png"
}, {
  question: "Has encontrado una llave!!, prueba abrir la puerta",
  answers: ["Abrir la puerta y salir"],
  correctAnswer: "Abrir la puerta y salir",
  image:"zork/juegoimg/p1/calabozollave.png"
}, {
  question: "Esta sala ya tiene mejor pinta, puedes subir las escaleras, ir hacia el Este o al Norte",
  answers: ["Subir escaleras", "Ir al Este", "Ir al Norte", "Coger espada"],
  correctAnswer: "All",
  image:"zork/juegoimg/p2/salaSupClabozoEspada.png",
  image2:"zork/juegoimg/p2/salaSupClabozoManoEspada.png"
}, {
  question: 'Un Orco!!!!! toma una decisión rapido!!!',
  answers: ["Volver", "Atacar"],
  correctAnswer: "All",
  image:"zork/juegoimg/p2/salaSupClabozoEste.png"
}];




var game = {
  questions:questions,
  currentQuestion:0,
  counter:counterStart,
  espada:0,

  countdown: function(){
    game.counter--;
    $('#counter-number').html(game.counter);

    if (game.counter === 0){
      console.log('TIME UP');
      game.timeUp();
    }
  },
  loadQuestion: function(){
    timer = setInterval(game.countdown, 1000);

    panel.html('<h2>' + questions[this.currentQuestion].question + '</h2>' );
    if(game.espada === 0){
      panel.append('<img src="' + questions[this.currentQuestion].image + '" />');
    }
    else{
      panel.append('<img src="' + questions[this.currentQuestion].image2 + '" />');
    }
    for (var i = 0; i<questions[this.currentQuestion].answers.length; i++){
      panel.append('<button class="answer-button" id="button"' + 'data-name="' + questions[this.currentQuestion].answers[i] + '">' + questions[this.currentQuestion].answers[i]+ '</button>');
    }
    
  },
  current: function(){
    game.counter = couterStart;
    $('#counter-number').html(game.counter);
    game.currentQuestion;
    game.loadQuestion();
  },
  nextQuestion: function(indice) {
    game.counter = counterStart;
    $('#counter-number').html(game.counter);
    game.currentQuestion += indice;
    game.loadQuestion();
  },
  timeUp: function (){
    clearInterval(timer);
    $('#counter-number').html(game.counter);

    panel.html('<h2>Tiempo Agotado , vuelve a empezar!</h2>');
    panel.append('<br><button id="start-over">Start Over?</button>');
   
  },
  results: function() {
    clearInterval(timer);

    panel.html('<h2>Resultados de como has terminado!</h2>');
    $('#counter-number').html(game.counter);
    //poner timepo , vida, ...
    panel.append('<br><button id="start-over">Start Over?</button>');
  },
  clicked: function(e) {
    clearInterval(timer);

    if(questions[this.currentQuestion].correctAnswer === "All"){ //Varias respuestas
        if ($(e.target).data("name") === "Ir al Este" ){
          this.answeredCorrectly(1);
        }
        else if($(e.target).data("name") === "Coger espada"){
          game.espada++;
          this.answeredCorrectly(0);
        }
        else if($(e.target).data("name") === "Volver"){
          this.answeredCorrectly(-1);
        }
        else if($(e.target).data("name") === "Ir al Norte"){
          this.answeredCorrectly(2);
        }


    } else {
        if ($(e.target).data("name") === questions[this.currentQuestion].correctAnswer){
          this.answeredCorrectly(1);
        } else {
          this.answeredIncorrectly();
        }
    }
  },
  answeredIncorrectly: function() {

    clearInterval(timer);
    panel.html('<h2>Imposible!</h2>');
    panel.append('<h3>Intentalo de nuevo!! </h3>');
    panel.append('<img src="' + questions[game.currentQuestion].image + '" />');

    setTimeout(game.current, 1000);

  },
  answeredCorrectly: function(indice){
    clearInterval(timer);

    panel.html('<h2>Perfecto!!! continuemos</h2>');
    panel.append('<img src="' + questions[game.currentQuestion].image + '" />');

    
      setTimeout(game.nextQuestion, 1000, indice);
   
  },
  reset: function(){
    this.currentQuestion = 0;
    this.counter = counterStart;
    this.loadQuestion();
  }
};


/*
Bibliografia
https://www.w3schools.com
Apuntes de clase
Stackoverflow
*/