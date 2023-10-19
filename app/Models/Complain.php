<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'room_no',
        'department',
        'requested_by',
        'reported_by',
        'body',
        'uid',
        //... any other fields you want to be mass-assignable
    ];
    
    // For custom primary key to be used in 
    // Route model Binding
    protected $primaryKey = 'cid';

    
    public function user()
    {
        return $this->belongsTo(User::class, 'UID');
    }
}
