<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    // protected $fillable = ['id','name','email','subject','services_id','important','message','phone','advance_budget','ticket_id','status'];
    protected $guarded =[];
    public function service()
{
    return $this->belongsTo(Services::class);
}
}
