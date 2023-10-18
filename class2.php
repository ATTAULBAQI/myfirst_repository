<?php

// $num = 20;
// $num2 = 30;
 
// if ($num === 50 || $num2 === 50 || ($num+$num2) === 50 )
// {echo 'true';}

// else {echo 'false';}


echo '<br>';



function checkno ($num3)
{
      if ($num3 >= 0) {
        return 'no. is positive';
      }
      else {
        return' no. is negative';
      }
}
 $number1 = 5;
 
  $result = checkno($number1);

  echo $result;


  echo '<br>';
  echo '<br>';


  function evenodd($num4)

  {
    if ($num4 % 2 == 0) {
      echo 'num is even';
    }
    else {
      echo ' num is odd';
    }
  }

  $number2 = 5;
  $answer = evenodd($number2);

  echo $answer;



  echo '<br>';
  echo '<br>';


  function multipleof3($num5)
      {
        if ($num5 % 3 == 0 ) {
          echo 'yess';
        }
        else {echo 'no'; 
       }
      }
  $number6 = 7;
    $jawab = multipleof3($number6 );
       
        echo $jawab ;


        echo '<br>';
        echo '<br>';



  function isleapyear($year)
    {
      if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "its a leap year";
      }
      else {
        return 'no its not a leap year';
      }   

    
    }
     $yearcheck = 2020 ;
     $btao = isleapyear($yearcheck);
     echo $btao;   






























// function checkNumber($number) {
//   if ($number > 0) {
//       return "Positive";
//   } elseif ($number < 0) {
//       return "Negative";
//   } else {
//       return "Zero";
//   }
// }

// // Example usage:
// $testNumber = -5;
// $result = checkNumber($testNumber);

// echo "The number $testNumber is $result.";


?>

