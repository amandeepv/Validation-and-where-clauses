<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    protected $fillable = [
            "name",
            "age",
            "first_name",
            "last_name",
        ];
    public static function store($request)
    {
        $student = self::whereName($request['name'])->whereAge($request['age'])->get();
        if(sizeof($student) > 0){
        //You may throw an error here. 
        $student = $student->first();
        return "1";
        }else{
            $student = new Student();
            $student->fill($request);
            $student->save();
             }
    }
    public static function validationRules()
    {
        return [
            'name' =>'required|max:50',
            'age' => 'required',
            'first_name' => 'required|unique_with:students,last_name,ignore:abc123',
            'last_name' => 'required',
        ];
    }
}
