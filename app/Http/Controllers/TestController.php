<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Home\Member;

class TestController extends Controller
{
    public function test1(){
        echo Input::get('id','123');
        dd(Input::get('id'));
        dd(Input::all());
    }

    public function add(){
        $db = DB::table('member');
//        $result = $db->insert([
//           [
//               'name' => '馬冬梅',
//               'age' => '18',
//               'email' => 'mdm@qq.com',
//           ],
//            [
//                'name' => '海妹妹',
//                'age' => '18',
//                'email' => 'mdm@qq.com',
//            ]
//        ]);
        $result2 = $db->insertGetId([
            'name' => 'gege',
            'age' => '18',
            'email' => 'mdm@qq.com',
        ]);
        dd($result2);
    }

    public function update(){
        $db = DB::table('member');
        $result = $db->where('id','1')->update([
            'name' => '張三丰'
        ]);
        dd($result);
    }

    public function select(){
        $db = DB::table('member');
        $result = $db->get();
        $result = $db->where('id','<','3')->get()->all();
        $result = $db->where('id','<','3')->where('age','>', '20')->get();
        $result = $db->where('id','<','3')->orWhere('age','>', '10')->get()->values();
        $result = $db->select('name','email')->get();
        $result = $db->offset(1)->limit(2)->get();
        dd($result);
    }

    public function del(){
        $db = DB::table('member');
        $result = $db->where('id','1')->delete();
        dd($result);
    }

    public function test2(){
        $date = date('Y-m-d H:i:s',time());
        $time = strtotime('+1 year');
        $db = DB::table('member');
        $data = $db->get();
        $day = date('N');
        return view('test2',[
            'date' => $date,
            'time' => $time,
            'data' => $data,
            'day' => $day
        ]);
    }

    public function test3(){
        return view('main',[]);
    }

    public function test4(){
        return view('test4',[]);
    }

    public function test5(){
        return '請求成功';
    }

    public function test6(){
        $model = new Member();
        $model->name  = 'dave';
        $model->age  = '14';
        $model->email  = 'test@qq.com';
        $result = $model->save();
        dd($result);
    }

    public function test10(){
        return view("test10");
    }

    public function test11(Request $request){
        $model = new Member();
        $data = $request->all();
//        dump($data);die;
        $result = $model->create($data);
        dump($request);die;
    }

}
