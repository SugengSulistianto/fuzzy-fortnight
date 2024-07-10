<?php

namespace Modules\Shop\Http\Controllers;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class AdminController extends Controller
{
    public function index()
    {
        return $this->loadTheme('admin.dashboard');
    }
}