<?

//setting up the eZ template object:
$tpl = eZTemplate::factory();

// setting up what to render to the user
$Result = array();
$Result['content'] = $tpl->fetch( 'design:find/searchform.tpl' );//main tpl file to display the output
$Result['left_menu'] = "design:find/leftmenu.tpl";//uncomment this line if you want to use a custom left navigation for this view.

$Result['path'] = array( array( 'url' => 'find/searchform',
                                'text' => 'Find content objects' ) );//what to show in the Title bar for this URL

?> 
