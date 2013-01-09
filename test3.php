<?php
for ($i=0; $i<100; $i++)
{
    if ($i % 3 == 0) echo "<strong>Fiz</strong>";
    if ($i % 5 == 0) echo "<strong>Buz</strong>";
    if ($i%3 !=0 && $i%5 != 0) echo "<strong>{$i}</strong>";
    echo "<br />";
}
?>