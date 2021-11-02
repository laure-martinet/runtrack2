<?php
for ($nombre=1; $nombre<=100; $nombre++)
{ 
    if ($nombre % 3 == 0 && $nombre % 5 ==0)
    {
        echo ($nombre . 'FizzBuzz<br>');
    }
    elseif ($nombre%5==0)
    {
        echo ($nombre . 'Buzz<br>');
    }
    elseif ($nombre % 3 == 0)
    {
        echo ($nombre . 'Fizz<br>');
    }
}
?>