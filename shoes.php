<?php
//customer_view.php - shows details of a single customer
?>
<?php include 'includes/config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:shoe_list.php');
}


$sql = "select * from Shoes where ShoeID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $Brand = stripslashes($row['Brand']);
        $Type = stripslashes($row['Type']);
        $Color = stripslashes($row['Color']);
        $Style = stripslashes($row['Style']);
        $title =  $Brand;
        $pageID = $Brand;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>The shoe does not exist</p>';
}

?>
<?php get_header()?>
<h1><?=$pageID?></h1>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<p>';
    echo 'Brand: <b>' . $Brand . '</b> ';
    echo 'Type: <b>' . $Type . '</b> ';
    echo 'Color: <b>' . $Color . '</b> ';
    echo 'Style: <b>' . $Style . '</b> ';
    
    echo '<img src="uploads/shoe' . $id . '.png" />';
    
    echo '</p>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="shoe_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>