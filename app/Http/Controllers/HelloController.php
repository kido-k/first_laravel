<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='noname', $pass='unknown'){
        return <<<EOF
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Hello/Index</title>
            <style>
                body {font-size:16pt; color:#999; }
                h1 {font-size:100pt; text-align:right; color:#eee;
                    margin:-40px 0px -50px 0px; }
            </style>
        </head>
        <body>
            <h1>Index</h1>
            <p>これは、Helloコントローラのindexアクションです。</p>
            <ul>
                <li>ID: {$id}</li>
                <li>PASS: {$pass}</li>
            </ul>
        </body>
        </html>
EOF;
    }
}
