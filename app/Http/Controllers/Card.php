<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use App\CardManagement;
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
    public function user_insert(){
        $array = ['name',];                         //ここにキーを入れる
        $array = [key=>$array,name=>''];            //nameはjsonの名前
        $obj = new UserManagement\NormalUser();
        $obj->insertData(user_conversion($array));
        return ;
    }

    public function user_update(){
        $array = ['name',];                         //ここにキーを入れる
        $array = [key=>$array,name=>''];            //nameはjsonの名前
        $obj = new UserManagement\NormalUser();
        $obj->updateData(user_conversion($array));
        return ;
    }

    public function deleto_date(){
        $array = ['name',];                         //ここにキーを入れる
        $array = [key=>$array,name=>''];            //nameはjsonの名前
        $obj = new UserManagement\NormalUser();
        $obj-> cardDeleto(user_conversion($array));
        return ;
    }

    public function get_date(){
        $array = ['name',];                         //ここにキーを入れる
        $array = [key=>$array,name=>''];            //nameはjsonの名前
        $obj = new UserManagement\NormalUser();
        $obj-> getData(user_conversion($array));
        return ;
    }
}
