<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	// Menampilkan semua kategori
	public function index()
	{
		$categories = Category::all();
		return $categories;
	}

	// Search kategori berdasarkan name
	public function search(Request $request)
	{

	}

	// Hapus kategori
	public function delete(Request $request)
	{

	}

	// Restore data yang tadi di delete
	public function restore(Request $request)
	{

	}

	// Hapus permanen data
	public function destroy(Request $request)
	{

	}
}
