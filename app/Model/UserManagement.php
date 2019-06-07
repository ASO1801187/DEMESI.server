<?php
/**
 * Created by PhpStorm.
 * User: ganng
 * Date: 2019/06/07
 * Time: 14:42
 */

namespace App\UserManagement;

use App\DemesiInterface;


abstract class User implements DemesiInterface\user_interface
{

    //抽象クラスでこれらを実装
    public function flag()
    {
        // TODO: Implement flag() method.
    }

    public function mail()
    {
        // TODO: Implement mail() method.
    }
    public function login()
    {
        // TODO: Implement login() method.
    }

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