<?php
    echo 123;
    echo '<br>';
    echo 'テスト';
    echo '<br>';

    $lang = '日本語';
    echo $lang;
    echo '<br>';

    const MAX = 10;
    echo MAX;
    echo '<br>';

    $num_1 = [10, 20, 30];
    echo $num_1[0];
    echo '<pre>';
    var_dump($num_1);
    echo '<pre>';

    $num_2 = [
        ['blue', 'yellow', 'red'],
        ['青', '黄', '赤']
    ];

    var_dump($num_2);
    echo '<br>';
    echo $num_2[1][1];
    echo '<br>';

    $member = [
        'name' => '本田',
        'height' => '180',
        'hobby' => 'サッカー'
    ];

    echo '<pre>';
    var_dump($member);
    echo '<pre>';
    echo $member['name'];

    $member_2 = [
        '1組' => [
            'first' => '本田',
            'second' => '成田'
        ],
        '2組' => [
            'first' => '香川',
            'second' => '遠藤'
        ]
    ];

    echo '<pre>';
    var_dump($member_2);
    echo '<pre>';
    echo $member_2['1組']['first'];

    $height = 180;
    if($height === 180){
            echo '本田さんの身長は'.$height.'cmです!';
        } elseif($height === 160){
        echo '本田さんの身長は'.$height.'cmです!';
        } else{
            echo '本田さんの身長は180cmでも、160cmででもありません!';
    }

    echo '<br>';

    $speed = 100;
    if($speed >= 100){
        echo 'スピード違反です!';
    } else {
        echo 'スピード違反ではありません!';
    }

    echo '<br>';

    $data = 'hello';
    if(!empty($data)){
        echo 'データは空ではありません';
    }

    echo '<br>';

    $colors = [
        '明るい' => '白',
        '暗い' => '黒'
    ];
    foreach($colors as $key => $value){
        echo $key.'色は'.$value.'です!';
        echo '<br>';
    }

    for($num = 0; $num<10; $num++){
        echo $num.'回目の処理';
        echo '<pre>';
    }

    // function test(引数){
    //     処理
    //     return 戻り値
    // }

    function test(){
        echo 'テスト';
    }
    test();

    echo '<pre>';

    function comment($string){
        echo $string;
    }
    comment('コメントです!');

    echo '<pre>';

    $morning = 'おはよう';
    $noon = 'こんにちは';
    $night = 'こんばんは';

    function greeting($string){
        echo $string;
    }
    greeting($noon);

    echo '<br>';

    $text1 = 'abc';
    echo strlen($text1);

    echo '<br>';

    $text2 = 'あいう';
    echo mb_strlen($text2);

?>