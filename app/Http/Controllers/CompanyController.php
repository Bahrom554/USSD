<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CompanyController extends Controller
{
    public function changeCompany($company){
        if (!array_key_exists($company, Category::companiesList())) {
            throw new \InvalidArgumentException('Undefined role "' . $company . '"');
        }
        Session::put('company', $company);
        error_log('company'.$company);
        return redirect()->back();

    }

}
