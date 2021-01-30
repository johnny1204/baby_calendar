<?php

namespace App\Http\Controllers;

/**
 * @package App\Http\Controllers
 */
class CalendarController extends Controller
{
    /**
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('calendar.index');
    }
}
