<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use App\Models\DiscountStudent;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use DB;
use PDF;

use App\Models\Designation;
use App\Models\EmployeeSallaryLog;
use App\Models\EmployeeAttendance;

use App\Models\AccountEmployeeSalary;

class AccountSalaryController extends Controller
{
    public function AccountSalaryView(){

        $data['allData'] = AccountEmployeeSalary::all();
        return view('backend.account.employee_salary.employee_salary_view',$data);

    }


 public function AccountSalaryAdd(){

       
        return view('backend.account.employee_salary.employee_salary_add',$data);

    }



}
