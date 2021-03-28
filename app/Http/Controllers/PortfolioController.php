<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $portfolio=[
            ['title' => 'proyecto #1']
        ];

        return view('portfolio', compact('portfolio'));
    }
}