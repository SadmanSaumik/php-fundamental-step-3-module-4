<?php

//1. Write a PHP function to sort an array of strings by their length, in ascending order.

$sports = array( "Cricket", "Football", "Tenis" );

//=========Solution-1============

function mySort( $a, $b )
{

    if ( strlen( $a ) == strlen( $b ) ) {
        return 0;
    }

    return ( strlen( $a ) < strlen( $b ) ) ? -1 : 1;

}

//findStrnLength( $sports );
usort( $sports, "mySort" );
print_r( $sports );

//=========Solution-2============

function sortStringsByLength( $arr )
{
    usort( $arr, function ( $a, $b ) {
        return strlen( $a ) - strlen( $b );
    } );
    return $arr;
};
$sortedSports = sortStringsByLength( $sports );
print_r( $sortedSports );

//2. Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenateStringReverse( $str1, $str2 )
{
    $reverseStr2 = strrev( $str2 );
    return $str1 . $reverseStr2;
};

$str1   = "Hello";
$str2   = "world!";
$result = concatenateStringReverse( $str1, $str2 );
echo $result;
echo PHP_EOL;

//3. Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function removeFirstLast( $arr )
{
    array_shift( $arr );
    array_pop( $arr );
    return $arr;
};

$arr = [12, 45, 76, 89, 50];

print_r( removeFirstLast( $arr ) );

//4. Write a PHP function to check if a string contains only letters and whitespace.

function containsLettersWhitespace( $str )
{
    return preg_match( '/^[a-zA-Z\s]+$/', $str );
}

$str1 = " ";
$str2 = "Hello123 World";

if ( containsLettersWhitespace( $str1 ) ) {
    echo "String 1 contains only letters and whitespace.";
} else {
    echo "String 1 contains characters other than letters and whitespace.";
}

if ( containsLettersWhitespace( $str2 ) ) {
    echo "String 2 contains only letters and whitespace.";
} else {
    echo "String 2 contains characters other than letters and whitespace.";
}

//5. Write a PHP function to find the second largest number in an array of numbers.

$numbers = [3, 5, 65, 31, 99, 23, 45];

function findSecondLargestNumber( $arr )
{
    $largest    = $arr[0];
    $secLargest = $arr[0];
    foreach ( $arr as $number ) {
        if ( $number > $largest ) {
            $secLargest = $largest;
            $largest    = $number;
        } elseif ( $number > $secLargest && $number != $largest ) {
            $secLargest = $number;
        }

    }
    return $secLargest;
}

$secLargestNumber = findSecondLargestNumber( $numbers );
echo $secLargestNumber;
