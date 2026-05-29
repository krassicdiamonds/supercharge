<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    // return home view
    public function showHome()
    {
        return view('dashboard.home');
    }

    // return dashboard view
    public function showDashboard()
    {
        return view('dashboard.dashboard');
    }

    // return teams view
    public function showTeams()
    {
        return view('dashboard.teams');
    }

    // return boards view
    public function showBoards()
    {
        return view('dashboard.boards');
    }

    // return inbox view
    public function showInbox()
    {
        return view('dashboard.inbox');
    }

    // return timeline view
    public function showTimeline()
    {
        return view('dashboard.timeline');
    }

    // return settings view
    public function showSettings()
    {
        return view('dashboard.settings');
    }
}
