<?php   
    echo '1. Print "Hello, World!" using PHP.<br>';
    echo "Hello, World!<br>";
    echo "==============================================================================<br>";
    echo '2. Declare variables for name, age, and city, then print them.<br>';
    $name = "Abd Alkareem";
    $age = 24;
    $city = "Amman";
    echo "Name : $name<br>" . "Age : $age<br>" . "City : $city<br>";
    echo "==============================================================================<br>";
    echo '3. Swap two numbers without using a third variable. <br>';
    $a = 10;
    $b = 20;
    echo "Before swapping: a = $a, b = $b <br>";
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "After swapping: a = $a, b = $b <br>";
    echo "==============================================================================<br>";
    echo '4. Find the sum of two numbers. <br>';
    $number1 = 5;
    $number2 = 8;
    $sum = $number1 + $number2;
    echo "$number1 + $number2 = $sum<br>";
    echo "==============================================================================<br>";
    echo '5. Find the product of two numbers.<br>';
    $number1 = 5;
    $number2 = 8;
    $Product = $number1 * $number2;
    echo "$number1 * $number2 = $Product<br>";
    echo "==============================================================================<br>";
    echo '6. Find the remainder when dividing two numbers. <br>';
    $number1 = 5;
    $number2 = 8;
    $remainder = $number1 % $number2;
    echo "$number1 % $number2 = $remainder<br>";
    echo "==============================================================================<br>";
    echo '7. Calculate the average of three numbers.<br>';
    $number1 = 5;
    $number2 = 8;
    $number3 = 10;
    $sum = $number1 + $number2 + $number3;
    $avg = $sum / 3;
    echo "Average = $avg<br>";
    echo "==============================================================================<br>";
    echo "8. Convert Celsius to Fahrenheit. <br>";
    $Celsius = -5;
    $Fahrenheit = ($Celsius * 9/5) + 32;
    echo "$Celsius Celsius = $Fahrenheit Fahrenheit<br>";
    echo "==============================================================================<br>";
    echo '9. Convert hours into minutes and seconds. <br>';
    $hours = 1;
    $minutes = ($hours * 60);
    $seconds = ($minutes * 60);
    echo "$hours Hours = $minutes minutes <br>" . "$hours Hours = $seconds Seconds <br>"; 
    echo "==============================================================================<br>";
    echo '10. Find the square and cube of a number.<br>';
    $number = 2;
    $square = pow($number,2);
    $cube = pow($number , 3);
    echo "Number : $number <br>" . "Square : $square <br>" . "Cube : $cube <br>";
    echo "==============================================================================<br>";
    echo '11. Check if a number is even or odd. <br>';
    $number = 10;
    echo "Number = $number <br>";
    if($number % 2 == 0)
        echo "Even Number <br>";
    else
        echo "Odd Number <br>";
    echo "==============================================================================<br>";
    echo '12. Check if a number is positive, negative, or zero. <br>';
    $number = -2;
    echo "Number = $number <br>";
    if($number > 0)
        echo "Positive Number <br>";
    elseif($number < 0)
        echo "Negative Number <br>";
    else
        echo "The Number is Zero <br>";
    echo "==============================================================================<br>";
    echo '13. Find the largest of three numbers. <br>';
    $number1 = 10;
    $number2 = 50;
    $number3 = 15;
    echo "Numbers : $number1 , $number2 , $number3 <br>";
    $largest = max($number1 , $number2 , $number3);
    echo "largest Number = $largest <br>";
    echo "==============================================================================<br>";
    echo "14. Check if a year is a leap year. <br>";
    $year = 2025;
    if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
        echo "$year is a leap year. <br>";
    } else {
        echo "$year is not a leap year.<br>";
    }
    echo "==============================================================================<br>";
    echo "15. Check if a person is eligible to vote (age ≥ 18).  <br>";
    $age = 18;
    echo "Age : $age <br>";
    if($age >= 18)
        echo "Person is Eligible to Vote <br>";
    else
        echo "Person is Not Eligible to Vote <br>";
    echo "==============================================================================<br>";
    echo "16. Print grade based on marks (A, B, C, F).  <br>";
    $mark = 100;
    echo "Mark : $mark <br>";
    if($mark >= 90 && $mark <= 100)
        echo "Grade : A <br>";
    elseif($mark >= 80 && $mark <= 70)
        echo "Grade : B <br>";
    elseif($mark >= 60 && $mark <= 50)
        echo "Grade : C <br>";
    elseif($mark <= 49)
        echo "Grade : F <br>";
    else
        echo "The Marks is Error <br>";
    echo "==============================================================================<br>";
    echo "17. Check if a character is a vowel or consonant. <br>";
    $vowel = "x";
    echo "Character : $vowel <br>";
    switch ($vowel) {
        case "a":
            echo "character is a Vowel <br>";
            break;
        case "e":
            echo "character is a Vowel <br>";
            break;
        case "i":
            echo "character is a Vowel <br>";
            break;
        case "o":
            echo "character is a Vowel <br>";
            break;
        case "u":
            echo "character is a Vowel <br>";
            break;
        default:
            echo "character is not a Vowel <br>";
            break;
    }
    echo "==============================================================================<br>";
    echo "18. Use a switch statement to print the day of the week. <br>";
    $day = "Friday";
    echo "Day : $day <br>";
    switch ($day) {
        case "Saturday":
            echo "Today is Saturday <br>";
            break;
        case "Sunday":
            echo "Today is Sunday <br>";
            break;
        case "Monday":
            echo "Today is Monday <br>";
            break;
        case "Tuesday":
            echo "Today is Tuesday <br>";
            break;
        case "Wednesday":
            echo "Today is Wednesday <br>";
            break;
        case "Thursday":
            echo "Today is Thursday <br>";
            break;
        case "Friday":
            echo "Today is Friday <br>";
            break;
        default:    
            echo "Error Day <br>";
            break;
    }
    echo "==============================================================================<br>";
    echo "19. Check if a number is divisible by 5 and 11. <br>";
    $number = 55;
    echo "Number : $number <br>";
    if($number % 5 == 0 && $number % 11 == 0)
        echo "$number is Divisible by 5 and 11 <br>";
    else
        echo "$number is Not Divisible by 5 and 11 <br>";
    echo "==============================================================================<br>";
    echo "20. Find the absolute value of a number. <br>";
    $number = -10;
    $absolute = abs($number);
    echo "Number : $number <br>" . "Absolute Value : $absolute <br>";
    echo "==============================================================================<br>";
    echo "21. Print numbers from 1 to 10. <br>";
    for($i = 1 ; $i <= 10 ; $i++)
        echo "$i , ";
    echo "<br>==============================================================================<br>";
    echo "22. Print even numbers between 1 and 50.  <br>";
    for($num = 1 ; $num <= 50 ; $num++){
        if($num % 2 == 0)
            echo "$num , ";
    }
    echo "<br>==============================================================================<br>";
    echo "24. Print the multiplication table of a given number. <br>";
    $number = 20;
    echo "Multiplication Table of : $number <br>";
    for($i = 1 ; $i <= 10 ; $i++){
        $result = $number * $i;
        echo "$number * $i = $result <br>";
    }
    echo "==============================================================================<br>";
    echo "25. Find the sum of first 100 natural numbers. <br>";
    $sum = 0;
    for($n = 1 ; $n <= 100 ; $n++){
        $sum = $sum + $n;
    }
    echo "Sum of first 100 natural numbers = $sum <br>";
    echo "==============================================================================<br>";
    echo "26. Find the factorial of a number. <br>";
    $number = 8;
    $factorial = 1;
    for($i = 1 ; $i <= $number ; $i++){
        $factorial = $factorial * $i;
    }
    echo "Factorial the :  $number = $factorial <br>";
    echo "==============================================================================<br>";
    echo "27. Print the Fibonacci series up to n terms. <br>";
    $n = 12;
    $t1 = 0;
    $t2 = 1;
    echo "Fibonacci Series up to :  $n terms: <br>";
    for ($i = 1; $i <= $n; ++$i) {
        echo $t1 . " , ";
        $nextTerm = $t1 + $t2;
        $t1 = $t2;
        $t2 = $nextTerm;
    }
    echo "<br>==============================================================================<br>";
    echo "28. Reverse a given number.  <br>";
    $number = 12345;
    $reversed = (int)strrev((string)$number);
    echo "Original Number = $number <br>";
    echo "Reversed Number = $reversed";
    echo "<br>==============================================================================<br>";
    echo "29. Count the number of digits in a number. <br>";
    $number = 123456789;
    $digits = strlen((string)abs($number));
    echo "Number of digits : $number = $digits";
    echo "<br>==============================================================================<br>";
    echo "30. Find the sum of digits of a number. <br>";
    $number = 123456789;
    $sum = 0;
    $temp = abs($number);   

    while ($temp > 0) {
        $digit = $temp % 10;   
        $sum += $digit;        
        $temp = (int)($temp / 10); 
    }

    echo "Sum of digits of $number = $sum";
    echo "<br>==============================================================================<br>";
    echo "31. Create an array of numbers and print them. <br>";
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach ($numbers as $num) {
        echo "$num , ";
    }
    echo "<br>==============================================================================<br>";
    echo "32. Find the maximum number in an array. <br>";
    $numbers = array(10,50,90,40,30,1,0,15);
     foreach ($numbers as $num) {
        echo "$num , ";
    }
    echo "<br> Maximum Number = " . max($numbers) . "<br>";
    echo "==============================================================================<br>";
    echo "33. Find the minimum number in an array. <br>";
    $numbers = array(10,50,90,40,30,1,0,15);
     foreach ($numbers as $num) {
        echo "$num , ";
    }
    echo "<br> Minimum Number = " . min($numbers) . "<br>";
    echo "==============================================================================<br>";
    echo "34. Find the sum of elements in an array. <br>";
    $sum = 0;
    $numbers = array(1,5,8,3,2);
    foreach ($numbers as $num) {
        echo "$num , ";
        $sum = $sum + $num;
    }
    echo "<br> Sum of Array= $sum <br>";
    echo "==============================================================================<br>";
    echo "35. Find the average of array elements. <br>";
    $sum = 0;
    $numbers = array(1,5,8,3,2);
    foreach ($numbers as $num) {
        echo "$num , ";
        $sum = $sum + $num;
        $avg = $sum / count($numbers);
    }
    echo "<br> Average of Array= $avg <br>";
    echo "==============================================================================<br>";
    echo "36. Count the number of even and odd elements in an array. <br>";
    $array = [1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9];
    $evenCount = 0;
    $oddCount = 0;
    foreach ($array as $num) {
        echo "$num , ";
        if($num % 2 == 0){
            $evenCount++;
        }
        else {
            $oddCount++;
        }    
    }
    echo "<br> Count Even Numbers = $evenCount <br>";
    echo "Count Odd Numbers = $oddCount <br>";
    echo "==============================================================================<br>";
    echo "37. Sort an array in ascending order. <br>";
    $numbers = array(5 , 2 , 8 , 1 , 4);
    echo "Array : ";
    foreach ($numbers as $num) {
        echo "$num , ";
    }
    sort($numbers);
    echo "<br> Sorted Array in Ascending Order: ";
    foreach ($numbers as $num) {
        echo "$num , ";
    }
    echo "<br>==============================================================================<br>";
    echo "38. Sort an array in descending order. <br>";
    $numbers = array(5 , 2 , 8 , 1 , 4);
    echo "Array : ";
    foreach ($numbers as $num) {
        echo "$num , ";
    }
    rsort($numbers);
    echo "<br> Sorted Array in Descending Order: ";
    foreach ($numbers as $num) {
        echo "$num , ";
    }
    echo "<br>==============================================================================<br>";
    echo "39. Search for an element in an array. <br>";
    $numbers = array(5 , 2 , 8 , 1 , 4);
    $search = 5;
    echo "Array : ";
    foreach ($numbers as $num) {
        echo "$num , ";
    }
    echo "<br> Search for : $search <br>";
    if(in_array($search , $numbers))
        echo "$search is Found in the Array <br>";
    else
        echo "$search is Not Found in the Array <br>";
    echo "==============================================================================<br>";
    echo "40. Remove duplicate elements from an array. <br>";
    $numbers = array(5 , 2 , 8 , 1 , 4 , 2 , 5 , 1);
    echo "Array : ";
    foreach ($numbers as $num) {
        echo "$num , ";
    }
    $uniqueNumbers = array_unique($numbers);
    echo "<br> Array after removing duplicates: ";
    foreach ($uniqueNumbers as $num) {
        echo "$num , ";
    }
    echo "<br>==============================================================================<br>";
    echo "41. Find the length of a string. <br>";
    $name = "Abd Alkareem";
    $length = strlen($name);
    echo "Name : $name <br>";
    echo "Length of Name : $length <br>";
    echo "==============================================================================<br>";
    echo "42. Count the number of vowels in a string. <br>";
    $string = "Hello, World";
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);
    echo "String : $string <br>";
    echo "Number of Vowels : $vowelCount <br>";
    echo "==============================================================================<br>";
    echo "43. Reverse a string without using built-in functions. <br>";
    $string = "Hello, World";
    $reversed = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }
    echo "String: $string <br>";
    echo "Reversed: $reversed <br>";
    echo "==============================================================================<br>";
    echo "44. Check if a string is a palindrome. <br>";
    $string = "abcba";
    $reversed = strrev($string);
    echo "String: $string <br>";
    if ($string === $reversed) {
        echo "$string is a palindrome.<br>";
    } else {
        echo "$string is not a palindrome.<br>";
    }
    echo "==============================================================================<br>";
    echo "45. Convert a string to uppercase and lowercase. <br>";
    $string = "AbD alkAreEM";
    $uppercase = strtoupper($string);
    $lowercase = strtolower($string);
    echo "String : $string <br>";
    echo "Uppercase : $uppercase <br>";
    echo "Lowercase : $lowercase <br>";
    echo "==============================================================================<br>";
    echo "46. Replace all spaces in a string with underscores. <br>";
    $string = "Abd Alkareem Mohammad";
    $modifiedString = str_replace(' ', '_', $string);
    echo "String: $string <br>";
    echo "Modified : $modifiedString <br>";
    echo "==============================================================================<br>";
    echo "47. Count the number of words in a string. <br";
    $string = "Abd Alkareem Mohammad Ali";
    $wordCount = str_word_count($string);
    echo "String: $string <br>";
    echo "Number of words: $wordCount <br>";
    echo "==============================================================================<br>";
    echo "48. Find the first occurrence of a word in a string. <br>";
    $string = "Hello, welcome to the world of PHP. PHP is a popular scripting language.";
    $word = "PHP";
    $position = strpos($string, $word);
    echo "String: $string <br>";
    echo "Word to find: $word <br>";
    if ($position !== false) {
        echo "The first occurrence of '$word' is at position: $position <br>";
    } else {
        echo "'$word' not found in the string. <br>";
    }
        echo "==============================================================================<br>";
        echo "49. Concatenate two strings. <br>";
        $string1 = "Abd- ";
        $string2 = "Alkareem";
        $concatenated = $string1 . $string2;
        echo "String 1: $string1 <br>";
        echo "String 2: $string2 <br>";
        echo "Concatenated String: $concatenated <br>";
        echo "==============================================================================<br>";
        echo "50. Check if a string contains a specific substring. <br>";
        $string = "Hello, welcome to the world of PHP.";
        $substring = "PHP";
        echo "String: $string <br>";

        echo "Substring to find: $substring <br>";
        if (strpos($string, $substring) !== false) {
            echo "The string contains the substring '$substring'. <br>";
        } else {
            echo "The string does not contain the substring '$substring'. <br>";
        }
?>
