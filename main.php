<?php
// string formula 
// 1 this formula  is use for string length
//$x = "kishan";
//echo strlen($x);
// 2 in this formula given us word  in string
//$y = "kishan";
//echo str_word_count($y);
// 3 formula is use for reverse string
//$x = "kishan";
//echo strrev($x);
//4 formula is use for searching text in string

//$y = "kihan";
//echo strpos($y,'h');

// 5 formula is use for replacing in string
//$y = "kishan";
//echo str_replace("h","k",$y);



// this topic about data type

// 1 string type 
//$x = "kishan";
//echo $x;
// 2 integer type
//$x = 567;
//echo $x;
// 3 check type of data type and more information
//$x = 12;
//$y = "string";
//$z = 12.6;
//$a = array("strin",45,56.9 ,true, array(5,8.8,'jaat', false));
//echo var_dump($x,$y,$z,$a);
// 4 formula is used for float
//$x = 54.8;
//echo var_dump($x);
// 5 formula is used for boolean
//$x = true;
//$y = "true";
//echo var_dump($x, $y);
// 6 formula is use for array 
//$x = array(2,array("str",array(true ,array(45.5 ,array("hh")))));
//echo var_dump($x);


// 7 public keyword and objecty in php
// class publi {
//   public $name;
//   public $age;
//   public function __construct($name,$age){
//     $this->name = $name;
//     $this->age = $age;
//   }
//   public function detail() {
//     return "my name is " . $this->name . " \n and my age is " . $this->age;
//   }
// }
// $userdetails = new publi("kishan", 20);
// echo $userdetails -> detail();
// echo "\n" ;
// $userdetails = new publi("ankit", 21);
// echo $userdetails -> detail();

// 8 null type
//$x = null;
//echo var_dump($x);


// math topiov in php

// 1 pi formula
//$x = pi();
//echo $x;
// 2 formula based on min and max value
//min()
//$x = array(23,56,"-400",-400);
//echo var_dump(min($x));
//max()
//$x = array("3",1.0,"k",1);
//echo var_dump($x);
//echo "the value is ". max($x);

// 3 formula abs () is based on absolute postive value
//$x = -67;
//echo abs($x);
// 4 formula based on sqrt() value
//$x = 25;
//echo sqrt($x);
// 5 is used for nearest number in float value
//$x = 0.99;
//$y =0.49;
//$z = 1.99;
//$a = 4;
/*echo round($x);
echo "\n";
  echo round($y);
echo"\n";
echo round($z);
echo"\n";
echo round($a);*/

// 6 formula is use for random number
//echo rand(1000, 1200);

// 7 constant in php 

//define('kishan',"welcome to jind",true);

//echo kishAn;
//function x(){
  //echo "\n hello everyone ".kishan;
//}
//x();

// topic on array
//1  create array
//$x = array("k","h");
//echo $x[0];
// 2 use for counting array value

//$x = array(65,87,8);
//echo count($x);

// 3 use array index value with help loop

//$x = array(23,4,5,6,754,54,67);
//$y = count($x);

//for($i = 0; $i < $y; $i++){
 // echo $x[$i];
  //echo "\n";
//}

// 4 formula based on associative
//$x = array("Peter"=>'kishan', "Ben"=>"37", "Joe"=>"43");

//echo "Peter is " . $x['Peter'] . " years old.";

// 5 miltype arrays with loop

$x = array(array("kishan",20,true),array("ankit",23,false));
for($i =0;$i< 3; $i++){
  for($z = 0; $z < 3; $z++){
    echo $x[$i][$z];
    echo "\n";
  }
}

// ****** this topic on boolean check for case-sensteve ******

//$x1 = true;
//$x2 = True;
//$x3 =  TRUE;
  
//echo  var_dump($x1);
//echo  var_dump($x2);
//echo  var_dump($x3);
?>