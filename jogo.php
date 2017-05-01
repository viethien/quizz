<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale= 1.0">
      <link rel="stylesheet" href="css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="css/estilo.css">
      <title>Game Teocrático</title>
   </head>
   <body>
      <?php include 'includes/nav.html'; ?>
   <section class="container" id="cPerguntas">
      <div class="row">
         <div class="col s12 m4 offset-m4">
           <div class="card ">
               <div class="card-content black-text">
                  <span class="card-title"><i class="material-icons">question_answer</i> Pergunta: <span id="valorPergunta">90pt</span></span>
                  <p id="pergunta">  Quem é o Batman?</p>
               </div>
           </div>
         </div>
       </div>
         <div class="row">
           <div class="col s12 m4 offset-m4">
             <div class="card ">
                 <div class="card-content black-text">
                    <span class="card-title"><i class="material-icons">done</i> Resposta:</span>
                    <p id="resposta"> É O CARA MAIS SINISTRO DA TERRA
                    </p>
                 </div>
             </div>
           </div>
         </div>
<div class="row">
  <div class="col s12 m4 offset-m4">
    <div class="card ">
        <div class="card-content black-text">
           <span class="card-title"><i class="material-icons">error</i> Desafio:</span>
           </p>
           <p id="desafio"> Role no chão
        </div>
    </div>
  </div>
</div>

      </div>
   </section>
 <section class="container" id="equipes">
   <div class="row" id="acoes">
     <div class="col s12 m4 offset-m4 center">
       <a id="acertar" class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons">done</i></a>
       <a id="passar" class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">loop</i></a>
       <a id="pagadesafio" class="btn-floating btn-small waves-effect waves-light yellow"><i class="material-icons">list</i></a>
       <a id="errar" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">error</i></a>
     </div>
   </div>
  <div class="row">
    <div class="col s12 m4 offset-m4">
      <div class="chip">
   <img src="img/yuna.jpg" alt="Equipe Um">
   <text id="equipeum"></text>
 </div>
 <span>
     <div class="chip right">
       <img src="img/yuna.jpg" alt="Equipe Dois">
         <text id="equipedois"></text>

</div>
 </span>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m4 offset-m4">
      <div class="btn-group">
        <button class="green" id="acertosum"></button>
        <button class="red" id="errosum"></button>
        <button class="yellow" id="desafiosum"></button>
      </div>
    <span class="right">
      <div class="btn-group">
        <button class="green" id="acertosdois"></button>
        <button class="red" id="errosdois"></button>
        <button class="yellow" id="desafiosdois"></button>
      </div>
    </span>
  </div>
</div>

 </section>
 <script src="js/jquery.min.js"></script>
 <script src="js/materialize.min.js"></script>
 <script src="js/ClasseEquipe.js"></script>
 <script src="js/main.js"></script>

   </body>
</html>
