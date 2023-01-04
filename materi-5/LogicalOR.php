`<?php

// benar
var_dump(true or true); # bool(true)
var_dump(true or false); # bool(true)

// salah
var_dump(false or false); # bool(false)`