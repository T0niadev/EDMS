<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foldera extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'folderas';
    protected static function boot()
    {

        parent::boot();


        self::creating(function ($model) {
            $model->user_id = auth()->id();
        });
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function folderbs()
    {
        return $this->hasMany(Folderb::class);
    }
}
