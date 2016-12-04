<?php

echo '<pre>';
for ($i = 0;$i <= 100;$i++) {
    if ($i > 0 && ($i % 3 == 0 || $i % 5 == 0)) {
        echo '<div>';
        echo ($i % 3 == 0) ? 'Fizz' : '';
        echo ($i % 5 == 0) ? 'Buzz' : '';
        echo '</div>';
    } else {
        echo '<div>', $i, '</div>';
    }
}
echo '</pre>';
