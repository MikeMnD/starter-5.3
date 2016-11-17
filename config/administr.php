<?php

return [
    'prefix'    => 'admin',
    'modules'   => [
        'form',
    ],
    'sidebars'  => [
        \App\Sidebars\AppSidebar::class,
    ],
    'hasLanguages' => true,
];