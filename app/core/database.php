<?php

class Database{

    public function db_connect(){
        try{
            $db_string = DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME.";";
            $db_connection = new PDO($db_string, DB_USER, DB_PASS);
            showURL($db_connection);
            return $db_connection;

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function read($query, $data = []){

        $db = $this->db_connect();
        $statement = $db->prepare($query);
        if(count($data) == 0){
            $statement = $db->query($query);
            $checkExc = 0;
            if($statement){
                $checkExc = 1;
            }
        }else{
            $checkExc = $statement->execute($data);
        }
    

        if($checkExc){
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }else{
            return false;
        }

    }

    public function write($query, $data = []){

         $db = $this->db_connect();
        $statement = $db->prepare($query);
        if(count($data) == 0){
            $statement = $db->query($query);
            $checkExc = 0;
            if($statement){
                $checkExc = 1;
            }
        }else{
            $checkExc = $statement->execute($data);
        }
    

        if($checkExc){
            return true;
        }else{
            return false;
        }


    }

}
?>