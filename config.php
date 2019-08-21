<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Jasmine Evans <jasmine.evans0791@gmail.com>
 * @version 2 2019/08/10
 * @link http://www.jsevansdesigns.com
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: starlight.dreamhost.com
$siteKey = "6LcFCLQUAAAAAGzv_XOYb7_qNJWLeVMavijU1uLP";
$secretKey = "6LcFCLQUAAAAAKH6l5ya7aS9xbUEw-jBs8Cl1zgT";

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Jasmine's WEB120 Web Dev Examples";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;
        
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-home';
        $PageID = 'Flexbox';
    break;
        
    case 'shoppingcarts.php':
        $title = "Shopping Carts Information";
        $logo = 'fa-home';
        $PageID = 'Shopping Carts';
    break;
    
    case 'galleries.php':
        $title = "Gallery Information";
        $logo = 'fa-home';
        $PageID = 'Galleries';
    break;
    
    case 'map.php':
        $title = "Map Information";
        $logo = 'fa-home';
        $PageID = 'Google';
    break;
    
    case 'calendar.php':
        $title = "Calendar Information";
        $logo = 'fa-home';
        $PageID = 'Google';
    break;
    
    case 'webcam.php':
        $title = "Webcam";
        $logo = 'fa-home';
        $PageID = 'Webcam';
    break;
        
    case 'youtube.php':
        $title = "YouTube";
        $logo = 'fa-home';
        $PageID = 'Search Engine Optimization (SEO) - Definition and Responsive YouTube Video';
    break;
        
    case 'siteapp.php':
        $title = "Responsive site vs Mobile Design";
        $logo = 'fa-home';
        $PageID = 'Responsive Site vs Mobile Design';
    break;
    
    case 'contactme.php':
        $title = "Jasmine's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Jasmine';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}






?>
