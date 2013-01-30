<html>
<body>
<?php
for ($i=1; $i<101; $i++){

if( $i%10 == 6 || ($i>=60 && $i<=69) ){
    echo "croak!croak!";
 }else{
    echo "FizzBuzz";
 }
 echo "<br>";
}
echo "<hr />";
?>
</body>
</html>