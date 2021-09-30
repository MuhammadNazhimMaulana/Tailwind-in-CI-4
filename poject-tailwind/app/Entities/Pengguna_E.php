<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Pengguna_E extends Entity
{
    // Set Password user
    public function setPassword(string $password)
    {
        $this->attributes['password'] = password_hash($password, PASSWORD_DEFAULT);

        return $this;
    }
}