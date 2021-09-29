<!DOCTYPE html>
<html>

<head>
    <title>Comision</title>
</head>

<body>
    <?php
    class Tienda
    {
        private $totalCompra;
        private $tipoCompra;

        public function __construct($compra, $tipo)
        {
            $this->totalCompra = (int)$compra;
            $this->tipoCompra = strtolower($tipo);
            if ($this->totalCompra != $compra) {
                throw new InvalidArgumentException("Error, no ha metiddo numeros");
            }
            if ($this->tipoCompra != "mascota" && $this->tipoCompra != "ropa") {
                throw new InvalidArgumentException("Error, ha metido un tipo de compra invalido");
            }
        }
        public function realizarCompra()
        {
            $coste = $this->totalCompra;
            $gastosEnvio = $this->gastosEnvio();
            $factura = "";
            if ($gastosEnvio == null) {
                return "El pedido no llega al minimo para enviarlo";
            } elseif ($gastosEnvio == 1) {
                $factura .= "Los gastos de envio son gratis <br>";
            } else {
                $factura .= "Los gastos de envio son: " . $gastosEnvio . " <br>";
            }

            if ($this->tipoCompra == "mascota") {
                $coste = $this->totalCompra * 1.1;
                $factura .= "Importe (con Iva): " . $coste . "<br>";
            } elseif ($this->tipoCompra == "ropa") {
                $coste = $this->totalCompra * 1.21;
                $factura .= "Importe (con Iva): " . $coste . "<br>";
            }
            $coste += $gastosEnvio;
            $factura .= "-----------------------<br>";
            $factura .= "Total a pagar: " . $coste;
            return $factura;
        }
        private  function gastosEnvio()
        {
            if ($this->totalCompra < 19) {
                if ($this->tipoCompra == "mascota") {
                    return null;
                } else {
                    return 9;
                }
            } elseif ($this->totalCompra >= 19 && $this->totalCompra < 40) {
                return 9;
            } elseif ($this->totalCompra >= 40 && $this->totalCompra < 80) {
                return 4;
            } else {
                return 1;
            }
        }
    }
    try {
        $obj = new Tienda(80, "mascota");
        echo $obj->realizarCompra();
    } catch (InvalidArgumentException $e) {
        echo $e;
    }
    ?>
</body>

</html>