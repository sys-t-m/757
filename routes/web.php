<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/copertine', function () {
    return view('copertine');
})->name('copertine');

Route::get('/copertine/{id}', function ($id) {
    return view('copertine-show', ['id' => $id]);
})->name('copertine.show');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');

Route::get('/contattaci', function () {
    return view('contattaci');
})->name('contattaci');

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', function () {
        $posts = \App\Models\Post::latest()->get();

        // Fallback for development if no posts exist
        if ($posts->isEmpty()) {
            $posts = collect([
                (object)[
                    'title' => 'Benvenuti nel nostro nuovo blog',
                    'slug' => 'benvenuti',
                    'content' => 'Siamo felici di annunciare l\'apertura del nostro blog dove condivideremo le ultime novità e idee.',
                    'excerpt' => 'Siamo felici di annunciare l\'apertura del nostro blog...',
                    'image' => 'https://picsum.photos/seed/blog1/600/400',
                    'created_at' => now()
                ],
                (object)[
                    'title' => 'L\'arte della creatività',
                    'slug' => 'arte-creativita',
                    'content' => 'Esploriamo cosa significa essere creativi nel mondo moderno e come trovare l\'ispirazione ogni giorno.',
                    'excerpt' => 'Esploriamo cosa significa essere creativi nel mondo moderno...',
                    'image' => 'https://picsum.photos/seed/blog2/600/400',
                    'created_at' => now()->subDays(2)
                ],
                (object)[
                    'title' => 'Dietro le quinte del brand 757',
                    'slug' => 'dietro-le-quinte',
                    'content' => 'Un viaggio nel processo creativo che ha portato alla nascita di 757.',
                    'excerpt' => 'Un viaggio nel processo creativo che ha portato alla nascita di 757...',
                    'image' => 'https://picsum.photos/seed/blog3/600/400',
                    'created_at' => now()->subDays(5)
                ]
            ]);
        }

        return view('blog.index', compact('posts'));
    })->name('index');

    Route::get('/{slug}', function ($slug) {
        return 'Blog Show: ' . $slug;
    })->name('show');
});

Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/', function () {
        return 'Shop Index';
    })->name('index');

    Route::get('/{slug}', function ($slug) {
        return 'Shop Show: ' . $slug;
    })->name('show');
});
