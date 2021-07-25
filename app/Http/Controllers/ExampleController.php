<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * URL: "/test/{id}"
     * id parameter must be numeric.  
     */
    public function index(Request $request, int $id)
    {
        return $id;
    }
    
    /**
     * URL: "/test/foo-bar/{name}/{surname?}"
     * name and surname parameters must be string.
     */
    public function showFullName(Request $request, string $name, string $surname = null)
    {
        return $surname . $name;
    }
}
