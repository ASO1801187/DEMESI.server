<?php
/**
 * Created by PhpStorm.
 * User: ganng
 * Date: 2019/06/07
 * Time: 14:42
 */

namespace App\UserManagement;

use App\DemesiInterface;





//個人ユーザー
class NormalUser implements DemesiInterface\root
{


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
class CompanyUser implements DemesiInterface\root
{

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