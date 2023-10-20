<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->post('/quizzes', 'QuizController@store');
$router->get('/quizzes', 'QuizController@showAll');
$router->get('/quizzes/{id}', 'QuizController@show');
$router->post('/quizzes/{id}', 'QuizController@update');
$router->delete('/quizzes/{id}', 'QuizController@destroy');

$router->post('/questionbanks', 'QuestionBankController@store');
$router->get('/questionbanks', 'QuestionBankController@showAll');
$router->get('/questionbanks/{id}', 'QuestionBankController@show');
$router->put('/questionbanks/{id}', 'QuestionBankController@update');
$router->delete('/questionbanks/{id}', 'QuestionBankController@destroy');

$router->post('/questionbankquizzes', 'QuestionBankQuizzesController@store');
$router->get('/questionbankquizzes', 'QuestionBankQuizzesController@showAll');
$router->get('/questionbankquizzes/{id}', 'QuestionBankQuizzesController@show');
$router->put('/questionbankquizzes/{id}', 'QuestionBankQuizzesController@update');
$router->delete('/questionbankquizzes/{id}', 'QuestionBankQuizzesController@destroy');