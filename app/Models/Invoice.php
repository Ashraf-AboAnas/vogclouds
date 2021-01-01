<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded =[];


    public function genarateTicketNumber()
    {
     $year =date("Y");
     $rand =sprintf("%04d",rand(0.9999));
     $unique ='#'.$year .$rand;
     return $unique;
    }

    
}
