<?php

namespace App\Http\Controllers;

use App\Marks;
use App\Subject;
use Illuminate\Http\Request;
use App\Section;
use App\Student;
use App\Student1;
use App\Classes;
use App\Session;
use App\Attend;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class AssignsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create(Request $request)
    {
        // return $request;
        $user = Auth::user()->email;
        $sess1 = Session::select('year')->where('status','ACTIVE')->first();
        $classes = $request['classes'];
        $section = $request['section'];
        $session = $request['session'];
        $sid = $request['sid'];
        $exam = $request['exam'];
        $student = null;
        $subject = null;

        if ($classes != null and $section !=null and $session!=null) {
            $ses = Session::select('year')->where('id',$session)->first();
            $request->session()->put('clas', $classes);
            $request->session()->put('sec', $section);
            $request->session()->put('ses', $session);

            $student = Student1::select()->where('class', $classes)->where('section', $section)->where('session', $ses->year)
                ->where('status', 1)->orderBy('sname', 'ASC')->paginate(10);
           // return $student;
            return view('admin1.assigns.manage')->with('student', $student)->with('sess11',$sess1)->with('user',$user);
        }
        elseif ($sid != null and $exam =='fa') {
            $m = $request->session()->get('clas');
            $student = Student1::select('sid','section','roll_no', 'class', 'sname', 'fname', 'mname', 'dob', 'session')
                ->where('sid', $sid)->where('class', $classes)->first();
            $subject = Subject::select('name')->where('class', $classes)->get();
            $r=Attend::select('remark')->where('sid',$sid)->where('class', $classes)->get();
//            return $r[0]->remark;
            return view('admin1.assigns.add')->with('student', $student)->with('classes', $classes)->with('session', $session)
                ->with('section', $section)->with('subject', $subject)->with('sess11',$sess1)->with('m', $m)->with('r', $r)->with('user',$user);
        }

        elseif ($sid != null and $exam =='t1') {

            $student = Student1::select('sid','section','roll_no', 'class', 'sname', 'fname', 'mname', 'dob', 'session')
                ->where('sid', $sid)->where('class', $classes)->first();
            $subject = Subject::select('name')->where('class', $classes)->get();
            $r=Attend::select('remarkt1')->where('sid',$sid)->where('class', $classes)->get();
            return view('admin1.assigns.addt1')->with('student', $student)->with('classes', $classes)->with('session', $session)
                ->with('section', $section)->with('subject', $subject)->with('sess11',$sess1)->with('exam',$exam)->with('r', $r)->with('user',$user);
        }

        elseif ($sid != null and $exam =='t2') {

            $student = Student1::select('sid','section','roll_no', 'class', 'sname', 'fname', 'mname', 'dob', 'session')
                ->where('sid', $sid)->where('class', $classes)->first();
            $subject = Subject::select('name')->where('class', $classes)->get();
            $r=Attend::select('remarkt2')->where('sid',$sid)->where('class', $classes)->get();
            return view('admin1.assigns.addt2')->with('student', $student)->with('classes', $classes)->with('session', $session)
                ->with('section', $section)->with('subject', $subject)->with('sess11',$sess1)->with('exam',$exam)->with('r', $r)->with('user',$user);
        }

        else {
            $classes = Classes::pluck('name', 'id');
            $section = Section::pluck('name', 'id');
            $session = Session::pluck('year', 'id');
            $m = $request->session()->get('clas');

            return view('admin1.assigns.add')->with('student', $student)->with('classes', $classes)->with('session', $session)
                ->with('section', $section)->with('subject', $subject)->with('sess11',$sess1)->with('m', $m)->with('user',$user);
        }

    }

    public function index(Request $request)
    {
        // return $request;
        $user = Auth::user()->email;
        $sess1 = Session::select('year')->where('status','ACTIVE')->first();
        $s = Student::paginate(10);
        return view('admin1.student.manage')->with('student',$s)->with('sess11',$sess1)->with('user',$user);

    }

    public function find($idc, $ids,$sid)
    {
        // return $idc;
        $sess = Session::select('year')->where('id', $sid)->first();//->where('status', 'ACTIVE')
        $student = Student::where('class', $idc and 'section', $ids)->get();

        $student = Student::where(function ($q) use ($idc, $ids, $sess) {
            $q->where('class', $idc);
            $q->where('section', $ids);
            $q->where('session', $sess->year);
//            $q->where('session', $sess->year);
        })->get();

        return $student;
//        return $idc;
    }

    public function find1($cid, $rno, $sess)
    {
        $subject = Subject::select('name')->where('class', $cid)->get();

//        $m1 = Marks::select('roll_no','class')->where('roll_no',$rno)->where('class',$cid)->count();
//        return $rno;
//        echo $m1->roll_no;
//        if($m1==0){
//            foreach ($subject as $ss) {
//                $marks = Marks::create();
//                $marks->roll_no = $rno;
//                $marks->class = $cid;
//                $marks->session = $sess;
//                $marks->subject = $ss['name'];
//                $marks->save();
//            }
//            return $m1;
            $mark = Marks::select('class','subject','fa1','fa2','sa1','fa3','fa4','sa2','mmfa1','mmfa2','mmsa1','mmfa3','mmfa4','mmsa2')->where('class',$cid)->where('roll_no', $rno)->get();
            return $mark;
//        }
//        else
//        {
//            $mark = Marks::select('class','subject','fa1','fa2','sa1','fa3','fa4','sa2')->where('class',$cid)->where('roll_no', $rno)->get();
//            return $mark;
//            return $subject;
//        }
//        return $subject;
//        return $m1;
    }

    public function show($id,Request $request)
    {
        $user = Auth::user()->email;
        $sess1 = Session::select('year')->where('status','ACTIVE')->first();
        $classes = $request->session()->get('clas');
        $section = $request->session()->get('sec');
        $session = $request->session()->get('ses');
        $student=null;
        if ($classes != null and $section !=null and $session!=null) {
            $ses = Session::select('year')->where('id',$session)->first();
            $request->session()->put('clas', $classes);
            $request->session()->put('sec', $section);
            $request->session()->put('ses', $session);

            $student = Student1::select()->where('class', $classes)->where('section', $section)
                ->where('status', 1)->where('migration', 1)->where('session', $ses->year)->orderBy('sname', 'ASC')->paginate(10);
//            return 'hello';
            return view('admin1.assigns.manage')->with('student', $student)->with('sess11',$sess1)->with('user',$user);
        }
        else
        {
            $classes = Classes::pluck('name', 'id');
            $section = Section::pluck('name', 'id');
            $session = Session::pluck('year', 'id');

            return view('admin1.assigns.add')->with('classes', $classes)->with('session', $session)
                ->with('section', $section)->with('sess11',$sess1)->with('m', $classes)->with('student', $student)->with('user',$user);
        }

    }

    public function edit(Request $request,$id)
    {
        $user = Auth::user()->email;
        $sess1 = Session::select('year')->where('status','ACTIVE')->first();
        $classes = Classes::pluck('name', 'id');
        $section = Section::pluck('name', 'id');

        return view('admin1.assigns.view2')->with('classes', $classes)
            ->with('section', $section)->with('sess11',$sess1)->with('user',$user);
    }
    //---------------------------------update marksheet
    public function update($rn,$c,$sn,$fa1,$fa2,$sa1,$fa3,$fa4,$sa2,$sid)
    {
        Marks::where('roll_no',$rn)->where('class',$c)->where('subject',$sn)->update(['fa1'=>$fa1,'fa2'=>$fa2,'sa1'=>$sa1,'fa3'=>$fa3,'fa4'=>$fa4,'sa2'=>$sa2, 'sid'=>$sid]);
//        return

    }
    public function updatet1($rn,$c,$sn,$fa1,$fa2,$sa1,$sid)
    {
        Marks::where('roll_no',$rn)->where('class',$c)->where('subject',$sn)->update(['fa1'=>$fa1,'fa2'=>$fa2,'sa1'=>$sa1,'sid'=>$sid]);
    }
    public function updatet2($rn,$c,$sn,$fa3,$fa4,$sa2,$sid)
    {
        Marks::where('roll_no',$rn)->where('class',$c)->where('subject',$sn)->update(['fa3'=>$fa3,'fa4'=>$fa4,'sa2'=>$sa2,'sid'=>$sid]);
    }

}
