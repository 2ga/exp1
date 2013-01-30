<html>
<body>
<?php
for ($i=1; $i<101; $i++){
 if($i%10==7 || (70 <= $i && $i <= 71)){
 echo "croak!croak!";
 }else{
    echo $i;
 }
 echo "<br>";
}
echo "<hr />";
?>
</body>
</html>