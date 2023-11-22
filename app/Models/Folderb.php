<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folderb extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'folderbs';
    protected static function boot()
    {

        parent::boot();


        self::creating(function ($model) {
            $model->user_id = auth()->id();
        });
    }
    public function foldera()
    {
        return $this->belongsTo(Foldera::class);
    }
    public function foldercs()
    {
        return $this->hasMany(Folderc::class);
    }
}
