<?php

namespace App\Models;

use mysqli;

class User {
    private $mysqli;

    public function __construct(mysqli $mysqli) {
        $this->mysqli = $mysqli;
    }
}
    


