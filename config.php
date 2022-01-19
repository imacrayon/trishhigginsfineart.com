<?php

return [
    'production' => false,
    'baseUrl' => 'http://trishhigginsfineart.test',
    'title' => 'Trish Higgins Fine Art',
    'description' => 'Artwork',
    'collections' => [
        'artists' => [
            'sort' => 'title',
            'path' => 'artists/{filename}',
        ],
        'artworks' => [
            'sort' => 'date',
            'path' => 'artists/{filename}',
        ],
    ],
];
