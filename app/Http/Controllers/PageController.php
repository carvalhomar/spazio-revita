<?php
defined('BASEPATH') OR exit('No direct script access allowed');

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use App\Models\Content;

class PageController extends Controller
{
    public function index()
    {
        echo view('page.index');
    }



}
