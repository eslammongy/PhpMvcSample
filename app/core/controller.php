<?php  

class Controller{

    
    protected function getView($view){
          if(file_exists("../app/views/". $view .".php")){
              include "../app/views/". $view .".php" ;
       }else{
           include "../app/views/error.php";
       }
    }

}



?>