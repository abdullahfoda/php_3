<?php

$day = "sun";

switch ($day) {

    
    case "sat" :
        echo "welcome we are on $day from 1 to 5";
       break;  

    case "sun" :
        echo "welcome we are on $day from 1 to 7<br>";
         break;

    case "fri" :
        echo "welcome we are on $day from 10 to 5";
        break;

        default :
        echo "unknown day";
        
    }
    

    echo "##########<br>";

    $i = 1;

    while ($i <= 3){

        echo "$i<br>";
       $i++;
    }
    

    echo "##########<br>";


    $a = 1;

    while ($a <= 3):

        echo "$a<br>";
       $a++;

    endwhile;   
    
    
    echo "##########<br>";



    $b = 0;
do {

echo"$b<br>";

$b++ ;

 } while($b >= 3) ;

 echo"##########<br>";



for($c=0;$c<=5;$c++){

echo"$c<br>";

}

echo"##########<br>";

$cities =["EG","USA","USE","KSA"];

echo' <pre> ';
print_r($cities);
echo' </pre> ';

foreach ($cities as $d)/*foreach($array name as  $value)*/{
    echo $d ."<br>";
}


echo"##########<br>";

$cities =["EG" => 50,"USA" => 30,"USE" => 20,"KSA" => 10];

echo' <pre> ';
print_r($cities);
echo' </pre> ';

foreach ($cities as $d => $f)/*foreach($array name as $key => $value)*/{
    echo "city name is $d and Discount is $f <br>";
}
echo"##########<br>";

$cities =["EG","USA","USE","KSA","SA","SY"];


foreach ($cities as $d)/*foreach($array name as  $value)*/{
    echo $d ."<br>";
    if($d == "USE" ){
    break;
}
}
echo"##########<br>";
foreach ($cities as $d)/*foreach($array name as  $value)*/{
    if($d == "USE" )
    break;

    echo $d ."<br>";

}
echo"##########<br>";
foreach ($cities as $d)/*foreach($array name as  $value)*/{
    if($d == "USE" )
continue ; //do skip for condition

    echo $d ."<br>";

}

echo"##########<br>";

include_once("test.php"); // if it finds error it not  dies it continue only

echo $a. "<br>";
$a=20;

echo"##########<br>";

// require("test.php");// if it finds error it dies stop everything

// echo $a. "<br>";

// echo"##########<br>";

include_once("test.php"); // if it finds error it not  dies it continue only + it checks if yoy did include before and get it's old value

echo $a. "<br>";

echo"##########<br>";


function say_hello_to($someone){
    echo "hello Mr '$someone' <br>";
}
say_hello_to("ali");
say_hello_to("ahmed");
say_hello_to("shady");

echo"##########<br>";

function say_helloo_to($someone,$sec_name){
    echo "hello Mr '$someone $sec_name' <br>";
}
say_helloo_to("ali","mohamed");

echo"##########<br>";

function fridge($item){
    if($item === "water")
    echo  "1.<br>";

    if($item === "pep")
    echo  "2.<br>";

    if($item === "cola")
    echo  "3.<br>";
}
fridge("water");
fridge("pep");
fridge("cola");

echo"##########<br>";


$prizes=["pc","iphone","XBOX","tv","lap"];

function get_numbers($num_1,$num_2){
    return $num_1 + $num_2;

}
echo $prizes [get_numbers(2,2)];


echo"##########<br>";

function get_data($name="secrit",$age="secrit",$address="secrit",$country="secrit"){

$line_1= "hello '$name 'your age is '$age'"; 

$line_2="you live in '$country' at '$address'";

return $line_1 . $line_2 ;

}

echo  get_data("ali",20,"gihan","mansoura");
echo"<br>";
echo  get_data(country:"mansoura");//specified


echo"<br>";

echo"##########<br>";

function calculate(){

    echo "number of arguments is" . func_num_args()."<br>" ;
    echo "argument index number 3 is". func_get_arg(0)."<br>";

    echo'<pre>';
    print_r(func_get_args());
    echo'</pre>';
    $result = 0;
    foreach(func_get_args() as $arg){
    $result += $arg;
}
echo $result;
}


calculate(10,20,40,50);

echo"<br>";
echo"##########<br>";

function calculates(...$nums)//...$variable => mean unkown num of elements you can write
    {echo'<pre>';
    print_r($nums);
    echo'</pre>';
    $results = 0;
    foreach($nums as $arg){
    $results += $arg;
}
echo $results;
}

calculates(100,200,400,500);

echo"<br>";
echo"##########<br>";


$group_of_skills=["css","html","js","php"];

function get_dataa($name,$country = "secret",...$skills){

    echo "hello $name your country is $country <br>";
    
   foreach($skills as $g) :
echo "$g <br>";

   endforeach;
}



    get_dataa("ali","EG",...$group_of_skills); // ... three dots doing unbaging for your array

    echo"##########<br>";

    // function  hellooo($person){
    //     return "hello $person";
    // }

    // $func2=" hellooo";

    // echo $func2("foda");   .................................???????

    function foda(){
        return "welcome";
    }
if (function_exists("foda")){
echo foda();}
else {
echo "not found";}

echo"##########<br>";

echo strlen("abdulla"); //strlen => string length

echo"<br>";
$func3= "strlen";

echo $func3("abdulla");


echo"##########<br>";


function adding(&$number)// &$ variable => passed by refrencec"make value of var change out also"
{
    $number += 5;
    return $number;
}
$n=15;
echo adding($n);
echo"<br>";
echo $n;
echo"<br>";

echo"##########<br>";

$say_hello = function () {
    return "hi" ;
};

echo $say_hello();

echo"<br>";

$say_hi = function($someone){
    return "hi $someone" ; 
};
echo $say_hi("foda");  


$table=[10,20,30,40,50];

function add_to_array($element){
    return $element + 5;
}

$nums_after_adding = array_map("add_to_array",$table);// array_map(call fun ,array name) => perform function to each element at array

echo '<pre>';
print_r($nums_after_adding);
echo '</pre>';

$nums_after_adding = array_map(function($itemm){return $itemm+10;},$table);// array_map(call fun ,array name) => perform function to each element at array

echo '<pre>';
print_r($nums_after_adding);
echo '</pre>';

echo"##########<br>";

$k=fn() => "hello"; //arrow function
echo $k();

echo"##########<br>";

$e="school";

echo" third letter is $e[2]<br>";
echo" last letter is $e[-1]<br>";
echo" last letter is {$e[strlen($e)-1] }  <br>";

echo"##########<br>";


$e[0]="A"; //update 
echo $e;
echo"<br>";
$e[6]="A";
echo $e."<br>";

echo"##########<br>";

echo lcfirst("Foda")."<br>";// lower case first
echo ucfirst("foda")."<br>";// upper case first
echo strtolower("FODA")."<br>";// string to lower
echo strtoupper("foda")."<br>";
echo ucwords("abdulla foda")."<br>";
echo str_repeat("foda",3);
echo "<br>";
echo"##########<br>";

$my_friendes = ["omar","ali","zyad","amr"];
echo implode(" ", $my_friendes) ."<br>";//array to strint
echo implode(", ",$my_friendes)."<br>";
echo implode("&",$my_friendes)."<br>";
echo implode($my_friendes)."<br>";

$my_goal ="every time is important";
echo '<pre>';
print_r(explode(" ",$my_goal));// string to array
echo '</pre>';



echo"##########<br>";

echo str_shuffle($my_goal)."<br>"; //  .=> call conctinate ,,,, str_shuffle => random replacement
echo strrev($my_goal)."<br> ";// string reverse

echo"##########<br>";

echo strlen("   hello   "). "<br>";
echo strlen(trim("   hello   "))."<br>";
echo trim("  #@ hello #@  ","# @" )."<br>" ;
echo rtrim(" #@  hello #@  ","# @" )."<br>" ;//right trim
echo ltrim(" #@  hello #@  ","# @" )."<br>" ;// left trim

echo"##########<br>";

echo chunk_split("foda school",2,"#");

echo'<pre>';
print_r(str_split("foda school"));
echo'</pre>';

echo'<pre>';
print_r(str_split("foda school",2));
echo'</pre>';

echo"<br>";

echo strip_tags("<h3>Hello<b>foda</b></h3>");//skip for all tags

echo"<br>";

echo strip_tags("<h3>Hello<b>foda</b></h3>","<b>");//skip for all tags ..... ,<tag> =>exception for this tag

echo"<br>";

echo("<h3> Hello <b> foda </b> </h3>");

echo"<br>";

echo nl2br("foda\nhigh\nschool",false);// new line to br (.....\n.....\n.....)
echo"<br>";

echo"##########<br>";

var_dump(strpos("hello foda","f"));// string position

echo"<br>";

var_dump(strrpos("hello foda","o"));//string right position => give you last one of defined

echo"<br>";

var_dump(stripos("hello foda","O"));//string i position => insensitive to upper or lower letters

echo"<br>";

var_dump(substr_count("hello foda","f"));// gives you num of letters like yours


echo"<br>";

echo"##########<br>";


parse_str("name=abdulla&email=foda@bn&os=windows",$query);

echo'<pre>';
print_r($query);
echo'</pre>';

echo $query["name"]. "<br>";
echo  $query["email"]. "<br>";
echo  $query["os"]. "<br>";


echo"##########<br>";

echo "Hello [] () * + .<br>";
echo quotemeta("Hello [] () * + .<br>");


echo"##########<br>";

echo str_pad("12",8,0,STR_PAD_BOTH) ."<br>";
echo str_pad("1234",8,0,STR_PAD_BOTH)."<br>";
echo str_pad("12345",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("123456",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("1234567",8,0,STR_PAD_LEFT)."<br>";

echo"##########<br>";


echo strtr("f@da web sch@@l","@","o");// string translate ("string ","from","to")

echo "<br>";

$translation =["@" => "o" , "#" => "b"]; 

echo strtr("f@da we# sch@@l",$translation);

echo "<br>";

echo"##########<br>";


echo str_replace("@","o","f@da high sch@@l")."<br>";// string replace ("find","replace","string")
echo str_replace(["@","#"],"o","f@d# high sch@@l")."<br>";// string replace ("find","replace","string")
echo str_replace(["@","#"],["o","a"],"f@d# high sch@@l")."<br>";// string replace ("find","replace","string")

echo '<pre>';
print_r(str_replace(["one","two"],[1,2],["one","two","three","four"]));
echo '</pre>';
echo '<pre>';
print_r(str_ireplace(["One","two"],[1,2],["one","two","three","four"]));// insensitive
echo '</pre>';


echo"##########<br>";


echo substr_replace("onetwo",2,2). "<br>";// ("string","replace with this",from index, length)
echo substr_replace("onetwo",1,2)."<br>";
echo substr_replace("onetwo",2,1)."<br>";
echo substr_replace("onetwo",2,-2)."<br>";
echo substr_replace("onetwo",2,2,2)."<br>";
echo substr_replace("onetwo",2,2,0)."<br>"; //when length = 0 => this mean insert not replace



echo"##########<br>";

$str="Welcome to Foda Web school very_very_long_word";

echo wordwrap($str,8,"<br>"); // wordWrap === like tab 
echo "<br>";
echo"##########<br>";
echo wordwrap($str,8,"<br>",true);//(str , limit of letters , long cut)
echo"<br>";
echo"##########<br>";

echo ord("a");

echo"<br>";

echo chr(97);

echo"<br>";

echo similar_text("fodaa","fouda",$percentage);

echo"<br>";

echo $percentage;

echo"<br>";
echo"##########<br>";

echo strstr("foda school","s")."<br>"; // give you words after required letter
echo strstr("foda school","s",true)."<br>";//give you words before required letter
echo stristr("foda school","S",true)."<br>";//give you words before required letter ..+..insensitive


echo"##########<br>";

echo 10_000_000 ;
echo"<br>";
echo number_format(10000000.12345);
echo"<br>";
echo number_format(10000000.12345,3);
echo"<br>";
echo number_format(10000000.12345,3,"#","@");
echo"<br>";

echo"##########<br>";
$frindes=["ali","ahmed","osama","omar"];
$contries=["eg"=>"egypt", "ksa"=>"saudi arabia","usa"=>"america"];




echo '<pre>';
print_r(array_chunk($frindes,2));
echo '</pre>';




echo '<pre>';
print_r(array_chunk($contries,2,true));
echo '</pre>';

echo '<pre>';
print_r(array_change_key_case($contries,CASE_UPPER));
echo '</pre>';

$keys=["A","B","O"];
$values=["ahmed","basel","omar"];

echo '<pre>';
print_r(array_combine($keys,$values));
echo '</pre>';

$letters=["A","B","A","c","B","d","A"];
echo '<pre>';
print_r(array_count_values($letters));
echo '</pre>';


echo"##########<br>";


echo '<pre>';
print_r(array_reverse($values,true));
echo '</pre>';

echo '<pre>';
print_r(array_flip($contries));
echo '</pre>';

echo"##########<br>";

$mode=["sad","happy","angry",["depressed","very sad"]];
echo count($mode,1);// count(var,count nested fun or not{0,1})
echo "<br>";

echo"##########<br>";
if(in_array("sad",$mode))
echo "it is found";

echo "<br>";
echo"##########<br>";

$num=["1",1,3,5];
if(in_array(1,$num,true))// check on type of var
echo "it is found";

echo "<br>";
echo"##########<br>";

$courses=["JS"=>100,"PHP"=>200,"HTML"=>400];

if(array_key_exists("PHP",$courses))
echo "the course is found and its price is".$courses["PHP"];

echo"##########<br>";

echo '<pre>';
print_r(array_keys($num));
echo '</pre>';

echo '<pre>';
print_r(array_keys($num,1,true));//true check type
echo '</pre>';

echo '<pre>';
print_r(array_values($contries));
echo '</pre>';

echo '<pre>';
print_r(array_pad($num,10,"#"));// make array to fill empty values
echo '</pre>';

echo '<pre>';
print_r(array_pad($num,-10,"#"));// fill before
echo '</pre>';

echo"##########<br>";

$product=[10,5,2,10];

echo array_product($product)."<br>";

$sum=[10,5,2,10];

echo array_sum($sum)."<br>";

echo"##########<br>";

$people=["omar","ali","foda","osama"];

echo current($people)."<br>";

echo next($people)."<br>";

echo current($people)."<br>";

echo next($people)."<br>";

echo prev($people)."<br>";

echo reset($people)."<br>";

echo end($people)."<br>";

echo"##########<br>";

$merge_one=["one"=>"php","two"=>"js","three"=>"css"];
$merge_two=["one"=>"html","four"=>"python"];

echo '<pre>';
print_r(array_merge($merge_one,$merge_two));
echo '</pre>';


$merge_three=[10=>"php",20=>"js",30=>"css"];
$merge_four=[40=>"html",10=>"python"];


echo '<pre>';
print_r(array_merge($merge_three,$merge_four));//do renumbering only
echo '</pre>';



echo '<pre>';
print_r(array_replace($merge_one,$merge_two));
echo '</pre>';


echo '<pre>';
print_r(array_replace($merge_three,$merge_four));// replace values 
echo '</pre>';

$letterss=["A","B","C","D"];

echo array_rand($letterss)."<br>";// give you random keys

echo $letterss[ array_rand($letterss)]."<br>";


echo '<pre>';
print_r(array_rand($letterss,3));// replace values 
echo '</pre>';


echo"##########<br>";


shuffle($letterss);// do shuffle first ,then print it

echo '<pre>';
print_r($letterss); //mix values randomly
echo '</pre>';

echo"##########<br>";

$lettersss=["A","B","C","D"];

echo array_shift($lettersss);

echo '<pre>';
print_r($lettersss); 
echo '</pre>';


echo array_pop($lettersss);

echo '<pre>';
print_r($lettersss); 
echo '</pre>';

array_push($lettersss,"x","y","Z");//add values at end

echo '<pre>';
print_r($lettersss); 
echo '</pre>';

$lettersss[] = 1;// fast way to add


echo '<pre>';
print_r($lettersss); 
echo '</pre>';

array_unshift($lettersss,"R","E","W");//add values at first
echo '<pre>';
print_r($lettersss); 
echo '</pre>';


echo"##########<br>";
$numss=[10,20,30,40,50,60];
$chars=["A"=>1,"B"=>2,"C"=>3];
$numeric=[10=>1,20=>2,30=>3];
$char=["A","B","C","D","E","F","G"];
echo '<pre>';
print_r(array_slice($char,2)); 
print_r(array_slice($char,2,3)); //(var,start index,length)
print_r(array_slice($chars,0,2)); 
print_r(array_slice($numeric,0,2,true)); 
print_r(array_splice($numss,2,2,[100,200])); // cut values and remove from main array + [] in that you can add new values
print_r($numss); 
echo '</pre>';


echo"##########<br>";

$peoples=["omar","ali","foda","osama"];

sort($peoples);

echo '<pre>';
print_r($peoples); 
echo '</pre>';

rsort($peoples);


echo '<pre>';
print_r($peoples); 
echo '</pre>';


asort($contries);// deal with assosciative array =>[key => value]


echo '<pre>';
print_r($contries); 
echo '</pre>';

arsort($contries);

echo '<pre>';
print_r($contries); 
echo '</pre>';




ksort($contries);// deal with (sort) keys not values

echo '<pre>';
print_r($contries); 
echo '</pre>';


krsort($contries);

echo '<pre>';
print_r($contries); 
echo '</pre>';

$files=["photo1.png","photo20.png","photo3.png"];

sort($_FILES);//sorting as computer not smart


echo '<pre>';
print_r($files); 
echo '</pre>';

natsort($files);// natural sorting like real person


echo '<pre>';
print_r($files); 
echo '</pre>';





?>