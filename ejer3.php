<!DOCTYPE html>
<html>

<head>
    <title>RangoEdad</title>
</head>

<body>
    <?php
    class RangoEdad
    {
        private $edad;

        public function __construct($edad)
        {
            $this->edad = (int)$edad;
            if ($this->edad != $edad) {
                throw new InvalidArgumentException();
            }
        }

        public function mayorQue()
        {
            $true = true;
            $cont = 0;
            while ($true) {
                if ($cont < $this->edad) {
                    $cont += 10;
                } else {
                    $cont -= 10;
                    $true = false;
                }
            }
            echo $this->edad . " se encuentra entre " . $cont . " y " . $cont + 10 . " años";
        }
    }
    try {
        $obj = new RangoEdad(57);
        $obj->mayorQue();
    } catch (InvalidArgumentException $e) {
        echo $e;
    }

    ?>
</body>

</html>