<?php

namespace App\Http\Controllers\Backend\Employee;

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

class MonthlySalaryController extends Controller
{
    
public function MonthlySalaryView(){

return view('backend.employee.monthly_salary.monthly_salary_view');

}

public function MonthlySalaryGet(Request $request){

}









    }
