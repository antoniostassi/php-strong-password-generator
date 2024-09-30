<?php

    include __DIR__.'/generation.php';
    function generatePassword($pswLength, $generationChar) {
        $generatedPassword = '';
        for($k = 0; $k < $pswLength; $k++) {
            
            $charList = getRandomNumber(count($generationChar) - 1);
            //var_dump("Selecting from generationChar[".$charList."]");

            $count = count($generationChar[$charList]) - 1;
            //var_dump("The characters available are: ".$count);

            $charListMax = getRandomNumber($count);
            //var_dump("Get the character at position [".$charListMax."]");

            $generatedPassword .= $generationChar[$charList][$charListMax];
            //var_dump(Generated character: $generationChar[$charList][$charListMax]);

        }
        var_dump($generatedPassword);
        return $generatedPassword;
    };

    function getRandomNumber($maxNumber) {
        return rand(0,$maxNumber);
    };

    echo "Password generata: ".generatePassword(12, $generationChar);
    

?>