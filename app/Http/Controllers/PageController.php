<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Image;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    private $views      = 'landingPage/';
    private $title      = 'Website Cemti';

    private $menu, $image;
    public function __construct(){
        $this->menu = new Menu;
        $this->image = new Image();
    }
    public function index()
    {
        return redirect('/home');
    }

    public function home()
    {
        $images = $this->image->where('idMenu', 1)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Home',
            'images'        => $images
        ];

        return view('landingPage/index', $data);
    }

    public function vision()
    {
        $images = $this->image->where('idMenu', 2)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Vision',
            'images'        => $images
        ];

        return view('landingPage/vision', $data); // Change 'vision' to the name of your view
    }

    public function strategy()
    {
        $images = $this->image->where('idMenu', 3)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Strategy',
            'images'        => $images
        ];

        return view('landingPage/strategy', $data); // Change 'strategy' to the name of your view
    }

    
    public function target()
    {
    
        $images = $this->image->where('idMenu', 4)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Target',
            'images'        => $images
        ];
        
        return view('landingPage/target', $data); // Change 'target' to the name of your view
    }
    
    public function organization()
    {
        $images = $this->image->where('idMenu', 5)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Organization',
            'images'        => $images
        ];

        return view('landingPage/organization', $data); // Change 'organization' to the name of your view
    }
    public function capstone()
    {
        $images = $this->image->where('idMenu', 6)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Capstone',
            'images'        => $images
        ];

        return view('landingPage/capstone', $data); // Change to the name of your view
    }
    public function researchDrant()
    {
        $images = $this->image->where('idMenu', 7)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Reaserch Drant',
            'images'        =>$images
        ];

        return view('landingPage/research-drant', $data); // Change to the name of your view
    }
    public function clusterMedicalRehabilitation()
    {
        $images = $this->image->where('idMenu', 8)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Medical Rehabilitation',
            'images'        => $images
        ];

        return view('landingPage/clus-med-rehab', $data); // Change to the name of your view
    }

    public function clusterMedicalImageProcessing()
    {
        $images = $this->image->where('idMenu', 9)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Medical Image Procesing',
            'images'        => $images
        ];

        return view('landingPage/clus-med-imgpro', $data); // Change to the name of your view
    }


    public function facilities()
    {
        $images = $this->image->where('idMenu', 10)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Facilities',
            'images'        => $images
        ];

        return view('landingPage/facilities', $data); // Change to the name of your view
    }
    public function serviecesEducation(){
        $images = $this->image->where('idMenu', 11)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Education and Training',
            'images'        => $images
        ];
        
        return view('landingPage/serviece-edu', $data);
    }
    public function serviecesProduct(){
        $images = $this->image->where('idMenu', 12)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Servieces Product',
            'images'        => $images
        ];
        
        return view('landingPage/serviece-product', $data);
    }
    public function serviecesSales(){
        $images = $this->image->where('idMenu', 13)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Sales',
            'image'         => $images
        ];
        
        return view('landingPage/serviece-sales', $data);
    }
    public function serviecesConsulting(){
        $data = [
            'title'         => $this->title,
            'page'          => 'Consulting',
        ];
        
        return view('landingPage/serviece-consulting', $data);
    }
    public function productsCommercil(){
        $data = [
            'title'         => $this->title,
            'page'          => 'Products Commercil',
        ];
        
        return view('landingPage/pro-commercil', $data);
    }
    public function event()
    {
        $images = $this->image->where('idMenu', 16  )->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'Event',
            'images'        => $images
        ];

        return view('landingPage/event', $data); // Change to the name of your view
    }
    
    public function news()
    {
        $images = $this->image->where('idMenu', 17)->get();
        $data = [
            'title'         => $this->title,
            'page'          => 'News',
        ];
    
        return view('landingPage/news', $data); // Change to the name of your view
    }
}