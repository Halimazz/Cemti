<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $views      = 'dashboard-post';
    private $url        = 'dashboard-post';
    private $title      = 'Website Cemti';
    private $menu, $image;
    public function __construct(){
        $this->menu = new Menu;
        $this->image = new Image();
    }
    public function index()
    {
        $menuItems = [
            2 => 'vision',
            3 => 'strategy',
            4 => 'target',
            5 => 'organization',
            6 => 'capstone',
            7 => 'researchDrant',
            8 => 'medicalRehabilitation',
            9 => 'medicalImageProcessing',
            10 => 'facilities',
            11 => 'education',
            12 => 'productDevelopment',
            13 => 'sales',
            14 => 'consulting',
            15 => 'commercil',
            16 => 'event',
            17 => 'news'
        ];
    
        $data = [
            'title' => $this->title,
            'url' => $this->url,
            'page' => 'Dashboard'
        ];
    
        foreach ($menuItems as $idMenu => $name) {
            $data[$name] = $this->image->where('idMenu', $idMenu)->paginate(4);
        }
    
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
            // Validasi data yang diterima
    $request->validate([
        'title' => 'required|string|max:255',
        'idMenu' => 'required|integer',
        'description' => 'nullable|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024', // Validasi gambar max 1024 KB
    ]);

    // Ambil ID pengguna dari sesi atau dari Auth
    $idAdmin = session('users_id');

    // Simpan gambar ke penyimpanan dan dapatkan jalurnya
    $imagePath = $request->file('image')->store('post-images');

    // Siapkan data untuk disimpan
    $dataImage = [
        'title' => $request->title,
        'idAdmin' => $idAdmin,
        'idMenu' => $request->idMenu,
        'description' => $request->description,
        'image' => $imagePath,
    ];


    // Simpan data ke database
    $this->image->create($dataImage);

    // Redirect atau kirim response lain sesuai kebutuhan
    return redirect()->back()->with('success', 'Data berhasil disimpan');
        
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
        // Ambil data content berdasarkan $id
        $content = Image::findOrFail($id); // Ganti Content dengan nama model yang sesuai
    
        // Ambil data menu
        $menu = $this->menu->get(); // Asumsi $this->menu adalah instance model atau repository yang benar
    
        // Daftar nama menu yang diinginkan
        $menuItems = [
            2 => 'vision',
            3 => 'strategy',
            4 => 'target',
            5 => 'organization',
            6 => 'capstone',
            7 => 'researchDrant',
            8 => 'medicalRehabilitation',
            9 => 'medicalImageProcessing',
            10 => 'facilities',
            11 => 'education',
            12 => 'productDevelopment',
            13 => 'sales',
            14 => 'consulting',
            15 => 'commercil',
            16 => 'event',
            17 => 'news'
        ];
    
        // Buat data untuk dikirim ke view
        $data = [
            'title' => $this->title, // Pastikan $this->title sudah didefinisikan sebelumnya
            'url' => $this->url, // Pastikan $this->url sudah didefinisikan sebelumnya
            'page' => 'Edit Data Post',
            'menu' => $menu,
            'content' => $content, // Menyertakan data content yang ingin diedit
        ];
        // dd($data);
    
        // Ambil data gambar sesuai dengan idMenu dari $menuItems
        foreach ($menuItems as $idMenu => $name) {
            $data[$name] = $this->image->where('idMenu', $idMenu)->get(); // Mengambil semua data tanpa pagination
        }
    
        // Kirim data ke view
        return view('dashboard-post/edit', $data);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validate incoming request
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'idMenu' => 'required|exists:menu,id', // Adjust 'menus' with your actual table name for menu
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust validation rules for image upload
    ]);

    try {
        // Find the content by ID
        $content = Image::findOrFail($id); // Replace YourModel with your actual model name

        // Update the content data
        $content->title = $validatedData['title'];
        $content->description = $validatedData['description'];
        $content->idMenu = $validatedData['idMenu'];

        // Process image if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('post-images', $imageName); // Adjust storage path as needed
            $content->image = 'post-images/' . $imageName; // Adjust path to match storage setup
        }

        // Save the updated content
        $content->save();

        // Return with success message
        return redirect()->route('route.name')->with('success', 'Content updated successfully.'); // Replace 'route.name' with your actual route

    } catch (\Exception $e) {
        // Return with error message if any exception occurs
        return redirect()->back()->with('error', 'Failed to update content. ' . $e->getMessage());
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Temukan data berdasarkan ID
            $content = Image::findOrFail($id); // Ganti YourModel dengan nama model Anda
    
            // Hapus gambar terkait jika ada
            if (!empty($content->image)) {
                Storage::delete( basename($content->image_path));
            }
    
            // Hapus data dari database
            $content->delete();
    
            // Redirect dengan pesan sukses
            return redirect()->route('route.name')->with('success', 'Content deleted successfully.'); // Ganti 'route.name' dengan nama route yang sesuai
    
        } catch (\Exception $e) {
            // Redirect dengan pesan gagal jika terjadi kesalahan
            return redirect()->back()->with('error', 'Failed to delete content. ' . $e->getMessage());
        }
    }
    
}
