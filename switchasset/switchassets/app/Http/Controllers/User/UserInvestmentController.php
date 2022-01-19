<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserInvestmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }

    public function index()
    {        
        return view('user.investmentPackages');
    }

    public function investment($investment_id)
    {        
        return view('user.investment');
    }

    public function history()
    {        
        return view('user.investmentHistory');
    }
}
