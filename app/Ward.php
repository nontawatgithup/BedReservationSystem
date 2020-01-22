<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{

    protected $table = 'ward';
    protected $primaryKey = 'id_Ward';
    protected $fillable = ['name_Ward'];


}
