<?php
return [
    'connectors' => [
        'test' => [
            'code' => 'test',
            'type' => 'real',
            'is_source' => 0,
            'is_target' => 1,
            'image' => '',
            'icon' => '',
            'title' => 'Test',
            'installed' => [],
            'description' => 'Test integration',
            'source_model' => '\App\Testhome\Models\SourceModel'
        ]
    ]
];
