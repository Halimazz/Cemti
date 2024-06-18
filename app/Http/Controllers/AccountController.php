<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use App\Models\UsersModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    private $views      = 'dashboard-account';
    private $url        = 'dashboard-account';
    private $title      = 'Website Cemti';
    
    /**
     * Display a listing of the resource.
     */
        private $mUsers,$userRole;
     public function __construct(){
        $this->mUsers = New UsersModel();
        $this->userRole = New UserRole();
     }
    public function index()
    {

        $userRole = $this->userRole->get();
        $mUsers = $this->mUsers->get();
        $data = [
            'title'         => $this->title,
            'url'           => $this->url,
            'page'          => 'Dashboard',
            'mUsers'         => $mUsers,
            'userRole'      => $userRole
        ];

        return view('dashboard-account/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userRole = $this->userRole->get();
        $mUsers = $this->mUsers->get();
        $data = [
            'title'         => $this->title,
            'url'           => $this->url,
            'page'          => 'Dashboard',
            'mUsers'         => $mUsers,
            'userRole'      => $userRole
        ];

        return view('dashboard-account/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataUser = [
            'username'          => $request->username,
            'password'          => Hash::make($request->password),
            'sandi'             => $request->password,
            'status'            => '0',
            'idRole'            => $request->idRole,
        ];
        // echo json_encode($dataUser); die;
        $this->mUsers->create($dataUser);

        return redirect("$this->url")->with('sukses', 'Users berhasil di tambahkan');
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
