<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    class Mayor
    {
        private $n1, $n2,$n3;

        public function __construct($n1,$n2,$n3)
        {
            $this->n1 = $n1;
            $this->n2 = $n2;
            $this->n3 = $n3;
        }

        public function mayorQue()
        {
            if($this->n1 > $this->n2 && $this->n1 > $this->n3){
                echo $this->n1." es mayo que ".$this->n2." y ".$this->n3;
            }else if($this->n2 > $this->n1 && $this->n2 > $this->n3){
                echo $this->n2." es mayo que ".$this->n1." y ".$this->n3;
            }else if($this->n3 > $this->n1 && $this->n3 > $this->n2){
                echo $this->n3." es mayo que ".$this->n1." y ".$this->n2;
            }
        }
    }
    $obj = new Mayor(1,4,7);
    $obj -> mayorQue();
    ?>
</body>

</html>