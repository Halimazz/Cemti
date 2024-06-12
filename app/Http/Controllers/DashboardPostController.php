<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $views      = 'dashboard-post';
    private $url        = 'dashboard-post';
    private $title      = 'Website Cemti';
    private $menu;
    public function __construct(){
        $this->menu = new Menu;
    }
    public function index()
    {
        $data = [
            'title'         => $this->title,
            'url'           => $this->url,
            'page'          => 'Dashboard',
        ];

        return view('dashboard-post/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = $this->menu->get();
        $data = [
            'title'         => $this->title,
            'url'           => $this->url,
            'page'          => 'Tambah Data Post',
            'menu'          =>$menu

        ];
       

        return view($this->views . "/create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
