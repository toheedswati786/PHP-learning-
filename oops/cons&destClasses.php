<?php

class person{

    public function __construct(array $data)
    {
        $arraySize = sizeof($data);
        for($i = 0; $i< $arraySize; $i++){
            echo $data[$i];
            echo PHP_EOL;
        }
        return $this;
        }

        //we can't parse any array to the destruct funciton this is just for showing that how the code actulally work
        public function __destruct(array $data)
        {
            $arraySize = sizeof($data);
            for($i = 0; $i< $arraySize; $i++){
                $data[$i] = null;
            }
            echo "Everything clearred";
    }

}
$data = array("Eric", 'Smith', 'brown');
$data = new person($data);