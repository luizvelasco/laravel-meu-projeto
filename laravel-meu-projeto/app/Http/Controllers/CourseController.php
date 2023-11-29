<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Listar os cursos
    public function index(){

        // Carregar a View
        return view ('courses.index');
    }

    // Detalhes do curso
    public function show(){

        // Carregar a View
        return view ('courses.show');
    }

    // Carregar o formulário cadastrar novo curso
    public function create(){

        // Carregar a View
        return view ('courses.create');
    }

    // Cadastrar no banco de dados o novo curso
    public function  store(Request $request){

        // Cadastrar no banco de dados na tabela cursos os valores de todos os campos
        // Course::create($request->all());
        Course::create(['name' => $request->name]);

        // Redirecionar o usuário, enviar msg de sucesso
        return redirect()->route('course.show')->with('success', 'Curso cadastrado com sucesso');
    }

    // Carregar o formulário editar curso
    public function edit(){

        // Carregar a View
        return view ('courses.edit');
    }

    // Editar no banco de dados o curso
    public function update(){
        dd("Editar no banco de dados o curso");
    }

    // Excluir o curso o banco de dados
    public function destroy(){
        dd("Excluir o curso o banco de dados");
    }
}
