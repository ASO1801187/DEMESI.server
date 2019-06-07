<?php
/**
 * Created by PhpStorm.
 * User: ganng
 * Date: 2019/06/07
 * Time: 14:33
 */

namespace App\DemesiInterface;


interface root
{
    public function getData();
    public function insertData();
    public function updateData();
}

interface user_interface extends root{
    public function reset();
    public function flag();
    public function mail();
    public function login();
}

interface card_interface extends root{
    public function getTemplate();
    public function cardDeleto();
    public function QR();
    public function imageGeneration();
}