<?php

class SearchUser {
   function searchUserByEmail( $email = false ) {
        $ret = false;
	$fetchedUser = eZUser::fetchByEmail( $email );
        /* $db = eZDB::instance();
        $sql = "SELECT contentobject_id, email FROM ezuser NATURAL JOIN ezcontentobject_attribute WHERE data_text like '$email';";
        $rows = $db->arrayQuery( $sql );
        $count = count( $rows );
        $ret = $rows;

        if ( $count > 0 ) {
         $nodes = array();
         $node_ids = array();

         foreach( $rows as $row ) {
           // ezDebug::writeNotice( $this->array_value_count( $row["contentobject_id"], $node_ids ), 'find_search_view' );
           if ( $this->arrayValueCount( $row["contentobject_id"], $node_ids) == 0 ) {
             $testUserContentObject = eZContentObjectTreeNode::fetchByContentObjectID( $row["contentobject_id"] );
             $nodes[] = $testUserContentObject;
             $node_ids[] = $row["contentobject_id"];
             // ezDebug::writeNotice( $node_ids, 'find_search_view' );
           }
         }
         $ret = $nodes;
        } */

	if ( $fetchedUser != false) { 
	  $fetchedUserContentObject = eZContentObjectTreeNode::fetchByContentObjectID( $fetchedUser->ContentObjectID );
	  if ( $fetchedUserContentObject != false )
	    $ret = $fetchedUserContentObject;
	}

        return array( 'result' => $ret );
    }

    function searchUserByName( $name = false ) {
        $ret = false;
	$db = eZDB::instance();
	$sql = "SELECT contentobject_id, email FROM ezuser NATURAL JOIN ezcontentobject_attribute WHERE data_text like '$name';";
	$rows = $db->arrayQuery( $sql );
	$count = count( $rows );
	$ret = $rows;
	
	if ( $count > 0 ) {
	 $nodes = array();
	 $node_ids = array();

	 foreach( $rows as $row ) {
	   // ezDebug::writeNotice( $this->array_value_count( $row["contentobject_id"], $node_ids ), 'find_search_view' );
	   if ( $this->arrayValueCount( $row["contentobject_id"], $node_ids) == 0 ) {
	     $testUserContentObject = eZContentObjectTreeNode::fetchByContentObjectID( $row["contentobject_id"] );
	     $nodes[] = $testUserContentObject; 
	     $node_ids[] = $row["contentobject_id"];
             // ezDebug::writeNotice( $node_ids, 'find_search_view' );
	   }
	 }
 	 $ret = $nodes;
	}

        return array( 'result' => $ret );
    }

    function searchByObjectName( $name = false ) {
        $ret = false;
        $db = eZDB::instance();
        $sql = "SELECT DISTINCT contentobject_id, name FROM ezcontentobject_name WHERE name like '$name';";
        $rows = $db->arrayQuery( $sql );
        $count = count( $rows );
        $ret = $rows;

        if ( $count > 0 ) {
         $nodes = array();
         $node_ids = array();

         foreach( $rows as $row ) {
           // ezDebug::writeNotice( $this->array_value_count( $row["contentobject_id"], $node_ids ), 'find_search_view' );
           if ( $this->arrayValueCount( $row["contentobject_id"], $node_ids) == 0 ) {
             $testUserContentObject = eZContentObjectTreeNode::fetchByContentObjectID( $row["contentobject_id"] );
             $nodes[] = $testUserContentObject;
             $node_ids[] = $row["contentobject_id"];
             // ezDebug::writeNotice( $node_ids, 'find_search_view' );
           }
         }
         $ret = $nodes;
        }

        return array( 'result' => $ret );
    }


    static public function arrayValueCount( $match = false, $array = array() ) 
    { 
      $count = 0;
      foreach ( $array as $key => $value ) {
        if ( $value == $match ) { $count++; } 
      } 
    
      return $count; 
    } 

}

?>
