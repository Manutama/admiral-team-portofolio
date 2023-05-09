<?php 

interface message{
    public function mail();
}
 
class mail implements message {
    public function mail(){
        return "Email has been send !";
    }
}

