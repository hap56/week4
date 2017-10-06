<?php
$obj = new main();
class main
{
public function __construct()
{
  echo "<u><h1><i> Week 4 </h1></u></i>"."<br>";
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
 print_r($year);
  echo "<br>";

  functions::char_replace($date); 
  functions::str_comp($date,$tar);
  functions::search_position(str_replace("-","/",$date));
  functions::strcount($date);
  functions::strlen($date);
  functions::ascii_value($date);
  functions::Lastchar($date);
  functions::separator(str_replace("-","/",$date));
  functions::leap_year($year);
}
}
class functions
{       
  //character replacement
  public function char_replace($date)
   {
    echo "<h3><u> string replacement of charcacter “-“ in $date with “/“ </h3></u>";
    echo str_replace("-","/",$date);
    echo "<br><hr>";
   }

    //string comparision
    public function str_comp($date,$tar)
    {
     echo "<h3><u> Using if else to compare $tar and $date strings </h2></u>";
     $result = strcmp($date,$tar);
     if($result>0)
     echo "the Future";
      else if($result<0)
      echo "the Past";
       else
        echo "OOPS";
        echo "<br><hr>";
    }
    
     //finding positions
    public function search_position($date)
    {
     echo "<h3><u> Printing out all positions of “/“ of $date </h2></u>";    
     for($i=0; $i<substr_count($date,"/");$i++)
      {
       $a=$a+1;
       $a=stripos($date,"/",$a);
        echo "/ is present at: ". $a."<br>"  ;
      }
         echo "<hr>";
    } //counting the number of words in a string
    public function strcount($date)
    {
    echo "<h3><u> Word count of string  $date </h3></u>";  
    $strcount=str_word_count($date);
    echo $strcount;
    echo "<hr>";
        } 
     //returning the string length
    public function strlen($date)
     {
      echo "<h3><u>  length of a string of $date </h2></u>";
      $a=strlen($date);
      echo $a;
      echo "<hr>";
     }
     //finding ascii value
    public function ascii_value($date)
     {
      echo "<h3><u> Returning the ASCII value of the first character of a string </h3></u>";
      echo ord($date);
      echo "<hr>";
     }
      //print last two characters in a string
    public function Lastchar($date)
     {
      echo "<h3><u> Returning the last two characters of string $date </h3></u>";
       $array=str_split($date);
       $a=count($array);
       for($i=0;$i<2;$i++)
        {
         $a=$a-1;
         echo $array[$a];
        }
        echo "<br><hr>";
     }
       //string breaking into array
    public function separator($date)
     {
      echo "<h3><u> Breaking string  $date into an array using separator parameter as / and using space instead of / </h3></u>";  
      $array=(explode("/",($date)));
      $a=count($array);
      for($i=0;$i<$a;$i++)
       {
        echo $array[$i]." ";
       }
        echo "<br><hr>";
     }
       //finding leap year
    public function leap_year($year)
     {
      echo "<h3><u> Identifying a leap year </h2></u>";
      foreach($year as $value)
       {
        for($i=0;$i<1;$i++)
         {
          switch(value)
           {
            case(($value%4)==0 and ($value%100)!=0 or ($value%400)==0);
            echo $value." = ". "True"."<br>";
             break;
              default:
              echo $value." = "."False"."<br>";
            }
         }
        }
       }

     }

?>