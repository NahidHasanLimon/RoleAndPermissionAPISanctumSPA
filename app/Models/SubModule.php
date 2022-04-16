<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubModule extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'module_id',
    ];
    public function modules(){
        return $this->HasMany(Module::class);
    }
}
