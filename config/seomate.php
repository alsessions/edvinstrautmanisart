<?php

return [
    'defaultMeta' => [
        'title' => ['globalSeo.seoTitle'],
        'description' => ['globalSeo.seoDescription'],
        'image' => ['globalSeo.seoImage'],
        
    ],

    'additionalMeta' => [
        'og:type' => 'website',
        'fb:app_id'=> '649307925639147'
    ],

    'defaultProfile' => 'standard',
    
    'fieldProfiles' => [
        'standard' => [
            'title' => ['seoTitle', 'heading', 'title'],
            'description' => ['seoDescription', 'summary'],
            'image' => ['seoImage', 'mainImage']
        ]
    ],
];