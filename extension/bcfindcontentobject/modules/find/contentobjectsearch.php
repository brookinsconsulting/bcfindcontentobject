<?

$http = eZHTTPTool::instance();

//setting up the eZ template object:
$tpl = eZTemplate::factory();

// setting up what to render to the user
$Result = array();
$Result['content'] = '';
$Result['content'] .= $tpl->fetch( 'design:find/form.tpl' );

// Process submitted results

if ( $http->hasGetVariable( 'cname' ) && $http->getVariable( 'cname' ) != '' ) {
    $getName = $http->getVariable( 'cname' );
    $getSearchUser = new SearchUser();
    $getNameSearchResults = $getSearchUser->searchByObjectName( $getName );
    $tpl->setVariable( "results", $getNameSearchResults );
    $tpl->setVariable( "search_string", $getName );

    $Result['content'] .= $tpl->fetch( 'design:find/searchresultscname.tpl' );//main tpl file to display the output
}
if ( $http->hasGetVariable( 'name' ) && $http->getVariable( 'name' ) != '' ) {
    $getName = $http->getVariable( 'name' );
    $getSearchUser = new SearchUser();
    $getNameSearchResults = $getSearchUser->searchUserByName( $getName );
    $tpl->setVariable( "results", $getNameSearchResults );
    $tpl->setVariable( "search_string", $getName );

    $Result['content'] .= $tpl->fetch( 'design:find/searchresultsname.tpl' );//main tpl file to display the output
}
if ( $http->hasGetVariable( 'email' ) && $http->getVariable( 'email' ) != '' ) {
    $getEmail = $http->getVariable( 'email' );
    $getSearchUser = new SearchUser();
    $getEmailSearchResults = $getSearchUser->searchUserByEmail( $getEmail );
    $tpl->setVariable( "results", $getEmailSearchResults );
    $tpl->setVariable( "search_string", $getEmail );

    $Result['content'] .= $tpl->fetch( 'design:find/searchresultsemail.tpl' );//main tpl file to display the output
}
if ( $http->hasGetVariable( 'coid' ) && $http->getVariable( 'coid' ) != '' ) {
    $getCoID = $http->getVariable( 'coid' );
    $getCoIDSearchResults = eZContentObject::fetch( $getCoID );
    
    $tpl->setVariable( "results", $getCoIDSearchResults );
    $tpl->setVariable( "search_string", $getCoID );

    $Result['content'] .= $tpl->fetch( 'design:find/searchresultscoid.tpl' );//main tpl file to display the output
}
if ( $http->hasGetVariable( 'conid' ) && $http->getVariable( 'conid' ) != '' ) {
    $getConID = $http->getVariable( 'conid' );
    $getConIDSearchResults = eZContentObjectTreeNode::fetch( $getConID );

    $tpl->setVariable( "results", $getConIDSearchResults );
    $tpl->setVariable( "search_string", $getConID );

    $Result['content'] .= $tpl->fetch( 'design:find/searchresultsconid.tpl' );//main tpl file to display the output
}

// setting up what to render to the user
$Result['left_menu'] = "design:find/leftmenu.tpl";//uncomment this line if you want to use a custom left navigation for this view.

$Result['path'] = array( array( 'url' => 'find/search',
                                'text' => 'Find results' ) );//what to show in the Title bar for this URL

?> 
