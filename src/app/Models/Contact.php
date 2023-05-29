<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = "contacts";

    protected $fillable = [
        'department_id',
        'name',
        'email',
        'content',
        'age',
        'gender',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class); 
    
    }
}
