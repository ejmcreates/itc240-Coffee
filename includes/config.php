<?php
/*
    config.php
    Stores configuration data for our application
*/

ob_start(); //prevents header errors

define('DEBUG',TRUE); #we want to see all errors

include 'includes/credentials.php'; //database credentials

//here are the urls and page names for our main nav

$nav1['index.php']='Home';
$nav1['order.php']='Order';
$nav1['daily.php']='Daily Specials';
$nav1['cheese_list.php']='Our Cheeses';
$nav1['contact.php']='Contact Us';

//default page values
$title = THIS_PAGE;
$siteName = 'Yummy Cheese Shop';
$slogan = 'All the cheese you could ever want';
$pageHeader = 'Yummy Cheese';


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case'index.php':
        $title = 'Index Page';
        $pageHeader = 'Satisfying all your cheese needs!';
        break;
 
    case'order.php':
        $title = 'Order Page';
        $pageHeader = 'We do cheese plates for parties!';
        break;        
        
    case'daily.php':
        $title = 'Daily Specials';
        $pageHeader = 'See all our daily specials!';
        break;        
        
    case'contact.php':
        $title = 'Contact Us';
        $pageHeader = 'Please contact us with any questions';
        break;   
        
    case'customer_list.php':
        $title = 'Our Cheeses';
        $pageHeader = 'Our current roster of yummy cheeses!';
        break;     
}
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

/*
makeLinks() will create navigation items from an array

*/
function makeLinks($nav)
{
    $myReturn = '';
    
    foreach($nav as $key => $value){
   
             $myReturn .= '
              <a href="' . $key . '">' . $value . '</a>';
    }
    
    return $myReturn;
} //end makeLinks

?>