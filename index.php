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
      <section class="container center-align">
         <div class="row">
            <div class="col s12">
               <h3>Bem Vindo ao Game Teocrático</h3>
            </div>
         </div>
      </section>
      <section class="container">
         <div class="row">
            <div class="col s12">
               <div class="section center-align">
                  <h5>Intruções</h5>
                  <p>Antes de iniciarmos você precisa saber algumas regras ;)</p>
               </div>
               <div class="divider"></div>
            </div>
         </div>
         <div class="row">
            <div class="col s12 m4">
               <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                     <span class="card-title"><i class="material-icons">perm_identity</i> Participantes:</span>
                     <p>  Para tornar o jogo mais interativo ele deve ser jogado por, no minimo 3 pessoas,
                        sendo <strong>um Mediador</strong>, e mais dois jogadores, ou um mediador e duas equipes.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col s12 m4">
               <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                     <span class="card-title"><i class="material-icons">query_builder</i> Tempo:</span>
                     <p> Cada equipe tem um minuto para responder a pergunta, toda vez que uma ação é executada
                        o tempo é reinicado.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col s12 m4">
               <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                     <span class="card-title"><i class="material-icons">call_split</i> Passadas:</span>
                     <p> Se a equipe que começar dona da pergunta não souber responder pode "passar" a pergunta para a equipe adversária, se esta também não souber pode
                        "repassar" a pergunta.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="contanier center-align">
         <div class="row">
            <div class="col s12">
               <div class="section center-align">
                  <h5>Vamos lá?</h5>
                  <p>Preencha os campos abaixo para iniciarmos a rodada ^_^</p>
               </div>
               <div class="divider"></div>
            </div>
         </div>
         <div class="row">
            <div class="col m6 offset-m3 col s12">
               <form id="form" action="jogo.php" method="GET" >
                 <div class="row">
                    <div class="input-field">
                     <input id="equipeum" type="text" name="equipeum" class="validate">
                     <label for="equipeum">Primeira Equipe</label>
                   </div>
                   <div class="input-field">
                     <input id="equipedois" name="equipedois" type="text" class="validate">
                     <label for="equipedois">Segunda Equipe</label>
                   </div>
                 </div>
                 <div class="input-field">
                  <select id="dificuldade" name="dificuldade">
                    <option value="1">Fácil</option>
                    <option value="2">Médio</option>
                    <option value="3">Difícil</option>
                  </select>
                  <label>Dificuldade</label>
                </div>
                 <div class="input-field">
                  <select id="numquestions" name="numquestions">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                  </select>
                  <label>Número de Perguntas</label>
                </div>
                <div class="input-field center-align">
                   <button class="btn waves-effect waves-light blue" type="submit" name="action">Iniciar
      <i class="mdi-content-send right"></i>
    </button>
                </div>
               </form>
            </div>
         </div>
      </section>
      <?php include 'includes/footer.html';?>
   </body>
</html>
