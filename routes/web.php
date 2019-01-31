<?php

Route::get('/', function () {
    return view('welcome');
});

//2-1
// Route::get('hello', function () {
//     return '<html><body><h1>Hello</h1><p>this is sample page</p></body></html>';
// });

// Route::get('hello/{msg?}', function($msg='no massage') {

// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
//     body {font-size:16pt; color:#999; }
//     h1 { font-size:100pt; text-align:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>{$msg}</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

//     return $html;
// });

// 2-2 Double Action
// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

// 2-2 Single Action
// Route::get('hello', 'HelloController');

// 2-2 Request Response
Route::get('hello', 'HelloController@index');


