<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    use HasFactory;

    protected $table = 'musicians';

    protected $primaryKey = 'id';

    protected $guarded = [];

    

    public function profile(){

        return $this->hasOne(Profile::class);

    }
}
