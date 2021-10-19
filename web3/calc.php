<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $result = 0;

        # test if input is_numeric
        if(is_numeric($val1) && is_numeric($val2)){

            # test if calc is not null
            if(isset($_POST['calc'])){
                $calc = $_POST['calc'];

                # switch statement for value of calc
                switch($calc){
                    case 'add':
                        $result = $val1 + $val2;
                        echo "Addition: ".$val1." + ".$val2."<br><br>";
                    break;
                    case 'sub':
                        $result = $val1 - $val2;
                        echo "Subtraction: ".$val1." - ".$val2."<br><br>";
                    break;
                    case 'mul':
                        $result = $val1 * $val2;
                        echo "Multiplication: ".$val1." * ".$val2."<br><br>";
                    break;
                    case 'div':
                        $result = $val1 / $val2;
                        echo "Division: ".$val1." / ".$val2."<br><br>";
                    break;
                }
                echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>