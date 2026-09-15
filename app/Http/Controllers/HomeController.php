<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages.home', [
            'company' => 'ROBOTRAC TRACTOR INDIA PRIVATE LIMITED',
            'phone' => '+91 98815 10419',
            'phone2' => '+91 74208 48939',
            'email' => 'ceo@robotrac.co.in',
            'hrEmail' => 'hr@robotrac.co.in',
            'website' => 'https://robotrac.co.in/',
        ]);
    }
}
