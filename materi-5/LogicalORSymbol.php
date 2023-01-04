`<?php

// benar
var_dump(true || true); # bool(true)
var_dump(true || false); # bool(true)

// salah
var_dump(false || false); # bool(false)`