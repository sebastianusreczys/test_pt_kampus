<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "<br>";
        echo " $i = FooBar";
    } else if ($i % 3 == 0) {
        echo "<br>";
        echo " $i =Foo";
    } else if ($i % 5 == 0) {
        echo "<br>";
        echo " $i = Bar";
    } else {
        echo "";
    }
}
