<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php
    class Parque
    {
        private $edad, $altura, $acompañado;
        public function __construct($edad, $altura, $acompañado)
        {
            $this->edad = $edad;
            $this->altura = $altura;
            $this->acompañado = $acompañado;
        }
        public function puedeSubir()
        {
            if($this->acompañado){
                if( $this->edad >= 6){
                    echo "Puede entrar";
                }else{
                    echo "No puede entrar";
                }
            }else{
                if( $this->edad >= 10 || $this->altura >= 120){
                    echo "Puede entrar";
                }else{
                    echo "No puede entrar";
                }
            }
        }
    }
    $obj = new Parque("6",120,false);
    $obj->puedeSubir();
    ?>
</body>

</html>