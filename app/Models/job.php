<?php 

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// converting a 
// eloquent has it own api FOR QUERYING THE DATABASE
class job extends Model
{
    use HasFactory;
    // a table in our table+ GUI.
    // we either change the model class name or use the protected $table property
    protected $table = 'job_listings';

    // ALL THE PROPERTIES IN THE $FILLABLE ARRAY CAN BE MASS-ASSIGNED
    protected $fillable = ['title', 'description', 'salary'];


}

