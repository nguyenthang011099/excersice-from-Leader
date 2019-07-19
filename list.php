<?php
require('main.php');
class Link
{
    public function change()
    {
        $file = fopen("read.md", "r") or die ("unable");
        while (!feof($file)) {
            $result = fgets($file);
            $sign1 = "{";
            $sign2 = "}";
            if (preg_match('/[{]/', $result)) {
                $locate1 = strpos($result, $sign1);
                $locate2 = strpos($result, $sign2);
                echo $locate1;
                $head = substr($result, 0, $locate1);
                $tail = substr($result, $locate1, $locate2 - $locate1 - 1);
                if (preg_match('/,/', $tail)) {
                    $array = preg_split('/[,]/', $tail);
                    foreach ($array as $value) {
                        echo $head . $value;
                        echo "\n";
                    }
                } elseif (preg_match('/./', $tail)) {
                    $array = preg_split('/\.\.\./', $tail);
                    echo $array[2];
                    $j = 0;
                    for ($i = $array[$j]; $i <= $array[$j + 1]; $i++) {
                        echo $head . $i;
                        echo "\n";
                        $j + 1;
                        echo $j;
                    }
                } else {
                    echo $result;
                }

            }
        }
        fclose($file);
    }
}
