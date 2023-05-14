<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * URL: "/example/{id}"
     * id parameter must be numeric.  
     */
    public function index(Request $request, int $id)
    {
        return $id;
    }
    
    /**
     * URL: "/example/full-name/{name}/{surname?}"
     * name and surname parameters must be string.
     */
    public function fullName(Request $request, string $name, string $surname = null)
    {
        return $surname . ' ' . $name;
    }
}
