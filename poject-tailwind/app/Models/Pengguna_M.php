<?php

namespace App\Models;

use CodeIgniter\Model;

class User_M extends Model
{
    protected $table         = 'tbl_pengguna';
    protected $primaryKey    = 'id_pengguna';
    protected $allowedFields = ['username','nama_lengkapa', 'tingkat', 'alamat', 'password', 'usia', 'foto_user', 'tgl_masuk', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\User_E';
    protected $useTimestamps = true;
}