<?php

class IndexController extends Zend_Controller_Action{
        
    public function indexAction(){
        $tableList = new Module_Tables;
        
        Zend_Debug::dump($tableList->showTables());
    } 
   
}

class Module_Tables extends Zend_Db_Table_Abstract {
       
    public function showTables(){		
		$result = $this->_db->fetchRow ( "show tables" );
		if ( $result ) {
			return $result;
		} else {
			return false;
		}
    } 
    
}