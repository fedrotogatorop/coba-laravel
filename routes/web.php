<?php

use Illuminate\Routing\Events\Routing;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fedro Togatorop",
        "email" => "fedrotoga@gmail.com",
        "image" => "FotoG.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "penulis" => "Fedro Togatorop",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dicta repellendus soluta laborum eum ratione, quo, ab
            voluptates eius sequi inventore. Debitis nisi fuga sit soluta eum iste ullam fugiat aliquam cumque, vero laudantium
            sequi deserunt totam atque temporibus consectetur ipsa quia odit quas sapiente est facilis nesciunt? Eaque ipsam nulla
            omnis pariatur officia cumque dolore perspiciatis accusamus! Explicabo amet nostrum libero quod aspernatur quis mollitia
            repudiandae voluptate! Similique asperiores facilis recusandae accusantium maxime sit reiciendis corrupti eveniet
            consectetur culpa."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "penulis" => "Eric",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam consequatur adipisci voluptate repudiandae dolores
        ducimus. Deserunt atque accusantium cumque! Ab dolore, nemo perferendis fugit voluptate eum suscipit labore tempora
        placeat possimus qui quis, aut quidem nesciunt omnis. Sequi est ipsum maxime? Deleniti totam repellendus tenetur rerum
        reprehenderit? Id, enim ullam cum temporibus consequatur repellat, nisi veniam consequuntur quaerat voluptas quidem
        nulla asperiores. Sunt architecto ullam ratione nulla quos explicabo cum inventore aspernatur animi est debitis
        cupiditate nostrum tempora quas neque ut unde iusto dicta cumque velit harum, necessitatibus, beatae earum! Voluptates
        dicta facere ipsa eum. Mollitia ullam perspiciatis sapiente placeat veritatis nihil reprehenderit, aliquid neque quis
        incidunt, cum sint quisquam commodi modi eius vitae quidem nulla, animi quia saepe. Iste, commodi dolorem? Beatae
        asperiores velit amet culpa, quae neque voluptates nostrum cupiditate ad, iusto aliquam sed accusantium quibusdam sunt
        sequi voluptate, exercitationem corporis maiores ipsa. Quasi obcaecati illo odit nemo?
        "
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});
Route::get('/posts/{slug}', function () {
    return view('post');
});
