<?php

include("connect.php");

session_start();

 	$pw = $_POST['pw'];
    $name = $_POST['name'];

    $s = "Select * From hhs_user Where user = '".$name."'";
    $q = mysqli_query($dbc,$s);
    if($q)
    {
        $row = mysqli_fetch_array($q, MYSQLI_ASSOC);
        $pwa = $row['pw'];
        
        if($pw == "")
        {
        	echo "You did not enter a password";
        }
        else if($pwa == $pw)
        {
            # Access session.
            $_SESSION['owner123'] = $name;
            $_SESSION['zackt'] = $name;
          	$_SESSION['angel345'] = $name;

            try
            {
            	header( "Location: index.php" ); 
            }
            catch (Exception $e)
            {
                echo "Please enable headers";
            }
        }
        else
        {
            echo "Your attempt to hack this site has been reported to the FBI..."; 
            $_SESSION['owner123'] = "";
          	$_SESSION['zackt'] = "";
          	$_SESSION['angel345'] = "";

        }  
    }
    else
    {
        echo '<p>'.mysqli_error($dbc).'</p>';
        echo 'Query issue';
    }
    mysqli_close($dbc);
?>