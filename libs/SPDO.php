<?php

/**
 * Description of SPDO
 *
 * @author saygo
 */
class SPDO extends PDO{
    
    private static $instance=null;
    
    public function __construct() {
        $config = Config::getInstance();
        //cargar datos referentes a la base de datos
        parent::__construct('sqlsrv:Server='.$config->get('dbhost').';database='.$config->get('dbname'),
                $config->get('dbuser'), $config->get('dbpass'));

    }//constructor
    
    public static function getInstance(){
        if(self::$instance==null){
            self::$instance = new self();
        } 
        return self::$instance;
    }//getInstance
    
}//fin clase 

?>