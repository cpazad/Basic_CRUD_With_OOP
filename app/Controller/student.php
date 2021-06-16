<?php

namespace Ura\Dhura\Controller;

use Ura\Dhura\Support\Database;

/**
 * Class student
 */

 class Student extends Database {
     public function studentTomiJao ($name, $email, $cell, $uname){
        $sql = "INSERT INTO students (name, email, cell, uname) VALUE('$name', '$email', '$cell', '$uname')";
        $this -> connection() -> query($sql);

     }
 }

?>