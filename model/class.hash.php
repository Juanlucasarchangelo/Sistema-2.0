<?php
class Hash{
    public function pwd_hash ($senha){
        return password_hash($senha, PASSWORD_DEFAULT);
    }

}

?>