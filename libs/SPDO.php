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
        parent::__construct('sqlsrv:Server='.$config->get('dbhost').';database='.$config->get('dbname'),
        $_SESSION["usuario"], $_SESSION["contrasenia"]);
    }//constructor


    public static function getInstance(){
        if(self::$instance==null){
            self::$instance = new self();
        } 
        return self::$instance;
    }//getInstance
    
}//fin clase 

?>