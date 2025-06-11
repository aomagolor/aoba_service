<?php
    do {
        $data = $_POST
        if (!$data) {
            // フォームの初期値
            $data = [
                'name' => '', 'mail' => '', 'password' => '', 'birth_month' => '', 'birth_day' => ''
            ];
            break;
        }
    } while(0);
    
    $name = trim(@$data['name']);
    
    if (!$name) {
        $errors['name'] = '名前が入力されていません。';
    }
    else if (mb_strlen($name) > 10) {
        $errors['name'] = '名前は１０文字以内で入力してください。';
    }
?>