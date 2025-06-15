<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

$activities = [
    'activity-pertama' => [
        'title' => 'Activity Pertama',
        'image' => 'img/gedung.png',
        'short_description' => 'Penjelasan singkat Activity Pertama.',
        'long_description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea sapiente tenetur quod dolorum doloremque provident, commodi incidunt eos perspiciatis optio dignissimos ipsum consectetur quisquam sed odio impedit? Praesentium explicabo iusto perspiciatis eaque exercitationem nulla distinctio reiciendis doloremque at voluptatibus, minima adipisci, sunt magni obcaecati? Est ipsa debitis dolor sit aperiam. Pariatur nostrum quibusdam aliquam aspernatur voluptas sequi, blanditiis qui animi nesciunt esse, dicta nobis consectetur laudantium eius ea quisquam! Voluptas aspernatur, doloremque, quidem temporibus, accusamus laudantium facilis iusto pariatur dolores aliquid consequatur harum! Praesentium corrupti adipisci, in ad ab cumque, blanditiis aut delectus molestias obcaecati possimus odio natus sequi magni?',
    ],
    'activity-kedua' => [
        'title' => 'Activity Kedua',
        'image' => 'img/pohon.png',
        'short_description' => 'Penjelasan singkat Activity Kedua.',
        'long_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, distinctio quaerat? Nesciunt porro nihil illum nam culpa blanditiis? Tenetur, autem molestias asperiores similique quibusdam veritatis a reprehenderit ipsa, voluptate laborum atque porro error quos, eveniet tempora deserunt qui iste. Excepturi, hic? Debitis sed doloribus vero sunt rem dolore alias harum repudiandae officiis quibusdam ullam, necessitatibus et molestias. Repellendus dolorem inventore deserunt odit repellat vero provident possimus, neque perspiciatis eaque commodi!',
    ],
    'activity-ketiga' => [
        'title' => 'Activity Ketiga',
        'image' => 'img/kuda.jpg',
        'short_description' => 'Penjelasan singkat Activity Ketiga.',
        'long_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, distinctio quaerat? Nesciunt porro nihil illum nam culpa blanditiis? Tenetur, autem molestias asperiores similique quibusdam veritatis a rd doloribus vero sunt rem dolore alias harum repudiandae officiis quibusdam ullam, necessitatibus et molestias. Repellendus dolorem inventore deserunt odit repellat vero provident possimus, neque perspiciatis eaque commodi!',
    ],
];

$projects = [
    'project-pertama' => [
        'title' => 'Project Pertama',
        'image' => 'img/kuda.jpg',
        'image2' => 'img/gedung.png',
        'short_description' => 'Penjelasan singkat Project pertama.',
        'long_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero magni magnam maxime aspernatur repudiandae, rem quis. Voluptate magni ullam totam quisquam, quas, eum alias dolorem optio velit nisi soluta laborum deserunt, repudiandae odio harum? Veritatis, consequuntur aut? Porro, ipsa quaerat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi velit magni praesentium debitis ab aut, deserunt corporis porro illo magnam, nisi ipsa ad ea dolorem eum adipisci nesciunt inventore odit placeat enim facere eaque. Voluptates hic voluptatum optio officia maiores esse perferendis dolore voluptatibus quod eos. Distinctio optio neque soluta!', 
        'profiles' => [
            ['src' => 'img/firza.jpg', 'alt' => 'Firza Ketoprak'],
            ['src' => 'img/firza.jpg', 'alt' => 'Firza Kebab'],
            ['src' => 'img/firza.jpg', 'alt' => 'Firza Wangsaf'],
            ['src' => 'img/firza.jpg', 'alt' => 'Firza Wangsaf'],
            ['src' => 'img/firza.jpg', 'alt' => 'Firza Wangsaf'],
        ],

    ],
    'project-kedua' => [
        'title' => 'Project Kedua',
        'image' => 'img/gedung.png',
        'image2' => 'img/kuda.jpg',
        'short_description' => 'Penjelasan singkat Project kedua.',
        'long_description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam voluptates, dolor suscipit esse perspiciatis nobis, nisi numquam praesentium, ratione autem quidem error. Commodi ut alias dolores repellendus! Dolor, ab veniam.',
        'profiles' => [
            ['src' => 'img/firza.jpg', 'alt' => 'Firza Ketoprak'],
            ['src' => 'img/firza.jpg', 'alt' => 'Firza Kebab'],
            ['src' => 'img/firza.jpg', 'alt' => 'Firza Wangsaf'],
        ],
    ]
];

Route::get('/activity', function () use ($activities) {
    return view('pages.activity-pages', ['activities' => $activities]);
});

Route::get('/activity/{slug}', function ($slug) use ($activities) {
    if (!array_key_exists($slug, $activities)) {
        abort(404);
    }

    $activity = $activities[$slug];
    return view('activity.detail', ['activity' => $activity]);
})->name('activity.detail');


// projects
Route::get('/projects', function () use ($projects) {
    return view('pages.project-pages', ['projects' => $projects]);
});

Route::get('/projects/{slug}', function ($slug) use ($projects) {
    if (!array_key_exists($slug, $projects)) {
        abort(404);
    }

    $project = $projects[$slug];
    return view('project.detail', ['project' => $project]);
})->name('project.detail');

// ------------------------------------

