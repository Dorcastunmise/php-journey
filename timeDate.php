<?php
#---------Localtime zone-----------
# current time
$currentTime = time();
echo "{$currentTime} <br>";

#to convert a week into seconds
echo $currentTime + 5 * 24 * 60 * 60 ." <br>" ;

# to get time of previous day
echo $currentTime - 60 * 60 * 24 ." <br>";

/* date & time ... 
    g: 12hour format, 
    i: minutes
    a: pm or am in lower case */
echo date('m/d/Y g:ia') ." <br>";
echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24 ) ." <br>";
echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) ." <br>" ;
echo date_default_timezone_get() . "<br>". "<br>";

# -----------------UTC Timezone----------------
echo date_default_timezone_set('UTC');

echo date('m/d/Y g:ia') ." <br>";
echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24 ) ." <br>";
echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) ." <br>" ;
echo date_default_timezone_get() . "<br>";

# mktime() to get timestamp based on parameters passed
# 4th month, 10th day, present year(null)
echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null));
$date = date('m/d/Y g:ia', strtotime('2021-01-18 07:00:00'));
echo '<pre>';
print_r(date_parse_from_format('m/d/Y g:i:a', $date));
echo '<pre>';
