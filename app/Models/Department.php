<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected static function boot()
    {

        parent::boot();


        self::creating(function ($model) {
            $model->user_id = auth()->id();
        });
    }
    protected $guarded = [];
    // protected static function boot()
    // {

    //     parent::boot();


    //     self::creating(function ($model) {
    //         $model->user_id = auth()->id();
    //     });
    // }
    public function folderas()
    {
        return $this->hasMany(Foldera::class);
    }
}
