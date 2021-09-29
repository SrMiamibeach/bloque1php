<!DOCTYPE html>
<html>

<head>
    <title>tresXMasUno</title>
</head>

<body>
    <?php
    class tresXMasUno
    {
        private $numInicial;
        public function __construct($num)
        {
            $this->numInicial = (int)$num; 
        }
        public function operacion()
        {
            $result = $this->numInicial;
            echo $result."<br>"; 
            while($result!=1)
            {
                if($result%2==0){
                    $result/=2;
                    echo $result."<br>";
                }else{
                    $result = ($result*3)+1;
                    echo $result."<br>";
                }
            }
        }
    }
    $obj = new tresXMasUno(17);
    $obj->operacion();
    ?>
</body>

</html>