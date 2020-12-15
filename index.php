<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include 'primeNumbers.php'; ?>
    </head>
    <body>
        <h1>Prime numbers between 1 and 1000</h1>
        <textarea rows="20" cols="30" id="primeRes"><?php
            $prime = new PrimeNumbers();
            $prime->searchPrime();
                       
        ?>
        </textarea>
    </body>
</html>
