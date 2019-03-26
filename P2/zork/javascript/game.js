
var panel = $('#zork-area');
var counterStart = 30;


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
  $('#subwrapper').prepend('<h2>Tiempo para contestar: <span id="counter-number">30</span> segundos</h2>');
  game.loadQuestion();
});

///////////////////////////////////////////////////////////////////////////////
//cuestiones a resolver 
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
  answers: ["Coger la llave y salir"],
  correctAnswer: "Coger la llave y salir",
  image:"zork/juegoimg/p1/calabozollave.png",
  llave: 1
}, {
  question: "Esta sala ya tiene mejor pinta, puedes subir las escaleras, ir hacia el Este o al Norte",
  answers: ["Ir al Este", "Coger espada"],
  correctAnswer: "All",
  image:"zork/juegoimg/p2/salaSupClabozoEspada.png",
  espada: 1
},{
  question: "Estas en la sala encima de los calabozos, puedes subir las escaleras, ir hacia el Este o al Norte",
  answers: ["Ir al Este"],
  correctAnswer: "All",
  image:"zork/juegoimg/p2/salaSupClabozo.png",
}, {
  question: 'Un Orco!!!!! toma una decisión rapido!!!',
  answers: ["Volver", "Atacar"],
  correctAnswer: "All",
  image:"zork/juegoimg/p2/salaSupClabozoEste.png",
  orco: 1
}, {
  question: 'Has derrotado al Orco!!!, sal corriendo de este sitio!!!!',
  answers: ["Salir"],
  correctAnswer: "Salir",
  image:"zork/juegoimg/p2/salaSupClabozoEsteSinOrco.png",
  
}];




var game = {
  questions:questions,
  currentQuestion:0,
  counter:counterStart,
  espada:0,
  lives: 10,
  llaves: 0,
  

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

    panel.append('<h4>Vida: ' + this.lives + ' - Espadas: ' + this.espada  + ' - Llaves: ' + this.llaves + "</h4>");
   
    panel.append('<img src="' + questions[this.currentQuestion].image + '" />');
    
    for (var i = 0; i<questions[this.currentQuestion].answers.length; i++){
      panel.append('<button class="answer-button" id="button"' + 'data-name="' + questions[this.currentQuestion].answers[i] + '">' + questions[this.currentQuestion].answers[i]+ '</button>');
    }
    
  },
  /*current: function(){
    game.counter = couterStart;
    $('#counter-number').html(game.counter);
    game.currentQuestion ;
    game.loadQuestion();
  },*/
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

    panel.html('<h2>Fin de la demo!</h2>');
    panel.append('<p>En breve prodrás disfrutar de más aventuras con zork y crear tus propios nivels</p>');
    //panel.append('<img src= zork/juegoimg/logo.png />');
    //poner timepo , vida, ...
    panel.append('<br><button id="start-over">Start Over?</button>');
  },
  clicked: function(e) {
    clearInterval(timer);

    if(questions[this.currentQuestion].correctAnswer === "All"){ //Varias respuestas
        if ($(e.target).data("name") === "Ir al Este" ){
          if (questions[this.currentQuestion].espada === 1){
            this.answeredCorrectly(2);
          }
          else{
            this.answeredCorrectly(1);
          }
        }
        /*else if($(e.target).data("name") === "Ir al Oeste"){
          this.answeredCorrectly(-2);
        }
        else if($(e.target).data("name") === "Ir al Norte"){
          this.answeredCorrectly(2);
        }*/
        else if($(e.target).data("name") === "Coger espada"){
          questions[this.currentQuestion].espada--;
          game.espada++;
          this.answeredCorrectly(1);
        }
        else if($(e.target).data("name") === "Volver"){
          if (this.espada === 0){
            this.answeredCorrectly(-2);
          }
          else
            this.answeredCorrectly(-1);
        }
        
        else if($(e.target).data("name") === "Atacar"){
          if(this.espada = 1){
            this.lives -= 1.5;
          }
          else{
            this.lives -= 3.5;
          }

          if(this.lives <= 0){
            game.results();
          }
          else{
            questions[this.currentQuestion].orco--;
            this.answeredCorrectly(1);
          }
        }
       
    } else if ($(e.target).data("name") === "Coger la llave y salir"){
       questions[this.currentQuestion].llave--;
       this.llave++;
       this.answeredCorrectly(1);

    }
    else {
        if ($(e.target).data("name") === questions[this.currentQuestion].correctAnswer){
          this.answeredCorrectly(1);
        } else {
          this.answeredIncorrectly();
        }
    }
  },
  answeredIncorrectly: function() {

    clearInterval(timer);
    panel.html('<h2>No es buena idea!</h2>');
    panel.append('<h3>Intentalo de nuevo!! </h3>');
    setTimeout(game.nextQuestion, 1000, 0);

  },
  answeredCorrectly: function(indice){
    clearInterval(timer);
    panel.html('<h2>Perfecto!!! continuemos</h2>');
    
    if (game.currentQuestion === questions.length - 1){// si he llegado al final 
      setTimeout(game.results, 500);
    }
    else{
      setTimeout(game.nextQuestion, 1000, indice);
    }
   
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