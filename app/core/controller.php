<?php  

class Controller{

    
    protected function getView($view, $data = []){
          if(file_exists("../app/views/". $view .".php")){
              include "../app/views/". $view .".php" ;
       }else{
           include "../app/views/error.php";
       }
    }

    protected function loadModel($model){
          if(file_exists("../app/models/". $model .".php")){
              include "../app/models/". $model .".php" ;
              return $model = new $model();
       }
       return false;
    }



}



?>