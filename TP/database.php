<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
//define(DB_NAME, 'logger');
define('DB_NAME', 'e-commerce');
class database {
    
    //error_reporting(E_ALL);
        
    // The database connection
    protected static $connection;

    
    
    
    private function connectPDO() {    
        error_reporting(1);
        ini_set('display_errors', 1);
        // Try and connect to the database
        try {
           
           # MySQL with PDO_MYSQL
            $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            // set the PDO error mode to exception
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
            # MySQL with PDO_MYSQL
           // return $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);

          }
          catch(PDOException $e) {
              echo $e->getMessage();
          }
    }
    
    
   
    
    private function queryPDOFetchAll($query, $data) {
        // Connect to the database
        
        $dbh = $this -> connectPDO();
        $sth = $dbh->prepare($query);
        
        //$sth->execute($data);
        try {
            $res = $sth->execute($data);
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            exit;
        }
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
       
        // Query the database
        //$result = $connection -> queryPDO($query);

        return $result;
    }
    
    private function queryInsertPDO($sql, $data)
    {
        $dbh = $this -> connectPDO();
        $values = array();
        $sth = $dbh->prepare($sql);
        
        $res = $sth->execute($data);
        
        if($res)
        {
            return $lastInsertID = $dbh->lastInsertId();
        }
        else
        {
            return 0;
        }
    }
    

   

   
    

    
    public function callQuery($query, $values = null)
    {
       return $this->queryPDOFetchAll($query, $values); 
    }
    
    
    
    public function callQueryInsert($query, $data = null)
    {
       return $this->queryInsertPDO($query, $data); 
    }
    
}
