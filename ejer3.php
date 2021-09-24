<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    class RangoEdad
    {
        private $edad;

        public function __construct($edad)
        {
            $this->edad = $edad;

        }

        public function mayorQue()
        {
            $true = true;
            $cont = 0;
            while($true){
                if($cont < $this->edad){
                    $cont+=10;
                }else{
                    $cont-=10;
                    $true = false;
                }
            }
            echo $this->edad." se encuentra entre ".$cont." y ".$cont+10 ." años";
            
        }
    }
    try
    {
        $obj = new RangoEdad(57);
        $obj -> mayorQue();
    }catch(Exception $e)
    {   
        echo $e;
    }

    ?>
</body>

</html>