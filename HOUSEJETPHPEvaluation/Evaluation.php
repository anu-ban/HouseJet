<?php

echo "Math.php\r\n";
include('Tests/0_Math.php');
// our super secret extra assertions to evaluate your code
if ( file_exists('Evaluators/Math.php') ){
    include('Evaluators/Math.php');
}

echo "Strings.php\r\n";
include('Tests/1_Strings.php');
if ( file_exists('Evaluators/Strings.php') ){
    include('Evaluators/Strings.php');
}

echo "Arrays.php\r\n";
include('Tests/2_Arrays.php');

echo "Singleton.php\r\n";
include('Tests/3_Singleton.php');
if ( file_exists('Evaluators/Singleton.php') ){
    include('Evaluators/Singleton.php');
}

echo "BinaryPermissionSystem.php\r\n";
include('Tests/4_BinaryPermissionSystem.php');

echo "MethodChaining.php\r\n";
include('Tests/5_MethodChaining.php');

echo "MagicMethods.php\r\n";
include('Tests/6_MagicMethods.php');



