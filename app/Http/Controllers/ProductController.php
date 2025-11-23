<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari tabel products
        $products = Project::all();

        // Mengirim data $products ke view 'products.index'
        return view('products.index', compact('products'));
    }
}
