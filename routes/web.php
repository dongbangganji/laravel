<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/world/{name?}', function ($name = '111') {
    return response("hello world ".$name, 200)
        ->header('Content-Type', 'text/plain')
        ->header('Cache-Control', 'max-age='. 60*60 .", must-revalidate");
});

Route::get('hello/json', function () {
    $data = ['name' => 'Iron Man' , 'gender' => 'Man'];
    return response()->json($data);
});

Route::get('hello/html', function () {
    return view('hello/hello');
});

/**
 * with()를 이용해 뷰에 데이터 전달
 */
Route::get('task/view', function () {
    $task = ['name' => 'Task 1', 'due_date' => '2015-06-01 12:00:11'];
    return view('task.view')->with('task',$task);
});

/**
 * blade() 뷰 + javasrcript 사용
 */
Route::get('task/alert', function () {
    $task = [  'name' => 'Task 1'
             , 'due_date' => '2015-06-01 12:00:11'
             , 'comment' => '<script>alert("welcome");</script>' ];
    return view('task.alert')->with('task',$task);
});

/**
 * 입력값 계산을 위한 라우팅
 */
Route::get('calc/{num}', function ($num) {
    return view('calc.calc')->with('num',$num);
});

/**
 * 블레이드 페이지 접근 금지
 */
Route::get('unless/{level}', function ($level) {
    return view('unless.unless')->with('level',$level);
});

/**
 * 반복문
 */
Route::get('task/list2', function () {
    $tasks = [
        ['name' => 'Response1 클래스 분석' , 'due_date' => '2015-06' ],
        ['name' => 'Response2 클래스 분석' , 'due_date' => '2015-07' ],
        ['name' => 'Response3 클래스 분석' , 'due_date' => '2015-08' ],
    ];
    return view('task.list2')->with('tasks',$tasks);
});