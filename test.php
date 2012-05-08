<?php
require_once 'REDISKO.php';
echo 'Setting variable rrr_test'.PHP_EOL;
REDIS::set('rrr_test',222);
echo 'Getting variable rr4r_test :';
echo REDIS::get('rr4r_test');
echo PHP_EOL;
echo 'Increasing variable rrr_test :';
echo REDIS::incr('rr4r_test');
echo PHP_EOL;

echo 'Multiget variable rrr_test and  rr4r_test:';
print_r(REDIS::mget('rr4r_test','rrr_test'));
echo PHP_EOL;

print_r(REDIS::s());
