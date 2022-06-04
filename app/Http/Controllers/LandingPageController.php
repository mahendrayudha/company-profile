<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CategoryProduct;
use App\Models\Team;
use App\Models\Contact;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = CategoryProduct::all();
        $teams = Team::all();
        $contacts = Contact::first();
        return view('pages.landing_page.index', [
            'contacts' => $contacts,
            'products' => $products,
            'categories' => $categories,
            'teams' => $teams,]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
