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

    public function test9(){
        $model = new Member();
        $data = $model->find(4)->toArray();
        $data = $model->where('id','>', '1')->first()->toArray();
//        $data = Member::find(4)->toArray();
        dd($data);
    }
    //自动验证
    public function test13(Request $request){
        if(Input::method() == 'POST'){
            $this->validate($request,[
               'name' => 'required|min:2|max:20',
                'age' => 'required|min:1|max:100|integer',
                'email' => 'required|email',
                'captcha' => 'required|captcha'
            ]);
            dump(1);
        }else{
            return view('test13');

        }
    }
    //文件上传
    public function test14(Request $request){
        if(Input::method() == 'POST'){
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()){
//                $request->file('avatar')->getClientOriginalName();
                $path = md5(time() . rand(100000,999999)).'.'.$request->file('avatar')->getClientOriginalExtension();
                $request->file('avatar')->move('./uploads',$path);
                $member = new Member();
                $data = $request->all();
                $data['avatar'] = './uploads/'.$path;
                $result = $member->create($data);
                if($result){
                    return redirect('/test/test14');
                }
            }
        }else{
            return view('test14');

        }
    }

    //分页
    public function test15(){
        $member = new Member();
        $data = $member->paginate(1);
        return view('test15',[
            'data' => $data
        ]);
    }

    public function test16(){
        return view('test16');
    }
    //响应json
    public function test17(){
        $data = Member::all();
//        return \Response::json($data);
        return response()->json($data);
    }

}
