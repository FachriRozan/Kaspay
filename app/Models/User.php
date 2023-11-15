<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $primaryKey = 'npm';  
    protected $table = 'user';
    public $timestamps = false;
    protected $fillable = [
        'username',
        'password',
        'npm',
        'nama',
        'role',
    ];

    public function getAuthIdentifierName()
    {
        return 'npm'; // Kolom yang digunakan sebagai identifier pengguna (biasanya 'id')
    }

    public function getAuthPassword()
    {
        return $this->password; // Kolom yang menyimpan password pengguna (biasanya 'password')
    }
}
