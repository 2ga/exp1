<?php
for ($i=0; $i<100; $i++){
    if ($i % 3 == 0) echo "Fiz";
    if ($i % 5 == 0) echo "Buz";
    if ($i%3 !=0 && $i%5 != 0) echo $i;
    echo "<br />";
}
?>
</hr>