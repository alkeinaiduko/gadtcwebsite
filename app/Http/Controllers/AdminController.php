<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Bulletin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-layouts.admin');
    }


    public function showAddAnnouncementPage()
    {
        return view('admin-layouts.addannouncement');
    }

    public function showAddBulletinPage()
    {
        return view('admin-layouts.addbulletin');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|min:5',
            'description' => 'required|min:5'
        ]);

        $data = [
            'title' => request('title'),
            'description' => request('description')
        ];

        Announcement::create($data);

        return back()->with('success', 'Announcement Posted Successfully!');
    }

    public function storeBulletin()
    {
         $this->validate(request(), [
            'title' => 'required|min:5',
            'who' => 'required',
            'what' => 'required',
            'where' => 'required',
            'when' => 'required',
            'description' => 'required|min:10'
        ]);

        $data = [
            'title' => request('title'),
            'who' => request('who'),
            'what' => request('what'),
            'where' => request('where'),
            'when' => request('when'),
            'description' => request('description')
        ];

        Bulletin::create($data);

        return back()->with('success', 'Bulletin Posted Successfully!');
    }
}
