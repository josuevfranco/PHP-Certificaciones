<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EXAMEN JAVA</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logofinal.ico">
</head>

<body>
  
  <?php
            error_reporting(0); 
            $preguntas = array(
                1 => "Please select in a code to declare one variable of type int and print their sum using the sum variable.
                Int x፣
                Int  ፣
                Int sum = x+ y፣
                System.out.println(   )፣
                ",
                2 => "Select in the blank to define a method that does not return a value
                Public      cal();
                ",
                3 => "What term is used for hiding the details of an object from the other parts of a program?",
                4 => "Which access modifier explicitly says that a method or variable of an object can be accessed by code from outside of the class of that object",
                5 => "Select in the blanks to print in a loop 7 times, using the while loop.
                Int x=1;
                While (x <=    ){
                 System.out.println(“in a loop”);
                 x++;
                }
                ",
                6 => "In every Java program...",
                7 => "Please select the correct statements about || operators.",
                8 => "Select in the blanks to print You rock! if variable a is greater than 15, and variable b is less than or equal to 72.
                Int a = 144
                Int b = 33;
                If (a>15      b<=72){
                 System.out.printl(“You rock”);
                }
                ",
                9 => "What is the output of this code?
                int arr() = new int(3);
                for (int i = 0; i < 3; i++) {
                arr (i) = i;
                } 
                int res = arr(0) + arr(2);
                System.out.println(res);
                ",
                10 => "Which two of the following statements are true?",
                11 => "How many times can you call a method?",
                12 => "What is the value of the following expression?
                Math.abs(Math.min(-6, 3));
                ",
                13 => "Enums are used to declare variables that represent...",
                14 => "In Java, how many superclasses can your inherited subclass have?",
            );
    
    
      $respuestasCorrect =array(
        1 => "int y, sum",
        2 => "void",
        3 => "Encapsulación",
        4 => "public",
        5 => "7",
        6 => "…there must be a method called “main”",
        7 => "a || b is true if either a or b is true",
        8 => "&&",
        9 => "2",
        10 => "If we don't catch exceptions, the program can shut down",
        11 => "As many as you want",
        12 => "6",
        13 => "members of a fixed set",
        14 => "Only one",
    );
    
        //LLenar el array sin repetir nombres
        $valoresRandom = array();
        $final1 = array();
        $valorRandomPrimero = mt_rand(1,14);

        array_push($valoresRandom, $valorRandomPrimero);
        array_push($final1, $preguntas[$valorRandomPrimero]);

        $x = 1;

        while ($x <= 6) {
            $siguienteValorRadom = mt_rand(1, 14);
            if(in_array($siguienteValorRadom, $valoresRandom)){
                continue;
            }else{
                array_push($valoresRandom, $siguienteValorRadom);
                array_push($final1, $preguntas[$siguienteValorRadom]);
                $x++;
            }
        }
    
     function buscaCorrecta($op){
           $rcta =array(
            1 => "int y, sum",
            2 => "void",
            3 => "Encapsulation",
            4 => "public",
            5 => "7",
            6 => "…there must be a method called “main”",
            7 => "a or b is true if either a or b is true",
            8 => "&&",
            9 => "2",
            10 => "If we don't catch exceptions, the program can shut down",
            11 => "As many as you want",
            12 => "6",
            13 => "members of a fixed set",
            14 => "Only one",
        );
         
        return $rcta[$op];
     }
    
    
     function buscaOpciones($opcion){
         
            $p = array(
                1 => "Please select in a code to declare one variable of type int and print their sum using the sum variable.
                Int x፣
                Int  ፣
                Int sum = x+ y፣
                System.out.println(   )፣
                ",
                2 => "Select in the blank to define a method that does not return a value
                Public      cal();
                ",
                3 => "What term is used for hiding the details of an object from the other parts of a program?",
                4 => "Which access modifier explicitly says that a method or variable of an object can be accessed by code from outside of the class of that object",
                5 => "Select in the blanks to print in a loop 7 times, using the while loop.
                Int x=1;
                While (x <=    ){
                 System.out.println(“in a loop”);
                 x++;
                }
                ",
                6 => "In every Java program...",
                7 => "Please select the correct statements about || operators.",
                8 => "Select in the blanks to print You rock! if variable a is greater than 15, and variable b is less than or equal to 72.
                Int a = 144
                Int b = 33;
                If (a>15      b<=72){
                 System.out.printl(“You rock”);
                }
                ",
                9 => "What is the output of this code?
                int arr() = new int(3);
                for (int i = 0; i < 3; i++) {
                arr (i) = i;
                } 
                int res = arr(0) + arr(2);
                System.out.println(res);
                ",
                10 => "Which two of the following statements are true?",
                11 => "How many times can you call a method?",
                12 => "What is the value of the following expression?
                Math.abs(Math.min(-6, 3));
                ",
                13 => "Enums are used to declare variables that represent...",
                14 => "In Java, how many superclasses can your inherited subclass have?",
            );
            
            for ($i=1; $i<=14; $i++){
                if ($p[$i] == $opcion){
                    return $i;
                    break;
                }
            }
     }
    

    function buscaIncisos($i){
        
        $uno = array(
            0 => "int y, sum",
            1 => "int x, suma",
            2 => "int y, x+y",
            3 => "int x, sum",
        );

        $dos = array(
            0 => "static",
            1 => "function",
            2 => "void",
            3 => "integer",
        );

        $tres = array(
            0 => "data mining",
            1 => "polymorphism",
            2 => "inheritance",
            3 => "Encapsulation",
        );

        $cuatro = array(
            0 => "idefault",
            1 => "public",
            2 => "static",
            3 => "private",
        );

        $cinco = array(
            0 => "7",
            1 => "6",
            2 => "--7",
            3 => "++7",
        );

        $seis = array(
            0 => "…all of the variables must be integers.",
            1 => "…there must be at least two variables declared.",
            2 => "…there must be a method called “main”",
            3 => "…there must be a static method",
        );

        $siete = array(
            0 => "a or b is true if either a or b is true",
            1 => "(a or b ) and c is true if c is true and either a or b is true",
            2 => "a and b is true if either a or b is true",
            3 => "a or b is true if either a or b is true",
        );


        $ocho = array(
            0 => "&&",
            1 => "||",
            2 => ">",
            3 => "<=",
        );

        $nueve = array(
            0 => "3",
            1 => "4",
            2 => "2",
            3 => "7",
        );

        $diez = array(
            0 => "Exception catching is a bad practice",
            1 => "If we don't catch exceptions, the program can shut down",
            2 => "We cannot catch any exception",
            3 => "Exception catching improves program interface design",
        );

        $once = array(
            0 => "Only two",
            1 => "As many as you want",
            2 => "One",
            3 => "Three",
        );

        $doce = array(
            0 => "3",
            1 => "-6",
            2 => "6",
            3 => "3",
        );

        $trece = array(
            0 => "interfaces",
            1 => "classes",
            2 => "members of a fixed set",
            3 => "integers",
        );

        $catorce = array(
            0 => "Only one",
            1 => "two",
            2 => "three",
            3 => "multiple",
        );
        
        switch ($i) {
            case "1":
                return $uno;
                break;
            case "2":
                return $dos;
                break;
            case "3":
                return $tres;
                break;
            case "4":
                return $cuatro;
                break;
            case "5":
                return $cinco;
                break;
            case "6":
                return $seis;
                break;
            case "7":
                return $siete;
                break;
            case "8":
                return $ocho;
                break;
            case "9":
                return $nueve;
                break;
            case "10":
                return $diez;
                break;
            case "11":
                return $once;
                break;
            case "12":
                return $doce;
                break;
            case "13":
                return $trece;
                break;
            case "14":
                return $catorce;
                break;
        }

    }
            
    /*function haceRevision(&$opf, &$opf2, &$opf3, &$opf4, &$opf5, &$opf6, &$r1, &$r2, &$r3, &$r4, &$r5, &$r6, &$answer1, &$answer2, &$answer3, &$answer4, &$answer5, &$answer6){

            
            var_dump($opf[$answer1]); echo '<br>';
            var_dump($opf2[$answer2]); echo '<br>';
            var_dump($opf3[$answer3]); echo '<br>';
            var_dump($opf4[$answer4]); echo '<br>';
            var_dump($opf5[$answer5]); echo '<br>';
            var_dump($opf6[$answer6]); echo '<br>';
            
            var_dump($r1); echo '<br>';
            var_dump($r2); echo '<br>';
            var_dump($r3); echo '<br>';
            var_dump($r4); echo '<br>';
            var_dump($r5); echo '<br>';
            var_dump($r6); echo '<br>';
            

            $aprueba = 0;
            
            if ($opf[$answer1] != $r1){
                $aprueba = 1;
            }
            if ($opf2[$answer2] != $r2){
                    $aprueba = 1;
            }
            if ($opf3[$answer3] != $r3){
                $aprueba = 1;
            }
            if ($opf4[$answer4] != $r4){
                $aprueba = 1;
            }
            if ($opf5[$answer5] != $r5){
                $aprueba = 1;
            }
            if ($opf6[$answer6] != $r6){
                $aprueba = 1;
            }

            if ($aprueba == 1){
                echo 'CHALE REPROBASTE MI CHAVO';
            }else{
                echo 'APROBASTE MI AMOR';
            }
        }*/


    
    
    require "vista.examen.php";
    
  ?>
  
  

   
    
</body>
</html>