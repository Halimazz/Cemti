<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    private $views      = 'landingPage/';
    private $title      = 'Website Cemti';

    public function index()
    {
        return redirect('/home');
    }

    public function home()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'Home',
        ];

        return view('landingPage/index', $data);
    }

    public function vision()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-vision',
        ];

        return view('landingPage/vision', $data); // Change 'vision' to the name of your view
    }

    public function strategy()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-strategy',
        ];

        return view('landingPage/strategy', $data); // Change 'strategy' to the name of your view
    }

    public function organization()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-organization',
        ];

        return view('landingPage/organization', $data); // Change 'organization' to the name of your view
    }

    public function target()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-target',
        ];

        return view('landingPage/target', $data); // Change 'target' to the name of your view
    }

    public function clusterMedicalRehabilitation()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-target',
        ];

        return view('landingPage/clus-med-rehab', $data); // Change to the name of your view
    }

    public function clusterMedicalImageProcessing()
    {
        
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-target',
        ];

        return view('landingPage/clus-med-imgpro', $data); // Change to the name of your view
    }

    public function capstone()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-target',
        ];

        return view('landingPage/capstone', $data); // Change to the name of your view
    }

    public function researchDrant()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-target',
        ];

        return view('landingPage/research-drant', $data); // Change to the name of your view
    }
    public function facilities()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-target',
        ];

        return view('landingPage/facilities', $data); // Change to the name of your view
    }
    public function event()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-target',
        ];

        return view('landingPage/event', $data); // Change to the name of your view
    }
    public function news()
    {
        $data = [
            'title'         => $this->title,
            'page'          => 'about-us-target',
        ];

        return view('landingPage/news', $data); // Change to the name of your view
    }
    public function productsCommercil(){
        $data = [
            'title'         => $this->title,
            'page'          => 'products-commercil',
        ];

        return view('landingPage/pro-commercil', $data);
    }
    public function serviecesEducation(){
        $data = [
            'title'         => $this->title,
            'page'          => 'products-commercil',
        ];

        return view('landingPage/serviece-edu', $data);
    }
    public function serviecesProduct(){
        $data = [
            'title'         => $this->title,
            'page'          => 'products-commercil',
        ];

        return view('landingPage/serviece-product', $data);
    }
    public function serviecesSales(){
        $data = [
            'title'         => $this->title,
            'page'          => 'products-commercil',
        ];

        return view('landingPage/serviece-sales', $data);
    }
    public function serviecesConsulting(){
        $data = [
            'title'         => $this->title,
            'page'          => 'products-commercil',
        ];

        return view('landingPage/serviece-consulting', $data);
    }

    
}
