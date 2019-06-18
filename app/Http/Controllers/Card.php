<?php

namespace App\Http\Controllers;

#ルートからここを呼び出す
use http\Env\Request;
use App\CardManagement;

function card_conversion(Request $request){
    $json_data = Input::get($request['name']);
    $json_data = json_decode($json_data);
    $array = array();
    foreach ($request['key'] as $value){
        $array[$value] = $json_data->$value;
    }
    return $array;
}


class Card extends Controller
{
    function getTemplate(Request $request){
        #テンプレート一覧を習得
        #パラメータが入っていたらテンプレートを返す
    }

    function imageGeneration(Request $request){

    }

    function cardDeleto(Request $request){

    }

    function QR(Request $request){

    }

    function insertData(Request $request){

    }

    function updateData(Request $request){

    }

    function getData(Request $request){

    }



}
