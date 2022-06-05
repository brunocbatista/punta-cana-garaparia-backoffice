<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function viewCategories()
    {
        return Inertia::render('Category');
    }
}
