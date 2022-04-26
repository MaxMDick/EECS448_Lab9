<?php
    $q1 = $_GET['q1'];
    $q2 = $_GET['q2'];
    $q3 = $_GET['q3'];
    $q4 = $_GET['q4'];
    $q5 = $_GET['q5'];
    $guessArr = array($q1, $q2, $q3, $q4, $q5);
    $correctArr = array('Two', 'Blue', 'A', 'Dog', 'Three');
    $totalCorrect = 0;
    for($i=0; $i<5; $i++)
    {
        if($guessArr[$i] == $correctArr[$i])
        {
            $totalCorrect++;
        }
    }
    $score = ($totalCorrect / 5) * 100;


    echo '<h1>Quiz Results</h1>';

    echo 'Q1: Which number is even?<br>';
    echo 'You answered: '.$guessArr[0].'<br>';
    echo 'Correct answer: '.$correctArr[0].'<br>';

    echo '<br>Q2: Which color is primary?<br>';
    echo 'You answered: '.$guessArr[1].'<br>';
    echo 'Correct answer: '.$correctArr[1].'<br>';

    echo '<br>Q3: Which letter is a vowel?<br>';
    echo 'You answered: '.$guessArr[2].'<br>';
    echo 'Correct answer: '.$correctArr[2].'<br>';

    echo '<br>Q4: Which animal is a mammal?<br>';
    echo 'You answered: '.$guessArr[3].'<br>';
    echo 'Correct answer: '.$correctArr[3].'<br>';

    echo '<br>Q5: How many feet are in a yard?<br>';
    echo 'You answered: '.$guessArr[4].'<br>';
    echo 'Correct answer: '.$correctArr[4].'<br>';

    echo '<br>Total correct: '.$totalCorrect.'<br>';
    echo 'Score: '.$score.'%';
?>