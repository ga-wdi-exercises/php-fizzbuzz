<?php

for($x = 1; $x <= 100; $x++){
  if($x % 15 == 0){
    $output = "Fizz";
  }else if($x % 3 == 0){
    $output = "Buzz";
  }else if($x % 5 == 0){
    $output = "FizzBuzz";
  }else{
    $output = $x;
  }
  file_put_contents("output.txt", $output . "\n", FILE_APPEND);
}

?>
