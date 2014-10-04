<?php 
$var1 = "some sample code";
echo "This is just $var1";
$var2 = "2.34";
echo "<br/>";
echo "Everything equals ".$var1." and ".$var2;
echo "<br/>";
$var3 = "3cm";
$var4 = "4cm";
$var5 = $var3 + $var4;
echo "var5 equals: ".$var5; # My first comment line in PHP
echo "<br/>";  
# My second comment line in PHP
/* Yet, another
comment line in PHP */
// How about this comment too
echo "Is var4 a string? ";
if (is_string($var4)) {
echo "...Yes!";
};
$var6 = (integer)$var2;
echo "<br/>";
echo "var6 = $var6 and var2 = $var2";
echo "<br/>";
$var7 = ($var3 == $var4);
if ($var7 == 1) {
     $var7 = "True";
     echo "var7 is now ".$var7;
} elseif ($var7 != 1) {
     $var7 = "False";
     echo "var7 is now ".$var7;
}
print ("<br/>");
print("Rock n Roll!");
print ("<br/>");
$var2_2 = 3.2;
$var7 = 20%(integer)$var2_2;  
echo "var7 modulus is now ".$var7;
echo "<br/>";
$var7 *= 20;
echo "var7 now equals ".(integer)$var7;
echo "<br/>";

// Examples using the ceil() function
echo "<br> Using ceil() function to round up a number <br>";
echo(".60 rounds to ".ceil(0.60)."<br />");
echo(".40 rounds to ".ceil(0.40)."<br />");
echo("5 rounds to ".ceil(5)."<br />");
echo("5.1 rounds to ".ceil(5.1)."<br />");
echo("-5.1 rounds to ".ceil(-5.1)."<br />");
echo("-5.9 rounds to ".ceil(-5.9));
echo "<br>";

#----------------------------------------
# This is a sample of a ternary operator
#----------------------------------------
$text = ($var2_2 == $var7) ? "I'm good for now" : "Well on second thought var7 equals ".$var7;
echo "<br>$text";
echo "<br/>";

#----------------------------------------
# This is a sample of an if operator
#----------------------------------------
echo "This is a sample of a if loop";
echo "<br/>";
$var8 = 12;
if ($var8 <= 10){
    echo "var8 is equal to ".$var8;
} elseif ($var8 > 20){
    echo "var8 is equal to a string of ".$var8;
} else {
    echo "var8 is something else ".$var8;
}

#----------------------------------------
# This is a sample of a while loop
#----------------------------------------
echo "<br/>";
echo "This is a sample of a while loop";
echo "<br/>";
$counter1 = 1;
while ($counter1<=3){
  echo "Counter1 equals: ".$counter1;
  echo "<br/>";
  $counter1++;
}

#----------------------------------------
# This is a sample of a for loop
#----------------------------------------
echo "This is a sample of a for loop";
echo "<br/>";
for ($counter2=1; $counter2<=81; $counter2 *= 3){
  echo "Counter2 equals: ".$counter2;
  echo "<br/>";
}
#----------------------------------------
# This is a sample using the \ character for a table
#----------------------------------------
echo "<br/>";
$display_prices = true;
if ($display_prices){
    echo "<table border=\"1\">\n";
    echo "<tr><td colspan=\"3\">";
    echo "today's prices in dollars ";
    echo "</td></tr>";
    echo "<tr><td>\$14.00</td><td>\$32.00</td><td>\$71.00</td><tr/>\n";
	echo "<tr><td colspan=\"3\">";
    echo "kinda pricey aren't they?";
    echo "</td></tr>";
    echo "</table>";
}
#----------------------------------------
# This is a sample function
#----------------------------------------
echo "<br/>";
$var3 = "Just Chill";
function funkytion($text){
echo "How 'bout that ".$text;
}
funkytion($var3);
echo "<br/>";

#----------------------------------------
# This is a sample function w/ global variable
#----------------------------------------
echo "<br/>";
$var3 = "Just Chill";
function funkytion2($text){
echo "How 'bout that ".$text;
global $var3;
global $var7;
echo "<br/>I am printing as a global variable equal to: ".$var3.", and this one too: ".$var7;
}
funkytion2($var3);
echo "<br/>";
#----------------------
# Second function
#----------------------
function albumtracker($artist, $album){
echo "Artist: ".$artist."<br/>"; 
echo "Album: ".$album."<br/>";
}
$guitarist = "Norman Brown";
$EP = "Just Chillin";
albumtracker($guitarist, $EP);
#----------------------
# Single Dimension Array
#----------------------
$thegoods1 = array("This", "is", "an", "array. ");
$thegoods1[] = "The end.";
echo "Here is an array: ".$thegoods1[0]." ".$thegoods1[1]." ".$thegoods1[2]." ".$thegoods1[3]." ".$thegoods1[4];
echo "<br/>";
#----------------------
# Multi-Dimensional Array
#----------------------
$thegoods2 = array(
                array (
				"Name" => "Brad", 
				"email" => "bradb@cimstrat.com"
				),
                 array (
				"Middle Name" => "Scott", 
				"address" => "Crystal Lake IL"
				)
             );
echo "Array element with address: ".$thegoods2 [1]['address'];
echo "<br/>";
#----------------------
# Simple Class with Method
#----------------------
 class firstClass {
    function Rewards() {
	echo "My first PHP class. Whooohoo!<br/>";
	}
}
$myObject1 = new firstClass(); 
$myObject1 -> Rewards();

#------------------------------------
# Class with $this pointer
#------------------------------------ 
class mySecondClass {
   public$name1 = "Brad"; //Whatever gets passed to the function will over write this string.
      function myOtherFunction($n) {
         $this -> name1 = $n;
		 echo "Using a 'this' pointer to show my name as: ".$this->name1;
	  }
}
$myObject = new mySecondClass();
echo $myObject->name1."<br/>";
$myObject -> myOtherFunction("Mama");
echo "<br/>".$myObject->name1;
echo "<br/>";
#------------------------------------
# Class with Methods, Inheritence, this pointer, and a Construct
#------------------------------------ 
 class myClass {
   public$name = "Brad";
      function myClass ($n) {
         $this -> name = $n;
	  }
	  function sayHello() {
	     echo "HELLO! My name is ".$this->name;
	  } 
  }
class childClass extends myClass {
    function sayHello() {
	    echo "I will not tell you my name.";
	}
} 
$object1 = new childClass("Dianne");
$object1 -> sayHello(); 

?>