<?php


$lib = [
    'Lia\\' => [
        '/home/leiha/Studio/lia/lia-kernel/src/',
        '/home/leiha/Studio/lia/lia-database-pdo/src/',
        '/home/leiha/Studio/lia/lia-bridge-angular/src/',
        '/home/leiha/Studio/lia/lia-bridge-dhtmlx/src/',
        '/home/leiha/Studio/lia/lia-bridge-jquery/src/',
        '/home/leiha/Studio/lia/lia-cms/src/',
        '/home/leiha/Studio/lia/lia-crud/src/',
        '/home/leiha/Studio/lia/lia-form/src/',
        '/home/leiha/Studio/lia/lia-listing/src/',
        '/home/leiha/Studio/lia/lia-theme/src/',
    ],
];

foreach($lib as $ns => $path){
    $loader->add($ns, $path);
}