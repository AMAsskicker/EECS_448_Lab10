<?php
// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

$name = $_POST["name"];
$email = $_POST["email"];
$ans_q1 = $_POST["q1"];
$ans_q2 = $_POST["q2"];
$ans_q3 = $_POST["q3"];
$ans_q4 = $_POST["q4"];
$ans_q5 = $_POST["q5"];
$score = 0;

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br><br>";

echo "Question 1: What is the color of the sky? <br>";
echo "Correct Answer: Blue <br>";
echo "Your Answer: " . $ans_q1 . "<br><br>";
if ($ans_q1 == "blue") {
  $score++;
}

echo "Question 2: Does pineapple belong on pizza? <br>";
echo "Correct Answer: Who cares, eat what you like! <br>";
echo "Your Answer: " . $ans_q2 . "<br><br>";
if ($ans_q2 == "Who cares, eat what you like!") {
  $score++;
}

echo "Question 3: How fast does a fly fly? <br>";
echo "Correct Answer: 5 MPH <br>";
echo "Your Answer: " . $ans_q3 . "<br><br>";
if ($ans_q3 == "5 MPH") {
  $score++;
}

echo "Question 4: e^0 = ? <br>";
echo "Correct Answer: 1 <br>";
echo "Your Answer: " . $ans_q4 . "<br><br>";
if ($ans_q4 == "1") {
  $score++;
}

echo "Question 5: What was the original name of a Siemen unit? <br>";
echo "Correct Answer: Mho <br>";
echo "Your Answer: " . $ans_q5 . "<br><br>";
if ($ans_q5 == "Mho") {
  $score++;
}

echo "FINAL SCORE: " . $score . " of 5, " . ($score/5)*100 . "%<br><br>";
?>
