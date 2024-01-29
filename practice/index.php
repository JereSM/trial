<h2>Iterando un JSON</h2>
<?php
$json = file_get_contents("https://jsonplaceholder.typicode.com/users");
$obj = json_decode($json, true);

foreach ($obj as $element) {
    foreach ($element as $key => $value) {
        if(is_array($value)){
            foreach ($value as $key1 => $value1) {
                if(is_array($value1)){
                    foreach ($value1 as $key2 => $value2) {
                        echo "___________ $key2 = $value2 <br>";    
                    }
                }else{
                    echo "* * * $key1 = $value1 <br>";
                }
            }
        }else{
            echo "$key = $value <br>";
        }
    }    
    echo "<hr>";
}

?>