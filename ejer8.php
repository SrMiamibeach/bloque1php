<!DOCTYPE html>
<html>

<head>
    <title>Priamide</title>
</head>

<body>
    <?php
    class Piramide
    {
        private $numLineas;

        public function __construct($lineas)
        {
            $this->numLineas = (int)$lineas;
            if ($this->numLineas != $lineas || $this->numLineas % 2 == 0) {
                throw new InvalidArgumentException("Error, no a intorducido un numero o a introducido un numero par");
            }
        }

        public function piramide()
        {
            $text = "*";
            $numEspacios = $this->numLineas - 1;
            for ($i = 0; $i < $this->numLineas; $i++) {
                $espacios = "";
                for ($j = 0; $j < $numEspacios; $j++) {
                    $espacios .= "&nbsp&nbsp";
                }
                echo $espacios . $text . "<br>";
                $text .= "**";
                $numEspacios -= 1;
            }
        }
    }
    try {
        $obj = new Piramide(100);
        $obj->piramide();
    } catch (InvalidArgumentException $e) {
        echo $e;
    }
    ?>
</body>

</html>