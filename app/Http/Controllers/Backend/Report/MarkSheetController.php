<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\StudentMarks;
use App\Models\ExamType;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\MarksGrade;
class MarkSheetController extends Controller
{
     public function MarkSheetView(){

        $data['years'] = StudentYear::orderBy('id','desc')->get();
        $data['classes'] = StudentClass::all();
        $data['exam_type'] = ExamType::all();
        return view('backend.report.marksheet.marksheet_view',$data);

    }


}
