<?php return [
    'plugin' => [
        'name' => 'Gallery',
        'description' => 'Plugin for gallery management',
    ],
    'field' => [
        'name' => [
            'label' => 'Name',
        ],
        'slug' => [
            'label' => 'URL',
        ],
        'description' => [
            'label' => 'Description',
        ],
        'images' => [
            'label' => 'Images',
            'description' => 'Choose or drag and drop images from computer folder.',
        ],
    ],
    'column' => [
        'name' => [
            'label' => 'Name',
        ],
        'slug' => [
            'label' => 'URL',
        ],
        'created_at' => [
            'label' => 'Created',
        ],
    ],
    'create' => [
        'title' => 'Create gallery',
        'flash' => 'Gallery has been successfully created',
    ],
    'update' => [
        'title' => 'Edit gallery',
        'flash' => [
            'update' => 'Gallery has been successfully edited',
            'delete' => 'Gallery has been successfully deleted',
        ],
    ],
    'component' => [
        'gallery' => [
            'name' => 'Gallery',
            'description' => 'Display chosen gallery',
            'id' => [
                'title' => 'Gallery',
                'description' => 'Choose gallery to display',
            ],
        ],
    ],
    'privilege' => [
        'default' => 'Plugin access',
        'gallery' => [
            'create' => 'Creating galleries',
            'delete' => 'Deleting galleries',
        ],
    ],
];
