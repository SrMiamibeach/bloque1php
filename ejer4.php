<!DOCTYPE html>
<html>

<head>
    <title>Palindroma</title>
</head>

<body>
    <?php
    class Palindroma
    {
        private $word;

        public function __construct($data)
        {
            $this->word = (string)$data;
            if ($this->word != $data) {
                throw new InvalidArgumentException();
            }
        }

        public function esPalindroma()
        {
            $lowerWord = strtolower($this->word);
            $lowerWord = preg_replace('/\s/', '', $lowerWord); //str_replace(' ', '', $lowerWord)
            $reverseWord = strrev($lowerWord);
            if ($reverseWord == $lowerWord) {
                echo $this->word . " es palindroma";
            } else {
                echo $this->word . " no es palindroma";
            }
        }
    }
    try {
        $obj = new Palindroma("Se verlas al reves");
        $obj->esPalindroma();
    } catch (InvalidArgumentException $e) {
        echo $e;
    }
    ?>
</body>

</html>