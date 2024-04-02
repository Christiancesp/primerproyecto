<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaCrontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use PhpParser\Node\Stmt\Return_;


/*Route::get('/', function (){
    return view('welcome');
});

Route::get('hola',[HolaCrontroller::class,'index']);


Route::get('/', function () {
    return view('welcome');
    return "Hola Mundo!";
});

Route::get('bienvenidos', function(){
    return "Sean Bienvenidos a mi pagina web";
});



Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return "Bienvenidos al curso $curso, de la categoria $categoria";
});

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

    if($categoria){
        return "Bienvenidos al curso: $curso, de la categoria: $categoria";
    }else{
        return "Bienvenidos al curso: $curso";
    }

});

Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);

*/

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});

