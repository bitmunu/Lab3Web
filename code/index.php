#task 1.1
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a.{2}b/u';
$matches = array();
$result = preg_match_all($regexp, $str, $matches);
var_dump($matches);

#task 1.2
$matches2 = array();
$str2 = 'a1b2c3';
$regexp2 = '/[0-9]+/u';

$result2 = preg_replace_callback($regexp2,
    function ($matches2) {
        return pow((int)$matches2[0], 3);
    },
    $str2);
echo $result2;
