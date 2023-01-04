<?php

// benar
var_dump(123 !== 456); # bool(true)
var_dump(123 !== "123"); # bool(true)

// salah
var_dump(123 !== 123); # bool(false)