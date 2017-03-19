<doctype html>
<html>
    <head>
        <title>Experiment Number 6 - 7</title>
    </head>
    <body>
        <?php
            
        ?>
        <form method="post" action="Exp6-7.php">
            Please Choose A Month:
            <select name="option">
				<option value="January">January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
			</select><br><br>
            <input type="submit" value="Submit" name="submit"/>
        </form>
        
        <?php
            if(ISSET($_POST["submit"]))
            {
                $months = array(
                'January' => "31 days",
                'February'=> "28 days, if leap year 29",
                'March' => "31 days",
                'April'=>"30 days",
                'May'=>"31 days",
                'June'=>"30 days",
                'July'=>"31 days",
                'August'=>"31 days",
                'September'=>"30 days",
                'October'=>"31 days",
                'November'=>"30 days",
                'December'=>"31 days"
                );



                while($month = current($months)){
                    $month = key($months);
                    if($month == $_POST["option"])
                    {
                        echo current($months)."<br>";
                    }
                    next($months);
                }
            }

        ?>
    </body>
</html>