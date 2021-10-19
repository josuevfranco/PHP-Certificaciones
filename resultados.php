<?php
    error_reporting(0); 
    session_start();

    /*
    var_dump($answer1);
    var_dump($answer2);
    var_dump($answer3);
    var_dump($answer4);
    var_dump($answer5);
    var_dump($answer6); */

    
    $answer1 = $_POST['p1'];
    $answer2 = $_POST['p2'];
    $answer3 = $_POST['p3'];
    $answer4 = $_POST['p4'];
    $answer5 = $_POST['p5']; 
    $answer6 = $_POST['p6'];
    

    $opfc1 = array();
    $opfc1 = $_SESSION['opf'];

    $opfc2 = array();
    $opfc2 = $_SESSION['opf2'];

    $opfc3 = array();
    $opfc3 = $_SESSION['opf3'];

    $opfc4 = array();
    $opfc4 = $_SESSION['opf4'];

    $opfc5 = array();
    $opfc5 = $_SESSION['opf5'];

    $opfc6 = array();
    $opfc6 = $_SESSION['opf6'];

    /*
    var_dump($opfc1[$answer1]); echo '<br>';
    var_dump($opfc2[$answer2]); echo '<br>';
    var_dump($opfc3[$answer3]); echo '<br>';
    var_dump($opfc4[$answer4]); echo '<br>';
    var_dump($opfc5[$answer5]); echo '<br>';
    var_dump($opfc6[$answer6]); echo '<br>';
            
    var_dump( $_SESSION['r1']); echo '<br>';
    var_dump( $_SESSION['r2']); echo '<br>';
    var_dump( $_SESSION['r3']); echo '<br>';
    var_dump( $_SESSION['r4']); echo '<br>';
    var_dump( $_SESSION['r5']); echo '<br>';
    var_dump( $_SESSION['r6']); echo '<br>';
    */
    
    $c=0;

    if ($opfc1[$answer1]  ===  $_SESSION['r1']){
            $c++;
            echo 'RESPUESTA 1';
    }
    if ($opfc2[$answer2]  ===  $_SESSION['r2']){
            $c++;
            echo 'RESPUESTA 2';

    }
    if ($opfc3[$answer3]  ===  $_SESSION['r3']){
            $c++;
            echo 'RESPUESTA 3';
    }
    if ($opfc4[$answer4]  ===  $_SESSION['r4']){
            $c++;
            echo 'RESPUESTA 4';

    }
    if ($opfc5[$answer5]  ===  $_SESSION['r5']){
            $c++;
            echo 'RESPUESTA 5';

    }
    if ($opfc6[$answer6]  ===  $_SESSION['r6']){
            $c++;
            echo 'RESPUESTA 6';

    }

    if ($c < 5){
        $_SESSION['calif'] = $c;
        header("Location: reprobado.php");
    }

    if ($c >= 5){
        $_SESSION['calif'] = $c;
        header("Location: aprobado.php");
    }


?>