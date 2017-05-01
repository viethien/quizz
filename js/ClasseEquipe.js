class Equipe {
    constructor(nome, pontos, vez, acertos, erros, desafios) {
        this.nome = nome;
        this.pontos = 0;
        this.vez = false;
        this.acertos = 0;
        this.erros = 0;
        this.desafios = 0;

    }



  getVez(){
     return this.vez;
   }

  getNome() {
    return this.nome;
   }


  getPontos() {
    return this.pontos;
   }

  getErros(){
    return this.erros;
   }


  getAcertos(){
    return this.acertos;
   }

  getDesafios(){
    return this.desafios;
   }

  setVez(novavez){
       this.vez = novavez;
   }
  acertar(pergunta){
    this.pontos = this.pontos + pergunta;
    this.acertos++;
  }
  pagarDesafio (pergunta){
    this.desafios++;
    this.pontos = this.pontos + pergunta;
  }
  errar(){
    this.erros++;
  }
}
