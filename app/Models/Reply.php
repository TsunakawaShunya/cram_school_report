<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }
    
    public function report()   
    {
        return $this->belongsTo(Report::class);  
    }

    protected $fillable = [
        'user_id',
        'report_id',
        'reply_id',
        'body'
    ];
}
