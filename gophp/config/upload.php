<?php
//默认上传配置
return [

    'driver'       => 'local',
    'local'        => [
        'max_size'     => 8,
        'allow_suffix' => 'doc|xls|ppt|txt|zip|rar|jpg|jpeg|png',
        'save_dir'   => 'upload',
        'save_name'  => '',
    ],
    'ftp'          => [
        'max_size'     => 8,
        'allow_suffix' => 'doc|xls|ppt|txt|zip|rar|jpg|jpeg|png',
    ],
    
    'qiniu'        => [],

];


