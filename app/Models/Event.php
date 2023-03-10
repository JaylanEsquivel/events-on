<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $date = ['date'];

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class); // O EVENTO PERTENCE A UM USUARIO
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps(); // PERTENCE A MUITOS
    }

}
