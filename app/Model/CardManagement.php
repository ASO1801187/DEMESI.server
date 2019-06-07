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

    #共通処理を実装

    #名刺の習得
    public function getData()
    {
        // TODO: Implement getData() method.
    }

    #画像生成と保存
    public function imageGeneration()
    {
        // TODO: Implement imageGeneration() method.
    }

    #名刺削除
    public function cardDeleto()
    {
        // TODO: Implement cardDeleto() method.
    }

    #QRコード作成と保存
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