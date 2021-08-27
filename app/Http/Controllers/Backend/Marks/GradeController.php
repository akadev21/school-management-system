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
use App\Models\MarksGrade;


class GradeController extends Controller
{
    
public function MarksGradeView(){
    $data['allData'] = MarksGrade::all();
    return view ('backend.marks.grade_marks_view',$data);


}


}
