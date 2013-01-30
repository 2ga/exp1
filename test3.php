<html>
<body>
<?php
for ($i=1; $i<101; $i++){
 if($i%10==8 || ($i<90 && $i>=80)){
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