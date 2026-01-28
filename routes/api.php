<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/courses/search', function (Request $request) {
    $query = $request->query('q');
    
    $courses = Course::where('name', 'like', "%{$query}%")
                     ->orWhere('lecturer', 'like', "%{$query}%")
                     ->get();

    return response()->json($courses);
});