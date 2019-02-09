# Usage

`
$curl = new Curl('http://ya.ru');
echo $curl->getResponse();
`

or

`
$curl = new Curl();
$curl->setTargetUrl('http://ya.ru');
echo $curl->getResponse();
`