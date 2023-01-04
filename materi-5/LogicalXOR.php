<?php

// benar
var_dump(true xor false); # bool(true)

// salah
var_dump(true xor true); # bool(false)
var_dump(false xor false); # bool(false)