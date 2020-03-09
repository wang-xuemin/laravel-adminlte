<?php

namespace App\Models\Laravel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Laravel extends Model
{
    const TABLE = 'migrations';
    
    public function getAll() {
        return DB::table(self::TABLE)->get()->toArray();
    }
}
