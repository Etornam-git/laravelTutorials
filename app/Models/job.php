<?php 

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids ;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// converting a 
// eloquent has it own api FOR QUERYING THE DATABASE
class job extends Model
{
    use HasFactory;
    // a table in our table+ GUI.
    // we either change the model class name or use the protected $table property
    protected $table = 'job_listings';

    // this is to say that a every job has an employer in that field
    public function employer():BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
    // ALL THE PROPERTIES IN THE $FILLABLE ARRAY CAN BE MASS-ASSIGNED
    // adding the employer_id to allow mass assignment
    // protected $fillable = ['title','employer_id', 'salary'];
    // the guarded property is the opposite of the fillable property, 
    // it disables the fillable--mass assignment. it describes the fields that are not mass assignable
    protected $guarded = [];

    
    public function tags():BelongsToMany
    {
        // our job model is represented by job_listings in tableplus, hence it's primary key is job_listing_id,
        //  that is why it has been declared here as foreignPivotKey:'job_listing_id'
        return $this->belongsToMany(Tag::class, foreignPivotKey:'job_listing_id');
    }



}

