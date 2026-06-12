<?php 
class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //Métodos
    public function abrirConta() {

    }
    public function fecharConta() {

    }
    public function depositar() {

    }
    public function sacar() {

    }
    public function pagarMensal() {
        
    }
    //Métodos Especiais
    public function __construct()
    {
        
    }
    public function getnumConta() {
        return $this->numConta;
    }
    public function setnumConta($n) {
        $this->numConta = $n;
    }
    function getTipo() {
        
    }
    
}   

?>