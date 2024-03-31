<?php
return [

// !!!!! 关于图片路径为：/assets/bing/img/xx.jpg

    
    // banner首页广告位
    "banner"=>[
        // 留空不开启
        "img" => "/assets/bing/img/banner.png",
        // 填写完整的网址
        "a" => "/"
    ],


// 商品 火爆 新品上架
    'huobao' => '3',
    'xinpin' => '10',



    // 是否开启站长信息栏 0不开启 1开启
    "zz"=>"1",

    // 站长头像     留空不开启
    "zz_img" => "/assets/bing/img/bear.png",
    // 站长名称     留空默认站点名称
    'zz_name' => 'Bear',
    // 站长信息     留空无信息
    "zz_xx" => [
        // 需要增加信息 按下列格式
        "1"=>"有问题随时联系~",
    ],




    // 联系方式
    "lx" => [
        "1" => 'https://t.me/bearup,Telegram',
        "2" => 'mr42000,WeChat',
    ],




    //  提示框时间 颜色(空:默认白色透明):text-bg-primary text-bg-secondary text-bg-success text-bg-danger text-bg-warning text-bg-info text-bg-light text-bg-dark
     "toasts" => [
        "time"=>"3500",
        "color"=>"text-bg-light"
     ],




    // 友情链接
    'yq'=>[
        '1'=>['ChatGPT 镜像地址','https://cws.beary.in/'],
        '2'=>['Telegram 频道','https://t.me/bear_note']
    ],

];
