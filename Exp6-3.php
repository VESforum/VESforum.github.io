<doctype html>
<html>
    <head>
        <title>Experiment Number 6 - 3</title>
    </head>
    <body>
        <form method="post" action="Exp6-3.php">
            <input type="date" name="date"/>
            <input type="submit" value="Submit" name="submit"/>
        </form>
        
        <?php
            if(ISSET($_POST["submit"]))
            {
                $x = $_POST["date"];
                // echo $x;
                echo "<br>";
                $y  = $x[6];
                if($y==4)
                {
                    echo "Given Month is April";
                }
                else if($y==5)
                {
                    echo "Given Month is May";
                }
                $x = date('m');
                if($x==4)
                    echo "Month is April";
                elseif($x == 5)
                    echo "Month is May";
                else
                    echo "Some other month";
                }
        ?>
    </body>
</html>