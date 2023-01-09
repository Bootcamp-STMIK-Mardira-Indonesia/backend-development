<?php
function newfunc(): iterable
{
    $arr = [1,2,3];
    yield from $arr;
    yield 4;
    yield 5;

}

foreach (newfunc() as $number) {
    echo $number;
}
// var_dump(is_iterable($ret));
