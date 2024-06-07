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
        return view('organization'); // Change 'organization' to the name of your view
    }

    public function target()
    {
        return view('target'); // Change 'target' to the name of your view
    }

    public function clusterMedicalRehabilitation()
    {
        return view('cluster-medical-rehabilitation'); // Change to the name of your view
    }

    public function clusterMedicalImageProcessing()
    {
        return view('cluster-medical-image-processing'); // Change to the name of your view
    }

    public function clusterMedicalInstrumentalCapstone()
    {
        return view('cluster-medical-instrumental-capstone'); // Change to the name of your view
    }

    public function clusterMedicalInstrumentalResearchDrant()
    {
        return view('cluster-medical-instrumental-research-drant'); // Change to the name of your view
    }

    
}
