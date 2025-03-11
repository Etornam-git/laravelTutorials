<?php 

namespace App\Models;
use Illuminate\Support\Arr;

class job
{
    public static function all():array
    {
        return  [
            ['id'=>'1','title'=>'Developer','Salary'=>'5000'],
            ['id'=>'2','title'=>'Designer','Salary'=>' 2000'],
            ['id'=>'3','title'=>'Product Manager','Salary'=>' 3000']
        ];
    }

    public static function find(int $id): array {
        return  Arr::first(job::all(), function($job) use ($id) {
            return $job['id'] == $id;
        });
        
        // for wrong pages, a 404 page is displayed
        if (! $join){
            abort(404);
        }
        
        return $join;
    }
}

