<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
    <?php
        echo "send_mail.phpです";
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        $name = $_POST['name']; //山田太郎
        $email = $_POST['email']; //test@test.com
        $phone_number = $_POST['phone_number']; //電話番号
        $content = $_POST['content']; //問い合わせ内容
        $to = "cnmmatsumoto@gmail.com";//自分のメールアドレス
        $title = "ポートフォリオサイトからお問い合わせがありました";

        // メッセージ部分
        $message = '';
        $message .= '--' . "\r\n";
        $message .= '問い合わせがあった内容はこちらです。' . "\r\n";
        $message .= 'ーーーーーー' . "\r\n";
        $message .= 'お名前：' . $name . "\r\n";
        $message .= 'メールアドレス' . $email . "\r\n";
        $message .= '電話番号：' . $phone_number . "\r\n";
        $message .= 'お問い合わせ内容：' . $content . "\r\n";
        
        // テスト環境構築
        // $email->Host       = 'sandbox.smtp.emailtrap.io';
        // $email->Port = 465;
        // $email->Username   = '1d65a83212583f'; //Username入力
        // $email->Password   = '90b09cda2049fe';    //Password入力
        // $email->SMTPAuth   = true;
        // $email->SMTPSecure = 'tls'; //TLSで設定

        if(mail($to, $title, $message))
        {
            echo "お問い合わせありがとうございました。";
        }
        else
        {
            echo "メール送信失敗です";
        }
        header('Location: ' . '<index class="html"></index>', true , 301);
        exit();
    ?>
    </body>
</html>
