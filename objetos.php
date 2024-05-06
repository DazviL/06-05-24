<?php
class Jogo {
    public $nome;
    public $estilo;

    function __construct($nome, $estilo){
        $this->nome = $nome;
        $this->estilo = $estilo;
    }

    function get_nome(){
        return $this->nome;
    }

    function get_estilo(){
        return $this->estilo;
    }
}

$valorant = new Jogo("Valorant", "FPS(First Person Shotter)");

echo "O nome da jogo é: " . $valorant->get_nome();

echo "<br/>";

echo "O estilo do jogo é: " . $valorant->get_estilo();
?>