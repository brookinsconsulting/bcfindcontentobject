<?

$FunctionList['search_user_by_email'] = array( 'name' => 'searchUserByEmail',
	                                       'operation_types' => array( 'read' ),
        	                               'call_method' => array( 'class' => 'SearchUser',
                	                                               'method' => 'searchUserByEmail' ),
                        	               'parameter_type' => 'standard',
                                	       'parameters' => array( array( 'name' => 'email',
                  							     'type' => 'string',
                                                                       	     'required' => true ) ) );

$FunctionList['search_user_by_name'] = array( 'name' => 'searchUserByName',
                                              'operation_types' => array( 'read' ),
                                              'call_method' => array( 'class' => 'SearchUser',
                                                                      'method' => 'searchUserByName' ),
                                              'parameter_type' => 'standard',
                                              'parameters' => array( array( 'name' => 'name',
                                                                            'type' => 'string',
                                                                            'required' => true ) ) );

?>
