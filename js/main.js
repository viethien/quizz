const equipeum = new Equipe("Cowboys",0,0,0,0);
const equipedois = new Equipe("FromHell",0,0,0,0);


$(document).ready(function(){
  Materialize.toast("A equipe " +  defineIniciante() +  " Iniciará o jogo", 3000); // 4000 is the duration of the toast
  $("#equipeum").html(equipeum.getNome());
  $("#equipedois").html(equipedois.getNome());
});

$("#acertar").click(function(){
  var pergunta = 10;
  if(checaVez() ===  equipeum){

    equipeum.acertar(pergunta);
    $("#acertosum").html(equipeum.getAcertos());
    Materialize.toast("Parabéns! " + equipeum.getNome() +  ", mais " +pergunta+" pontos.", 3000) // 4000 is the duration of the toast

  } else if(checaVez()=== equipedois){

    equipedois.acertar(pergunta);
    $("#acertosdois").html(equipedois.getAcertos());
    Materialize.toast("Parabéns! " + equipedois.getNome() +  ", mais " +pergunta+" pontos.", 3000) // 4000 is the duration of the toast

  }
});

$("#errar").click(function(){
  if (checaVez() === equipeum){
    equipeum.errar();
    passaVez();
    $("#errosum").html(equipeum.getErros());

  } else if(checaVez() === equipedois){
   equipedois.errar();
   passaVez();
   $("#errosdois").html(equipedois.getErros());
  }
});

$("#passar").click(function(){
  passaVez();
});

$("#pagadesafio").click(function(){
  var pergunta = 10;
  if(checaVez() ===  equipeum){
    equipeum.pagarDesafio(pergunta);
    $("#desafiosum").html(equipeum.getDesafios());
  } else if(checaVez() === equipedois){
    equipedois.pagarDesafio(pergunta);
    $("#desafiosdois").html(equipedois.getDesafios());
  }
  passaVez();
});
function defineIniciante(){
  var quemcomeca = Math.floor(Math.random() * 2) + 1;
  if(quemcomeca === 1){
      equipeum.setVez(true);
      return equipeum.getNome();
  } else{
      equipedois.setVez(true);
      return equipedois.getNome();
  }

}

function passaVez(){
  if (checaVez() === equipeum){
      equipeum.setVez(false);
      equipedois.setVez(true);
      Materialize.toast("Agora é a vez da equipe " +equipedois.getNome(), 3000) // 4000 is the duration of the toast

    } else if (checaVez() === equipedois){
      equipeum.setVez(true);
      equipedois.setVez(false);
      Materialize.toast("Agora é a vez da equipe " +equipeum.getNome(), 3000) // 4000 is the duration of the toast

    }
  }

function checaVez(){
    if(equipeum.getVez()){
      return equipeum;
    } else if(equipedois.getVez()){
      return equipedois;
    }
  }
