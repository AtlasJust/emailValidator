<!--chapter 3 pages 132 - 133 -->
!<Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <title> Email validator</title>
<head>
<body>
    <h1>Email validator</h1>
    <?php
        $EmailAddresses = array("john.smith@php.test", "mar.smith.mail.php.example", "john.jones@php.invalid", "alan.smithee@test", "mjones@example", "jane.a.doe@example.org");

        //defination of the validate address function 
        function validateAddress($Address){
            if(strpos($Address, '@')!== FALSE && strpos($Address, '.')!== FALSE){
                return TRUE;
            }
            else{
                return FALSE;
            }

        }//end of validate address
        foreach($EmailAddresses as $Address){
            if(validateAddress($Address)== FALSE){
                echo "<p>the email address <em>$Address</em> does not appear to be valid</p>\n";
            }
        }//end of foreach loopS
    ?>
</body>
</html>