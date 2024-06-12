<?php

namespace App\Models;

use App\Models\UserRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UsersModel extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'users';
    protected $guarded = ['id'];

    public function role()
    {
        return $this->belongsTo(UserRole::class, 'idRole', 'id')->withDefault();
    }
}
