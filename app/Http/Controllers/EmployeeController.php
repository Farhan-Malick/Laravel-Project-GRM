<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\EmployeeDataTable;

class EmployeeController extends Controller
{
    public function index(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('user.home');
    }
    public function loginindex(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('user.AfterLogin.LoginHome');
    }
    public function Tenders(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('user.AfterLogin.TendersList');
    }
}
