<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

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
}
