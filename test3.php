<html>
<body>
<?php
for ($i=1; $i<101; $i++){
 if($i%10 == 4 || (40 <= $i && $i <= 49)) {
    echo "croak!croak!";
 }elseif($i%3 ==0 && $i%5 == 0){
    echo "Fizzbuzz";
 }elseif($i % 3 == 0){
    echo "Fizz";
 }elseif ($i % 5 == 0){
    echo "Buzz";
 }else{
    echo $i;
 }
 echo "<br>";
}
echo "<hr />";
?>
</body>
</html>