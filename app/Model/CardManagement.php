<?php
/**
 * Created by PhpStorm.
 * User: ganng
 * Date: 2019/06/08
 * Time: 0:16
 */

namespace App\CardManagement;

use App\DemesiInterface;


//抽象クラス
abstract class Card implements DemesiInterface\card_interface{


    public function getData()
    {
        // TODO: Implement getData() method.
    }

    public function imageGeneration()
    {
        // TODO: Implement imageGeneration() method.
    }

    public function cardDeleto()
    {
        // TODO: Implement cardDeleto() method.
    }

    public function QR()
    {
        // TODO: Implement QR() method.
    }

}


//通常カード
class NormalCard extends Card{
    public function insertData()
    {
        // TODO: Implement insertData() method.
    }

    public function updateData()
    {
        // TODO: Implement updateData() method.
    }

    public function getTemplate()
    {
        // TODO: Implement getTemplate() method.
    }
}


//企業カード
class CompanyCard extends Card{
    public function insertData()
    {
        // TODO: Implement insertData() method.
    }

    public function updateData()
    {
        // TODO: Implement updateData() method.
    }

    public function getTemplate()
    {
        // TODO: Implement getTemplate() method.
    }
}