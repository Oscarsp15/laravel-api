<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;


class studentController extends Controller
{
    public function index()
    {
        $student = Student::all();

        if($student->isEmpty()){

            $data = [
                'menssage'=> 'No hay estudiantes registrados',
                'status'=> 200
            ];
            return response()->json($data,200);
        }
        
        $data = [
            'students'=> $student,
            'status'=> 200
        ];
        return response()->json($data,200);
         //return 'Obteniendo lista de estudiantes desde el controller';
    }

 public function store(Request $request){
    $validator = Validator::make($request ->all(),[
    'name'=> 'required',
    'email'=> 'required|email',
    'phone'=> 'required',
    'leanguage'=> 'required' 
    ]);
   
    if ($validator->fails()){

        $data = [

            'message' => 'Error en la validacion de los datos',
            'errors' => $validator-> errors(),
            'status'=> 400
        ];
        return response()->json($data,400);
    }
/*
    $student = Student::create({

        return null;
    })*/
 }

};
