<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function AboutUs()
    {
        $instructors = [
            [
                'name' => 'Abin Benny',
                'image' => '1.jpg',
                'description' => 'Thrissur District',
            ],
            [
                'name' => 'Sobin Thomas',
                'image' => '2.png',
                'description' => 'Bangalore',
            ],
            [
                'name' => 'Angle Chacko',
                'image' => '3.jpg',
                'description' => 'Thrissur Dojo',
            ],
            [
                'name' => 'Alan Thankachan',
                'image' => '4.jpg',
                'description' => 'Thrissur Dojo',
            ],
            [
                'name' => 'Aaron Saji K',
                'image' => '5.jpg',
                'description' => 'Thrissur Dojo',
            ],
            [
                'name' => 'Hisham',
                'image' => '6.jpg',
                'description' => 'Bangalore Dojo',
            ],
            [
                'name' => 'Lawrance',
                'image' => '7.jpg',
                'description' => 'Honbu Dojo,Bangalore',
            ],
            [
                'name' => 'Ragavendra',
                'image' => '8.jpg',
                'description' => 'Bangalore Dojo',
            ],
            [
                'name' => 'Sreeraj',
                'image' => '9.jpg',
                'description' => 'Malappuram Dojo',
            ],
            [
                'name' => 'Ratheesh',
                'image' => '10.jpg',
                'description' => 'Malappuram District',
            ],
            [
                'name' => 'Manoj',
                'image' => '11.jpg',
                'description' => 'Wayanad District',
            ],
            [
                'name' => 'Shashank S',
                'image' => '12.jpg',
                'description' => 'Bangalore Dojo',
            ],
            [
                'name' => 'Krithika',
                'image' => '13.jpg',
                'description' => 'Bangalore Dojo',
            ],
            [
                'name' => 'Adarsh',
                'image' => '14.jpg',
                'description' => 'Bangalore Dojo',
            ],
            [
                'name' => 'Baba',
                'image' => '15.jpg',
                'description' => 'Bangalore District',
            ],
            [
                'name' => 'Ramnarayan',
                'image' => '16.jpg',
                'description' => 'Honbu Dojo , Bangalore',
            ],
            [
                'name' => 'Ramesh K C',
                'image' => '17.jpg',
                'description' => 'Hassan District',
            ],
            
        ];
        return view('pages.aboutus.index', compact('instructors'));
    }
}
