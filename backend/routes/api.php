<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users', function () {
    return User::all();
});

Route::post('/user', function (Request $request) {
    $request->validate(
        [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique',
            'password' => 'required',
        ],
        [
            'firstName.required' => 'O campo nome é obrigatório',
            'lastName.required' => 'O campo sobrenome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.unique' => 'Esse email já está cadastrado',
            'password.required' => 'O campo password é obrigatório',
        ]
    );
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
