<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    public $table = 'contact_us';
    public $primarykey = 'user_id';
    public $incrementing = true;
    public $timestamps = false;
}
