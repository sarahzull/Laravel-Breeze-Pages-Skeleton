<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'finish_time',
        'comments',
        'client_id',
        'employee_id',
    ];
 
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
 
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
