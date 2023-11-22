<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folderc extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'foldercs';
    protected static function boot()
    {

        parent::boot();


        self::creating(function ($model) {
            $model->user_id = auth()->id();
        });
    }
    public function folderb()
    {
        return $this->belongsTo(Folderb::class);
    }
    public function folderds()
    {
        return $this->hasMany(Folderd::class);
    }
}
