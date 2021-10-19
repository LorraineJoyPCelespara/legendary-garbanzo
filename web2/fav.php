<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
        if($_POST['username']){
            $username = htmlentities ($_POST['username']);
            echo $username."<br> <br>";
            }
        else {
                echo "!!!<br>No name was entered. <br>";
            }
        
        if($_POST['dish']){
            $dish = htmlentities ($_POST['dish']);
            echo "You really enjoy ".$dish."&nbsp";
            }
        else{
            echo "No wine was selected. <br>";
            }
    
        if(isset($_POST['color'])){
            $color = htmlentities ($_POST['color']);
            echo "especially with a nice ".$color." wine";
            } 
        else{
                echo "No dish was entered.<br><br>Please fill up the form.";
            }
    ?>
</body>
</html>