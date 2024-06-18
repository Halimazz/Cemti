<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $views      = 'auth';
    private $url        = '';
    private $title      = 'Halaman Login';

    private $mUser,$userRole;

    public function __construct()
    {
        $this->mUser    = new UsersModel();
        $this->userRole = New UserRole();

    }
    //LOGIN
    public function login(){
        $data = [
            'title'         => $this->title,
            'url'           => $this->url,
            'page'          => '',
        ];
        // View
        return view("loginPage/index", $data);
    }
    public function loginProses(Request $request)
    {
        // Validate
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        // Get Data
        $users = $this->mUser->where('username', $request->username)->first();
        // Check User
        
        if ($users == null) {
            return redirect()->back()->with('gagal', 'Pengguna Tidak Ditemukan');
        }
        
        // Check User Status
        if ($users->status != 1) {
            return redirect()->back()->with('gagal', 'Pengguna Tidak Aktif');
        }
        // dd($users);
        // Check User Password
        if (!Hash::check($request->password, $users->password)) {
            return redirect()->back()->with('gagal', 'Kata Sandi Salah');
        }
        // Table user and Update Last Login
        $dataUser = [
            'lastLogin' => date('Y-m-d H:i:s'),
        ];
        // dd($dataUser);
        $this->mUser->where('id', $users->id)->update($dataUser);
        // dd($dataUser);
        // echo json_encode($users); die;
        if($users->idRole == 1){
            $session = [
                'users_id'  => $users->id,
                'username'  => $users->username,
                'nama'      => $users->nama,
                'role'      => $users->idRole,
                'isLogin'   => true,
            ];

            session($session);
            // dd($request->all());
            return redirect('/home')->with('sukses', 'Berhasil Login');
        } 
        else if($users->idRole == 2){
            $session = [
                'users_id'  => $users->id,
                'username'  => $users->username,
                'nama'      => $users->nama,
                'role'      => $users->idRole,
                'isLogin'   => true,
            ];

            session($session);
            // dd($session);
            // return redirect('admin-puskesmas/master-patient/home/?view=home')->with('sukses', 'Berhasil Login');
        }
        else if($users->idRole == 3){
            $session = [
                'users_id'  => $users->id,
                'username'  => $users->username,
                'nama'      => $users->nama,
                'role'      => $users->idRole,
                'isLogin'   => true,
            ];

            session($session);
            // dd($session);
            // return redirect('petugas-puskesmas/master-patient/home/?view=home')->with('sukses', 'Berhasil Login');
        }
        else {
            return redirect('login')->with('gagal', 'Anda tidak memeiliki hak akses');
        }
        
       
       
        // Response
    }

    public function register(){
        $userRole = $this->userRole->get();

        $data = [
            'title'         => 'Halaman Register',
            'url'           => $this->url,
            'page'          => 'Halaman Register',
            'userRole'      => $userRole
        ];
        // View
        return view($this->views . "/create", $data);
    }

    public function registerProses(Request $request){

        //validasi
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $dataUser = [
            'username'          => $request->username,
            'password'          => Hash::make($request->password),
            'sandi'             => $request->password,
            'status'            => 1,
            'idRole'            => 1,
        ];
        // echo json_encode($dataUser); die();
        $users = $this->mUser->create($dataUser);
        return redirect('/login')->with('success', 'Berhasil Daftar, Silahkan Login!');
    }
    public function logout()
    {
        session()->flush();
        // session()->forget('idPPeriode');
        return redirect('login');
    }
}
