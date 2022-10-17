<?php 


class QueryBuilder{

    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
        }

    public function selectAll($table){


        $stmt = $this->pdo->prepare("select * from {$table}");

        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters){


        $sql = sprintf(

            'insert into %s (%s) values (%s)',

            $table, 
            implode (', ', array_keys($parameters)), 
            ':' . implode (', :', array_keys($parameters))
        );


        try{

            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parameters);
     

        } catch(Exception $e) {

            die($e .'Whoops, something went wrong');
        }

      
    }

    
    public function update($table,$parameters){

     
        $sql = sprintf(

            'update %s set %s = %s where %s = %s ',

            $table, 
            array_key_last($parameters),
            ':' . array_key_last($parameters),
             array_key_first($parameters),
            ':' . array_key_first($parameters)

        );


        try{

            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parameters);
     

        } catch(Exception $e) {

            die($e.'Whoops, something went wrong');
        }

    }

    public function delete($table,$parameters){

        

        $sql = sprintf(

            'delete from %s where %s = %s',

            $table, 
            implode (', ', array_keys($parameters)),
            ':' . implode (', :', array_keys($parameters)),

        );




        try{

            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parameters);
     

        } catch(Exception $e) {

            die($e.'Whoops, something went wrong');
        }

    }
}



?>