<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    use HasFactory,SoftDeletes;
    protected $table = 'images';
    protected $guarded = ['id'];

    public function user(){
        
        return $this->belongsTo(UsersModel::class, 'idAdmin', 'id')->withDefault();
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'idMenu', 'id')->withDefault();;
    }
}
