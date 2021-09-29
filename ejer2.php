<!DOCTYPE html>
<html>

<head>
    <title>Mayor</title>
</head>

<body>
    <?php
    class Mayor
    {
        private $n1, $n2, $n3;

        public function __construct($n1, $n2, $n3)
        {
            $this->n1 = (int)$n1;
            $this->n2 = (int)$n2;
            $this->n3 = (int)$n3;
            if ($this->n1 != $n1 || $this->n2 != $n2 || $this->n3 != $n3) {
                throw new InvalidArgumentException();
            }
        }

        public function mayorQue()
        {
            if ($this->n1 > $this->n2 && $this->n1 > $this->n3) {
                echo $this->n1 . " es mayo que " . $this->n2 . " y " . $this->n3;
            } else if ($this->n2 > $this->n1 && $this->n2 > $this->n3) {
                echo $this->n2 . " es mayo que " . $this->n1 . " y " . $this->n3;
            } else if ($this->n3 > $this->n1 && $this->n3 > $this->n2) {
                echo $this->n3 . " es mayo que " . $this->n1 . " y " . $this->n2;
            }
        }
    }
    try {
        $obj = new Mayor(1, 4, 7);
        $obj->mayorQue();
    } catch (InvalidArgumentException $e) {
        echo $e;
    }

    ?>
</body>

</html>