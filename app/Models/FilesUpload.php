<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilesUpload extends Model
{
    use HasFactory;
    protected $table="files_uploads";

    protected $fillable = ['ticket_id', 'filename'];
public function ticket()
{
return $this->belongsTo('App\Models\Ticket');

}

/*public function setFilenamesAttribute($value)
{
    $this->attributes['filename'] = json_encode($value);
}*/



}
