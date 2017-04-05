<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * 할일 목록을 축력
     * @retrun Response
     * @return $this
     */
    public function list3()
    {
        $tasks = [
        ['name' => 'Response1-1 클래스 분석' , 'due_date' => '2015-06' ],
        ['name' => 'Response2-2 클래스 분석' , 'due_date' => '2015-07' ],
        ['name' => 'Response3-3 클래스 분석' , 'due_date' => '2015-08' ],
        ];
        return view('task.list3')->with('tasks',$tasks);
    }
    /**
     * 컨트롤러 매개 변수
     * ex : http://localhost:8000/task/param/3/option7?name=11
     * @param int $id
     * @param string $arg
     * @return array
     */
    public function param(Request $request, $id = 1, $arg = 'argument'){
//        return ['id' => $id, 'arg' => $arg];
//        return $request->path();
//        return $request->get('name');
        dump([
                'path' => $request->path(),
                'url' => $request->url(),
                'fullUrl' => $request->fullUrl(),
                'method' => $request->method(),
                'name' => $request->get('name'),
                'ajax' => $request->ajax(),
                'header' => $request->header(),
            ]);
    }
}
