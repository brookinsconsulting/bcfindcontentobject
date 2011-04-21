<?php

$module = array( 'name' => 'find' ); //the name of our module, this ties in with the name specified in module.ini.append.php and the name of the parent folder

$ViewList = array(); //add as many views as you want here:

$ViewList['form'] = array(
    'functions' => array('form'),
    'default_navigation_part' => 'findnavigationpart',
    'script' => 'contentobjectsearchform.php',
    'params' => array() );

$ViewList['search'] = array(
    'functions' => array('search'),
    'default_navigation_part' => 'findnavigationpart',
    'script' => 'contentobjectsearch.php',
    'params' => array() );

// the script used to setup the template plus the user permissions required for it (also see below). The default navigation part is optional but can be used to default what template will be loaded for the left navigation (this can also be defined within the view’s PHP file)
 
// setting user permissions required by our module:
$FunctionList = array(); 
$FunctionList['form'] = array(); 
$FunctionList['search'] = array();


?>
