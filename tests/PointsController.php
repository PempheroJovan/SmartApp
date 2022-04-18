<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Helpers\Mk;
use App\Http\Requests\Mark\MarkSelector;
use App\Models\Setting;
use App\Repositories\ExamRepo;
use App\Repositories\MarkRepo;
use App\Repositories\MyClassRepo;
use App\Http\Controllers\Controller;
use App\Repositories\StudentRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use DB;

class PointsController extends Controller
{
 
/**

*Show students points
*
* @return Response
*/ 
public function Points($stid,$exam_id,$year,$section_id)
{
	//get class type only MSCE
 $data=DB::table('class_types')->where('code','S')->value('id');
 return $data;

 $mclass=DB::table('my_classes')->where('id','=','$data')->get();

 foreach ($mclass as $classes) {
 	# code...
 	return $classes;
 }
 
 $Engid=DB::table('subjects')->where('slug','=','Eng')->where('my_class_id','=','$classes')->get();

  foreach ($Engid as $Eids) {

    	return $Eids;
    	# code...
    }

  $EngGrade=DB::table('marks')->where('subject_id','=','$Eids')->where('section_id','=','$section_id')->where('exam_id','=','$exam_id')->where('year','=','$year')->whereBetween('grade',[1,8])->get();

   foreach ($EngGrade as $eng => $grade) {
   	# code...
   	return $grade->where('student_id','$stid');
   }

  $datas=DB::table('marks')->where('section_id','=','$section_id')->where('exam_id','=','$exam_id')->where('year','=','$year')->where('student_id','=','$stid')->select('grade')->get();
  foreach ($datas as $key => $value) {
  	# code...
  	return sort($value);
  }
   
   $total=$grade+$value;
   echo $total;



}

}

?>