<?php

class Musica {
    public $titulo;
    public $artista;
    public $duracao;

    public function __construct($titulo, $artista, $duracao){
        $this->titulo = $titulo;
        $this->artista = $artista;
        $this->duracao = $duracao;
    }

    public function obterDescricao(){
        return "A música '$this->titulo' é interpretada por '$this->artista' e tem '$this->duracao' minutos de duração.";
    }
}

$minhaMusica = new Musica("Paquetá", "Los Hermanos", 3.00);

echo $minhaMusica->obterDescricao();

?>