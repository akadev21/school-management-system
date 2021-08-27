<?php

namespace App\Http\Controllers\Backend\Marks;

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

use App\Models\StudentMarks;
use App\Models\ExamType;

class MarksController extends Controller
{
    public function MarksAdd (){
$data['years'] = StudentYear::all();
$data['classes'] = StudentClass::all();
$data['exam_type'] = ExamType::all();
  
  return view('backend.marks.marks_add',$data);  
}
        
    



}
