<?php
/*
config.php

put configuration information here

*/

define('DEBUG',TRUE); #we want to see all errors

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "HOME";
$nav1['customers.php'] = "CUSTOMERS";
$nav1['daily.php'] = "DAILY";
$nav1['contact.php'] = "CONTACT";
$nav1['contact-compound.php'] = "COMPOUND CONTACT";
$nav1['shoe_list.php'] = "SHOE LIST";
$nav1['shoes.php'] = "SHOES";


//echo THIS_PAGE;

//die;


//defaults for header.php
$banner = 'Widgets';
$slogan = 'Our Widgets Will Make you Drool!';


switch(THIS_PAGE){
     
    case 'index.php':
        $title = 'Index Page';
    break;
          case 'customers.php':
        $title = 'Customers Page';
    break;
          case 'daily.php':
        $title = 'Daily Page';
    break;
          case 'contact.php':
        $title = 'Contact Page';
    break;
     case 'contact-compound.php':
        $title = 'Compound Contact Page';
    break;
         case 'shoe_list.php':
        $title = 'Shoe List';
    break;
         case 'shoes.php':
        $title = 'Shoes';
    break;
        
    default:
        $title = THIS_PAGE;
}

//other includes files referenced here
include'credentials.php';


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

function coffee_links($nav1){
    
    foreach($nav1 as $url => $text){
        //echo '<li><a href="' . $url . '">' . $text . '</a></li>';

        if(THIS_PAGE == $url)
        {//current page - add highlight
              echo '
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
        }else{//no highlight
             echo '
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
    }

}
}

?>