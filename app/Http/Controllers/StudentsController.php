<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    function show(){
        return 'List of students';
    }
    function add(){
        return 'Add Student details';
    }
    function delete(){
        return 'Remove Student Data';
    }
    function update(){
        return 'Update Student details';
    }

    function topper($name){
        return $name;
    }
}
