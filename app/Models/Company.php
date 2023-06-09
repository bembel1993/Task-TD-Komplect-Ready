<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->hasMany(Department::class, 'id_company');
    }
}
