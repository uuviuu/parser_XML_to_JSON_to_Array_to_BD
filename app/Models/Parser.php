<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parser extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function getRouteKeyName()
    {
        return 'id';
    }

    protected $table = 'parsers';
    protected $guarded = false;
}
