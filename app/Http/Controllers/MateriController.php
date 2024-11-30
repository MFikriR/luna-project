<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function bab1($page)
    
    {
        $pages = [
            1 => 'bab1.page1',
            2 => 'bab1.page2',
            3 => 'bab1.page3'
        ];

        if (!array_key_exists($page, $pages)) {
            abort(404);
        }

        return view($pages[$page]);
    }

}
