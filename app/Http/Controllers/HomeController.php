<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.home',[
            'blogs'=>Blog::all()
        ]);
    }

    public function about(){
        return view('front-end.about.about');
    }

    public function service(){
        return view('front-end.service.service');
    }

    public function department(){
        return view('front-end.department.department');
    }

    public function departmentSingle(){
        return view('front-end.department.department-single');
    }

    public function doctor(){
        return view('front-end.doctor.doctor');
    }

    public function doctorSingle(){
        return view('front-end.doctor.doctor-single');
    }

    public function appoinment(){
        return view('front-end.doctor.appoinment');
    }

    public function blogSidebar(){
        return view('front-end.blog.blog-side-bar');
    }

    public function blogSingle(){
        return view('front-end.blog.blog-single');
    }

    public function contact(){
        return view('front-end.contact.contact');
    }
}
