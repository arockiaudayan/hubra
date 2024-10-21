<?php

namespace App\Http\Controllers;

use App\Models\Store;

class StoreController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $stores = Store::get();
        return view('stores.index', compact('stores'));
    }
}
