<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\UserManagement;

function user_conversion(Request $request){
    $json_data = Input::get($request['name']);
    $json_data = json_decode($json_data);
    $array = array();
    foreach ($request['key'] as $value){
        $array[$value] = $json_data->$value;
    }
    return $array;
}

#ルートからここを呼び出す
class Card extends Controller
{
    public function user_insert(Request $request){
        $array = ['name',];                                           //ここにキーを入れる
        $array = [key=>$array,name=>''];            //nameはjsonの名前
        $array = user_conversion($array);
        $array['flag'] =False;
        $result = UserManagement\insertData($array);
        switch ($result){
            case 1:
                $text = "";
                mb_language("Japanese");
                mb_internal_encoding("UTF-8");
                $to = $array['mail'];
                if (mb_send_mail($to, "DEMESIの登録確認について", $text)){

                }else{

                }

            case 2:

            case 3:
        }
        return;
    }

    #細かい部分を話し合うため後で決める
    public function user_update(Request $request){
        $array = ['name',];                                           //ここにキーを入れる
        $array = ['key'=>$array,'name'=>''];      //nameはjsonの名前
        return UserManagement\updateData(user_conversion($array));
    }


    public function user_deleto(Request $request){
        $array = ['id'];                                           //ここにキーを入れる
        $array = ['key'=>$array,'name'=>''];      //nameはjsonの名前
        return UserManagement\deleto(user_conversion($array));
    }


    #疑惑の関数
    public function flag(Request $request,$id){
        $array = [$id];                                           //ここにキーを入れる
        $array = ['key'=>$array,'name'=>''];      //nameはjsonの名前
        return UserManagement\deleto(user_conversion($array));
    }

    function login(Request $request){
        $array = ['name',];                                           //ここにキーを入れる
        $array = ['key'=>$array,'name'=>''];      //nameはjsonの名前
        return UserManagement\deleto(user_conversion($array));

    }




}
