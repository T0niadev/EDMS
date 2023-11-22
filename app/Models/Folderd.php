<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folderd extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'folderds';
    protected static function boot()
    {

        parent::boot();


        self::creating(function ($model) {
            $model->user_id = auth()->id();
        });
    }
    public function folderc()
    {
        return $this->belongsTo(Folderc::class);
    }
    
}
