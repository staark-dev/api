<?php
namespace Src\Model;

use PDO;
use Src\DB as DataBase;

class User extends DataBase {
    private $table = "users";
    

    public function get()
    {
        $stmp = $this->db()->prepare("SELECT * FROM {$this->table}");
        $stmp->execute();

        $result = $stmp->fetch(PDO::FETCH_OBJ);
    
        return $result;
    }
}