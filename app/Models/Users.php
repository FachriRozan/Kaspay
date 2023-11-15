<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\Users as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $fillable = [
        'username',
        'password',
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
