<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php require 'includes/Pager.php';?>
 <?php get_header()?>
<h1>Shoe List</h1>
<?php
$sql = "select * from Shoes";
$config->loadhead .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$prev = '<img src="' . $config->virtual_path . '/images/arrow_prev.gif" border="0" />';
$next = '<img src="' . $config->virtual_path . '/images/arrow_next.gif" border="0" />';
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$myPager = new Pager(10,'',$prev,$next,'');
$sql = $myPager->loadSQL($sql,$iConn);  #load SQL, pass in existing connection, add offset
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0)
{//show records
     echo $myPager->showNAV();//show pager if enough records 
	if($myPager->showTotal()==1){$itemz = "shoe";}else{$itemz = "shoes";}  //deal with plural
     echo '<p align="center">We have ' . $myPager->showTotal() . ' ' . $itemz . '!</p>';

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'Brand: <b>' . $row['Brand'] . '</b> ';
        echo 'Type: <b>' . $row['Type'] . '</b> ';
        echo 'Color: <b>' . $row['Color'] . '</b> ';
        echo 'Style: <b>' . $row['Style'] . '</b> ';
        
        echo '<a href="shoes.php?id=' . $row['ShoeID'] . '">' . $row['Brand'] . '</a>';
        
        echo '</p>';
    }    
 echo $myPager->showNAV();//show pager if enough records 
    
}else{//inform there are no records
    echo '<p>There are currently no shoes</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>