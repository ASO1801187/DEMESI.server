<?php
/**
 * Created by PhpStorm.
 * User: ganng
 * Date: 2019/06/07
 * Time: 14:42
 */

namespace App\UserManagement;

use App\DemesiInterface;

#抽象クラス
abstract class User implements DemesiInterface\user_interface
{

    #共通処理を実装

    #登録時のフラグを立てる
    public function flag()
    {
        // TODO: Implement flag() method.
    }

    #登録時のメール送信機能
    public function mail()
    {
        // TODO: Implement mail() method.
    }

    #ログイン処理
    public function login()
    {
        // TODO: Implement login() method.
    }

    #パスワードリセット機能
    public function reset()
    {
        // TODO: Implement reset() method.
    }
}

//個人ユーザー
class NormalUser extends User {


    public function getData()
    {
        // TODO: Implement getData() method.
    }

    public function insertData()
    {
        // TODO: Implement insertData() method.
    }

    public function updateData()
    {
        // TODO: Implement updateData() method.
    }

}

//企業ユーザー
class CompanyUser extends User{

    //抽象クラスを実装
    public function getData()
    {
        // TODO: Implement getData() method.
    }

    public function insertData()
    {
        // TODO: Implement insertData() method.
    }

    public function updateData()
    {
        // TODO: Implement updateData() method.
    }
}