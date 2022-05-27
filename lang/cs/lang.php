<?php return [
    'plugin' => [
        'name' => 'Galerie',
        'description' => 'Plugin pro správu galerií',
    ],
    'field' => [
        'name' => [
            'label' => 'Název',
        ],
        'slug' => [
            'label' => 'URL',
        ],
        'description' => [
            'label' => 'Popis',
        ],
        'images' => [
            'label' => 'Obrázky',
            'description' => 'Vyberte obrázky nebo je sem přesuňte ze složky ve vašem počítači.',
        ],
    ],
    'column' => [
        'name' => [
            'label' => 'Název',
        ],
        'slug' => [
            'label' => 'URL',
        ],
        'created_at' => [
            'label' => 'Vytvořeno',
        ],
    ],
    'create' => [
        'title' => 'Vytvořit galerii',
        'flash' => 'Galerie byla úspěšně vytvořena',
    ],
    'update' => [
        'title' => 'Upravit galerii',
        'flash' => [
            'update' => 'Galerie byla úspěšně upravena',
            'delete' => 'Galerie byla úspěšně smazána',
        ],
    ],
    'component' => [
        'gallery' => [
            'name' => 'Galerie',
            'description' => 'Zobrazí vybranou galerii',
            'gallery' => [
                'title' => 'Galerie',
                'description' => 'Vyberte galerii ke zobrazení',
            ],
        ],
    ],
    'privilege' => [
        'default' => 'Přístup k pluginu',
        'gallery' => [
            'create' => 'Vytváření galerií',
            'delete' => 'Mazání galerií',
        ],
    ],
];
