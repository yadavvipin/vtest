@extends('admin1.layout.layout')



@section('content')

    <div ng-app="sampleApp"  ng-controller="MarkController">

        <section class="content-header">

            <h1>

                Marksheet Term II

                <small>Print Mode</small>

            </h1>

            <ol class="breadcrumb">

                <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>

                <li><a href="{!! route('admin1.assigns.create') !!}">Search</a></li>

                <li><a href="{!! route('admin1.assigns.show',1) !!}" >Manage</a></li>

                <li class="active">Marksheet</li>

                <li class="active">Print</li>

            </ol>

        </section>



        <!-- Main content -->

        <section class="content">



            <!-- Default box -->

            <div class="box">

                <div class="box-header with-border">

                    <h3 class="box-title">Print Marksheet</h3>



                    <div class="box-tools pull-right">

                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">

                            <i class="fa fa-minus"></i></button>



                    </div>

                </div>



                <div class="box-body">



                    <div class="box-body">

                            <div>

                                <center>

                                    <div class="" id="printTable">

                                        <table style=" width: 210mm; height:290mm ;" border="2">

                                            <tr><td valign="top">

                                                    <table class="text-bold" border="0" >

                                                        <tr>

                                                            <td  valign="center" class="text-right">

                                                                <img src="../image/logo.gif" />

                                                            </td>

                                                            <td colspan="4"  valign="top" class="text-left">
            <center>

                                                                    <h3><b>RAJEEV GANDHI Hr. SECONDARY SCHOOL</b><br/></h3>

                                <h4>
(Affiliated to CBSE New Delhi, Affiliation No.1030131)<br/>
                                E-8 Trilanga, Shahpura, Bhopal-462039<br/>

                                    PH: 2725122, 2560007<br/>

                                    <br/>
<br/>
                                    <b>    Record of Academic Performance<br/>

                                        {!! $student->session !!}</b>



                                </h4>

                                                                </center>
                                                            </td>

                                                            <td valign="top" style="font-size:12px" ><strong>ESTD. 1998</strong><br/><br/><br/>

                                                                <img src="{!! $student->image !!}"  class="img-responsive"/>&nbsp;&nbsp;&nbsp;&nbsp;

                                                            </td>

                                                        </tr>

                                                        <tr>

                                                            <td style="font-size:14px" class="text-center" ><b>Student Name:</b></td>

                                                            <td style="font-size:14px">{!! $student->sname !!}</td>

                                                            <td></td>

                                                            <td style="font-size:14px" class="text-center">

                                                                &nbsp;&nbsp;&nbsp;&nbsp;<b>Roll No:</b></td>

                                                            <td style="font-size:14px" colspan="2" > {!! $student->roll_no !!}&nbsp;&nbsp;&nbsp;</td>

                                                            {{--<td>{!! \Carbon\Carbon::parse($pay[0]->created_at)->format('d/m/Y') !!}</td>--}}

                                                        </tr>

                                                        <tr>

                                                            <td style="font-size:14px" class="text-center" >

                                                                &nbsp;<b>Father's Name:</b></td>

                                                            <td style="font-size:14px"> {!! $student->fname !!}</td>

                                                            <td></td>

                                                            <td style="font-size:14px" class="text-center">

                                                                &nbsp;<b>Class:</b></td>

                                                            <td style="font-size:14px" colspan="2"> [[class]]&nbsp;&nbsp;&nbsp;</td>

                                                        </tr>

                                                        <tr>

                                                            <td   style="font-size:14px" class="text-center" >

                                                                &nbsp;&nbsp;<b>Mother's Name:</b></td>

                                                            <td  style="font-size:14px"> {!! $student->mname !!}</td>

                                                            <td></td>

                                                            <td  style="font-size:14px" class="text-center" class="text-center">

                                                                <b>DOB:</b></td>

                                                            <td  style="font-size:14px" colspan="2">[[dob|date:'dd/MM/yyyy']]&nbsp;&nbsp;&nbsp;</td>

                                                            {{--<td> {!! $student->dob!!}</td>--}}

                                                        </tr>



                                                    </table>

<br/><br/>



                                                    <table class="table table-bordered table-striped">

                                                        <thead>

                                                        <tr>

                                                            <td style="font-size:12px"><b>SCHOLISTIC AREA A</b></td>

                                                            <td style="font-size:12px" class="text-center" colspan="8"><b>TERM II</b></td>



                                                        </tr>

                                                        <tr>

                                                            {{--<td>Sr.</td>--}}

                                                            <td style="font-size:12px"><b>Subject Name</b></td>

                                                            <td style="font-size:12px" colspan="2"><b>FA3 </b></td>

                                                            <td style="font-size:12px" colspan="2"><b>FA4 </b></td>

                                                            <td style="font-size:12px" colspan="2"><b>SA2 </b></td>

                                                            <td style="font-size:12px" colspan="2"><b>Total </b></td>



                                                        </tr>

                                                        </thead>

                                                        <tbody>



                                                        <tr ng-repeat="me in mark | filter : test">

                                                            {{--<td>[[$index+1]]</td>--}}

                                                            <td style="font-size:12px">

                                                                [[me.subject]]

                                                            </td>

                                                            <td colspan="2" style="font-size:12px">[[me.fa3]]</td>

                                                            <td colspan="2" style="font-size:12px">[[me.fa4]]</td>

                                                            <td colspan="2" style="font-size:12px">[[me.sa2]]</td>

                                                            <td colspan="2" style="font-size:12px">[[me.t2]]</td>



                                                        </tr>

                                                        <tr>

                                                            <td style="font-size:12px" colspan="5"></td>

                                                            <td style="font-size:12px" class="text-center" colspan="2"><b>Total Grade</b></td>

                                                            <td style="font-size:12px" colspan="2">[[ttg]]</td>

                                                        </tr>

                                                        <tr>

                                                            <td style="font-size:12px" class="text-center"><b>Attendance</b></td>

                                                            <td style="font-size:12px" class="text-center" colspan="8">{!! $at[0]->at2 !!} / {!! $at[0]->mat2 !!}</td>



                                                        </tr>



                                                        <tr>

                                                            <td style="font-size:12px" class="text-center" colspan="9">A1: 90-100 ,A2: 80-90 ,B1: 70-80 ,B2:  60-70 ,C1: 50-60 ,C2: 40-50 ,D: 33-40 ,E1: 20-32 ,E2: 0-20</td>

                                                        </tr>

                                                        <tr>

                                                            <td style="font-size:12px" rowspan="2">SCHOLISTIC AREA

                                                                (Grading on five point scale A+,A,B+,B,C)

                                                            </td>

                                                            <td class="text-center" style="font-size:12px" colspan="8">TERM II</td>

                                                        </tr>

                                                        <tr>

                                                            <td style="font-size:12px">Gr.</td>

                                                            <td style="font-size:12px" colspan="7">Discriptive Indicators</td>

                                                        </tr>

                                                        @foreach($sa as $index => $s)

                                                            <tr>

                                                                <td style="font-size:12px">{!! $s->subject !!}</td>

                                                                <td style="font-size:12px">{!! $s->gradet2 !!}</td>

                                                                <td style="font-size:12px" colspan="7"><font style="text-transform: uppercase;"> {!! $student->sname !!}</font> {!! $s->dit2 !!}</td>

                                                            </tr>

                                                        @endforeach

                                                    </table>
<br/><br/>
                                                    <table class="table">

                                                        <tr> <td colspan="11" style="font-size:12px">Remark: {!! $r[0]->remarkt2 !!}

                                                                {{--[[pclass]]--}}

                                                                <br/><br/><br/><br/><br/><br/><br/><br/><br/>

                                                            </td> </tr>

                                                        <tr>

                                                            <td style="font-size:12px" class="text-center" colspan="2">CLASS TEACHER'S SIGNATURE</td>

                                                            <td style="font-size:12px" class="text-center" colspan="5">PARENT'S SIGNATURE</td>

                                                            <td style="font-size:12px" class="text-center" colspan="4">PRINCIPAL'S SIGNATURE</td>

                                                        </tr>

                                                        <tr>

                                                            <td colspan="11" class="text-center" style="font-size:11px">

                                                                @if($sfa=='1')

                                                                    {{--Duplicate Print--}}

                                                                @endif

                                                            </td>

                                                        </tr>

                                                    </table>

                                                </td>

                                            </tr>

                                        </table>

                                        <table border="2"><tr><td>

                                                    <table class="table table-bordered table-striped" style=" width: 210mm; height:290mm ;">

                                                        <tr>

                                                            <td class="text-center" colspan="11" style="font-size:12px"  ><b>CO-SCHOLASTIC AREAS : PART-2 & PART-3</b></td>

                                                        </tr>

                                                        <tr>

                                                            <td style="font-size:12px"  rowspan="2"><b>2A : LIFE SKILLS</b>

                                                                (Grading on five point scale

                                                                A,B,C,D,E)

                                                            </td>

                                                            <td colspan="5" style="font-size:12px" ><b>TERM-II</b></td>

                                                        </tr>

                                                        <tr>

                                                            <td style="font-size:12px" ><b>Gr.</b></td><td  style="font-size:12px" colspan="4"><b>DISCRIPTIVE INDICATORS</b></td>

                                                        </tr>

                                                        @foreach($ls as $index => $s)

                                                            <tr>

                                                                <td style="font-size:12px" >{!! $s->subject !!}</td>

                                                                <td style="font-size:12px" >{!! $s->gradet2 !!}</td><td style="font-size:12px"  colspan="4"><font style="text-transform: uppercase;"> {!! $student->sname !!}</font> {!! $s->dit1 !!}</td>

                                                            </tr>

                                                        @endforeach

                                                        <tr><td colspan="11" style="font-size:12px" ><b>2B : ATITUDES & VALUES </b>(Grading on Three point scale A,B,C)</td></tr>

                                                        @foreach($av as $index => $s)

                                                            <tr>

                                                                <td style="font-size:12px" >{!! $s->subject !!}</td>

                                                                <td style="font-size:12px" >{!! $s->gradet2 !!}</td><td colspan="4" style="font-size:12px" ><font style="text-transform: uppercase;"> {!! $student->sname !!}</font> {!! $s->dit2 !!}</td>

                                                            </tr>

                                                        @endforeach

                                                        <tr><td colspan="11" style="font-size:12px" ><b>Part 3 :3(A) CO-SCHOLASTIC ACTIVITIES </b>(grading on Three point scale A,B,C)<b> Any Two</b></td></tr>

                                                        @foreach($csa as $index => $s)

                                                            <tr>

                                                                <td style="font-size:12px" >{!! $s->subject !!}</td>

                                                                <td style="font-size:12px" >{!! $s->gradet2 !!}</td><td colspan="4" style="font-size:12px" ><font style="text-transform: uppercase;"> {!! $student->sname !!}</font> {!! $s->dit2 !!}</td>

                                                            </tr>

                                                        @endforeach

                                                        <tr><td colspan="11" style="font-size:12px" >

                                                                <b>Part 3 :3(B) HEALTH AND PHYSICAL EDUCATION (grading on Three point scale A,B,C) Any Two</b>

                                                            </td></tr>

                                                        @foreach($hp as $index => $s)

                                                            <tr>

                                                                <td style="font-size:12px" >{!! $s->subject !!}</td>

                                                                <td style="font-size:12px" >{!! $s->gradet2 !!}</td>

                                                                <td colspan="9" style="font-size:12px" ><font style="text-transform: uppercase;"> {!! $student->sname !!}</font> {!! $s->dit2 !!}</td>

                                                            </tr>

                                                            @endforeach

                                                        <tr>

                                                            <td colspan="11" style="font-size:11px" class="text-center">

                                                                @if($sfa=='1')

                                                                {{--Duplicate Print--}}

                                                                @endif

                                                            </td>

                                                        </tr>

                                                    </table>

                                                </td></tr></table>



                                        <link rel="stylesheet" href="{{url('Admin/bootstrap/css/bootstrap.min.css')}}">

                                        <script src="{{url('Admin/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>

                                        <center>

                                            <button class="btn hidden-print" id="printbutton"><i class="fa fa-print fa-2x"></i></button><br/>

                                            {{--<a class="btn" id="printbutton"><i class="fa fa-print fa-2x" onclick="printData();"></i></a>--}}

                                            {{--<i class="fa fa-print fa-2x" onclick="window.print();"></i>--}}

                                        </center>

                                    </div>

                                    {{--[[mark]]<br/>--}}

                                    {{--[[sub]]--}}

                                </center>

                            </div>

                                    <!-- /.box-footer-->

                    </div>

                    <!-- /.box -->

        </section>

    </div>

@stop





@section('script')



    <script>

        var app = angular.module('sampleApp', []);

        app.config(['$interpolateProvider',function($interpolateProvider) {

            $interpolateProvider.startSymbol('[[');

            $interpolateProvider.endSymbol(']]');

        }]);

        app.controller('MarkController', function($scope,$http){



            $scope.dob="{!! $student->dob!!}";

            //--------------------------------------------------------------------------------------------- print marksheet

            function printData()

            {

                var divToPrint=document.getElementById("printTable");

                newWin= window.open("");

                newWin.document.write(divToPrint.outerHTML);

                // newWin.print();

                //newWin.close();

            }



            $('button[id=printbutton]').on('click',function(){

                printData();

            })

            //-------------------------------------------------------end print

//roman number----------------------------------------------------------------------------------------------------

            $scope.class={!! $student->class !!};

            romanize($scope.class);



            function romanize(num) {

                if (!+num)

                    return false;

                var digits = String(+num).split(""),

                        key = ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM",

                            "","X","XX","XXX","XL","L","LX","LXX","LXXX","XC",

                            "","I","II","III","IV","V","VI","VII","VIII","IX"],

                        roman = "",

                        i = 3;

                while (i--)

                    roman = (key[+digits.pop() + (i * 10)] || "") + roman;

                $scope.class = Array(+digits.join("") + 1).join("M") + roman;

//                alert("number rom : "+$scope.class);

            }







//            alert('hello');

            $scope.sub={!! $mark !!};

            $scope.mark=[];

            $scope.ttg=0;

            $scope.percent=0;

            for( var t in $scope.sub) {

//-----------------------------------------------------calculate total for term 1 term 1 an FA

//alert($scope.sub[t].fa4);

                var fa13=(($scope.sub[t].fa3/$scope.sub[t].mmfa3)*100).toFixed(2);

                var fa14=(($scope.sub[t].fa4/$scope.sub[t].mmfa4)*100).toFixed(2);

                var sa12=(($scope.sub[t].sa2/$scope.sub[t].mmsa2)*100).toFixed(2);

                var c=0;

                if(90<=fa13 && fa13<=100){var fa3='A1'; c=c+1;}

                else if(80<=fa13 && fa13<=90){ var fa3='A2'; c=c+1;}

                else if(70<=fa13 && fa13<=80){var fa3='B1'; c=c+1;}

                else if(60<=fa13 && fa13<=70){var fa3='B2'; c=c+1;}

                else if(50<=fa13 && fa13<=60){var fa3='C1'; c=c+1;}

                else if(40<=fa13 && fa13<=50){var fa3='C2'; c=c+1;}

                else if(33<=fa13 && fa13<=40){var fa3='D'; c=c+1;}

                else if(20<=fa13 && fa13<=32){var fa3='E1'; c=c+1;}

                else if(0<fa13 && fa13<=20){var fa3='E2'; c=c+1;}

                else{var fa3='-'}





                if(90<=fa14 && fa14<=100){var fa4='A1'; c=c+1;}

                else if(80<=fa14 && fa14<=90){ var fa4='A2'; c=c+1;}

                else if(70<=fa14 && fa14<=80){var fa4='B1'; c=c+1;}

                else if(60<=fa14 && fa14<=70){var fa4='B2'; c=c+1;}

                else if(50<=fa14 && fa14<=60){var fa4='C1'; c=c+1;}

                else if(40<=fa14 && fa14<=50){var fa4='C2'; c=c+1;}

                else if(33<=fa14 && fa14<=40){var fa4='D'; c=c+1;}

                else if(20<=fa14 && fa14<=32){var fa4='E1'; c=c+1;}

                else if(0<fa14 && fa14<=20){var fa4='E2'; c=c+1;}

                else{var fa4='-'}



                if(90<=sa12 && sa12<=100){var sa2='A1'; c=c+1;}

                else if(80<=sa12 && sa12<=90){ var sa2='A2'; c=c+1;}

                else if(70<=sa12 && sa12<=80){var sa2='B1'; c=c+1;}

                else if(60<=sa12 && sa12<=70){var sa2='B2'; c=c+1;}

                else if(50<=sa12 && sa12<=60){var sa2='C1'; c=c+1;}

                else if(40<=sa12 && sa12<=50){var sa2='C2'; c=c+1;}

                else if(33<=sa12 && sa12<=40){var sa2='D'; c=c+1;}

                else if(20<=sa12 && sa12<=32){var sa2='E1'; c=c+1;}

                else if(0<sa12 && sa12<=20){var sa2='E2'; c=c+1;}

                else{var sa2='-'}



                var tt2=((fa13)*1+(fa14)*1+(sa12)*1)/c;

//                alert(tt2);

                $scope.ttg=$scope.ttg+tt2;



                if(90<=tt2 && tt2<=100){var t2='A1';}

                else if(80<=tt2 && tt2<=90){ var t2='A2';}

                else if(70<=tt2 && tt2<=80){var t2='B1'}

                else if(60<=tt2 && tt2<=70){var t2='B2'}

                else if(50<=tt2 && tt2<=60){var t2='C1'}

                else if(40<=tt2 && tt2<=50){var t2='C2'}

                else if(33<=tt2 && tt2<=40){var t2='D'}

                else if(20<=tt2 && tt2<=32){var t2='E1'}

                else if(0<tt2 && tt2<=20){var t2='E2'}

                else{var t2='-'}



                $scope.mark.push({

                    subject: $scope.sub[t].subject,

                    fa3: fa3,

                    fa4: fa4,

                    sa2: sa2,

                    t2: t2,

                });





            }

            $scope.d=0;

            for( var t in $scope.mark) {

                var fa3=$scope.mark[t].fa3;

                var fa4=$scope.mark[t].fa4;

                var sa2=$scope.mark[t].sa2;

                if(fa3!='-' || fa4!='-' || sa2!='-'){

                    $scope.d=$scope.d+1;

                }

//                alert("..count."+$scope.d);



            }

            $scope.ttg=$scope.ttg/$scope.d;

            $scope.percent=$scope.ttg.toFixed(2);



            if(90<=$scope.ttg && $scope.ttg<=100){

                $scope.ttg='A1';

                $scope.pclass={!! $student->class !!};

                $scope.pclass='PROMOTED TO CLASS '+(parseInt($scope.pclass)*1+1);}

            else if(80<=$scope.ttg && $scope.ttg<=90){

                $scope.ttg='A2';

                $scope.pclass={!! $student->class !!};

                $scope.pclass='PROMOTED TO CLASS '+(parseInt($scope.pclass)*1+1);

//            alert($scope.pclass);

            }

            else if(70<=$scope.ttg && $scope.ttg<=80){

                $scope.ttg='B1'

            }

            else if(60<=$scope.ttg && $scope.ttg<=70){

                $scope.ttg='B2'

            }

            else if(50<=$scope.ttg && $scope.ttg<=60){

                $scope.ttg='C1'

            }

            else if(40<=$scope.ttg && $scope.ttg<=50){

                $scope.ttg='C2'

            }

            else if(33<=$scope.ttg && $scope.ttg<=40){

                $scope.ttg='D'

            }

            else if(20<=$scope.ttg && $scope.ttg<=32){

                $scope.ttg='E1'

            }

            else if(0<$scope.ttg && $scope.ttg<=20){

                $scope.ttg='E2'

            }

            else{$scope.ttg='-'

            }



            //// update grade for term2 grade show in report--------------------------------



            $scope.session="{!! $student->session !!}";

            $scope.section={!! $student->section !!};

            $scope.rno={!! $student->roll_no !!};

            $scope.sid={!! $student->sid !!};

            $scope.classes={!! $student->class !!};



            var requestid = $http({

                method : "GET",

                url:"../admin1/upgt2/"+$scope.session+"/"+$scope.classes+'/'+$scope.section+"/"+$scope.sid+"/"+$scope.rno+'/'+$scope.ttg+'/'+$scope.percent,

            })

            requestid.success(function (data) {

                $scope.up=data;

            })





        });

    </script>





@stop