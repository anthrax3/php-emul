<?php
assert(5+1 == 6);
assert(10/2 == 5);
assert(10 -2 == 8);
assert((12-3-7) * 4 == 8);
assert(49%2 == 1);
assert((49.0 === 49) === false);
assert(48.00 !== 48);
assert(48 == 48.0);
assert(49 != 48);
assert(4 < 5);
assert(5 > 4);
assert(4 <= 4 && 4 <= 5);
assert(5 >= 5 && 5 >= 4);
assert(true and true);
assert(!(true and false));
assert(true or false);
assert(!(false or false or false));
assert(false xor true);
assert(true && true);
assert(!(true && false));
assert(true || false);
assert(!(false || false || false));
assert(3 & 1);
assert(!(1 & 2));
assert(2 | 1);
assert(2 ^ 1);
assert(!(1^1));
assert(1 << 2 == 4);
assert(6 >> 1 == 3);
assert("." . "." == "..");
assert("a" . "b" != "aa");