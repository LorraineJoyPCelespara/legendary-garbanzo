<?php
session_start();

$num_visits = $_SESSION['visit_count'];
    if(isset($_GET['reset'])||!isset($num_visits)){
        $num_visits = 0;
    }
    $num_visits++;
    $_SESSION['visit_count'] = $num_visits;
?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href = "?reset=true">Reset</a></p>

<?php 
    if($num_visits == 5){
        echo "Thank you for visiting the page a lot.";
    }

    if($num_visits == 10){
        header("Location: congratulations.php");
        exit();
    }
?>