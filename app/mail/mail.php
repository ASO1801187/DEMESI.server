<?php
/**
 * Created by PhpStorm.
 * User: ganng
 * Date: 2019/06/17
 * Time: 12:39
 */

namespace App\mail;
use Illuminate\Support\Facades\Request;

require 'vendor/autoload.php';
require 'setting.php';
// PHPMailerのインスタンス生成

class mail{
    public function mail(Request $request){
        $result = 1;
        $mail = new PHPMailer();

        $mail->isSMTP(); // SMTPを使うようにメーラーを設定する
        $mail->SMTPAuth = true;
        $mail->Host = MAIL_HOST; // メインのSMTPサーバーを指定する
        $mail->Username = MAIL_USERNAME; // SMTPユーザー名
        $mail->Password = MAIL_PASSWORD; // SMTPパスワード
        $mail->SMTPSecure = MAIL_ENCRPT; // TLS暗号化を有効にし、 「SSL」も受け入れます
        $mail->Port = SMTP_PORT; // 接続するTCPポート

        // メール内容設定
        $mail->CharSet = "UTF-8";
        $mail->Encoding = "base64";
        $mail->setFrom（MAIL_FROM,MAIL_FROM_NAME）;
        $mail->addAddress（'joe@example.net', 'Joe User'）; //受信者を追加する
        $mail->addReplyTo（'info@example.com ','Information'）;
        $mail->addCC（'cc@example.com'）; // CCで追加
        $mail->addBcc('bcc@example.com'); // BCCで追加
        $mail->Subject = MAIL_SUBJECT; // メールタイトル
        $mail->isHTML(true);    // HTMLフォーマットの場合はコチラを設定します
        $body = 'メールの中身';

        $mail->Body  = $body; // メール本文
        // メール送信の実行
        if(!$mail->send()) {
            $result = 1;
        } else {
            $result = 0;
        }
        return $result;
    }

}
