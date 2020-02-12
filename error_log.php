<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>
    <body>
        <?php
        function countDown($numb) {
            if($numb < 0 || $numb > 10){
                throw new Exception();
            }
        }
        try{
        countDown(11);
        }catch(Exception $e){
            echo("hier");
            error_log("The given number is out of bounds", 3, "error.log");
        }
        ?>
    </body>
</html>