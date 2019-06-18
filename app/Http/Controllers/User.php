<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserManagement;
use App\mail;

function user_conversion(Request $request){
    $json_data = Input::get($request['name']);
    $json_data = json_decode($json_data);
    $array = array();
    foreach ($request['key'] as $value){
        $array[$value] = $json_data->$value;
    }
    return $array;
}

#返すデータの形式を後で話し合う


#ルートからここを呼び出す
class User extends Controller
{
    public function user_insert(Request $request){
        $array = ['name',];                                           //ここにキーを入れる
        $array = [key=>$array,name=>''];                              //nameはjsonの名前
        $array = user_conversion($array);
        $array['flag'] =False;
        $result = UserManagement\insertData($array);
        if($result == 1){                                             //返信するデータにエラーが発生する可能性あり
            $result = mail\mail();
            if($result == 0){
                $result = 4;
            }

        }
        return $result;
        // １，正常終了　２，アドレス重複　３，電話番号重複　４，２，３が重複　５、メール送信失敗
    }

    #細かい部分を話し合うため後で決める
    public function user_update(Request $request){
        $array = ['name',];                                           //ここにキーを入れる
        $array = ['key'=>$array,'name'=>''];                          //nameはjsonの名前
        return UserManagement\updateData(user_conversion($array));
    }


    public function user_deleto(Request $request){
        $array = ['id'];                                              //削除対象ユーザのIDを受け取る
        $array = ['key'=>$array,'name'=>''];                          //nameはjsonの名前
        return UserManagement\deleto(user_conversion($array));
    }


    #最初の登録確認メールから遷移
    #登録フラグを完了にする
    public function flag(Request $request,$id){
        $array = [$id];                                                //URLのリクエストパラメータから取り出す
        $array = ['key'=>$array,'name'=>''];                           //nameはjsonの名前
        return UserManagement\flag(user_conversion($array));
    }

    #名前とパスワードを受け取ってTrueかFalseを返す
    function login(Request $request){
        $array = ['name','password'];
        $array = ['key'=>$array,'name'=>''];                           //nameはjsonの名前
        return UserManagement\login(user_conversion($array));

    }

    #ユーザーデータの習得
    #
    function getData(Request $request){
        $id = $request['id'];
        return json_encode(UserManagement\getData($id));
    }


    #リセット用関数
    #メールアドレスを受け取り存在するか検索
    #その後存在した場合メールアドレス宛にリセット用URL送信
    #存在しなかったらFalseを返す
    function reset_mail(Request $request){
        $array = ['mail'];
        $array = ['key'=>$array,'name'=>''];                        #メールアドレスが存在するか検索する
        if(UserManagement\updateData(user_conversion($array))){
            $result = mail\mail();
        }
        return $result;
    }

    #idとパスワードを受け取り更新する
    function reset(Request $request){
        $array = ['id','password'];
        $array = ['key'=>$array,'name'=>''];
        return UserManagement\reset(user_conversion($array));
    }

}
