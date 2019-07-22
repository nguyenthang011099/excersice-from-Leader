<?php
require ("input.php");
class Link{

    public function takelink($a){
        $newarray=[];
        foreach ($a as $result) {
            if (preg_match_all('/\{.*?\}/', $result, $matches)) {
                $locate = strpos($result, "{");
                $head = substr($result, 0, $locate);

                foreach ($matches as $va1){
                    foreach ($va1 as $va2){
                        if(preg_match($va2,'/,/')){
                            //check dk {1,3,5}
                            $array=preg_split('/[,]/', $va2);
                            foreach ($array as $va4){
                                 $result= $head.$va4."\n";
                                 array_push($newarray,$result);
                            }
                        }
                        else {
                            //con lai la dk {2...5}
                            preg_match_all('!\d+!', $va2, $match);
                            foreach ($match as $va3)
                                for ($i = $va3[0]; $i <= $va3[1]; $i++) {
                                    $result= $head . $i."\n";
                                    array_push($newarray, $result);
                                }
                        }
                    }
                }

            }

    }
        return $newarray;
    }


}

