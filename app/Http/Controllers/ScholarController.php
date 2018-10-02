<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Scholar;
use App\Level;
use App\Program;
use App\TestScoreType;
use App\Country;
use App\University;
use View;

class ScholarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $scholar = Scholar::all()->toArray();
        // dd($scholar);
        return view('scholar.index');

    }

    public function list()
    {
      $scholar = Scholar::with('level')->get();
      $data = compact('scholar');
      return view('scholar.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $func = "storeScholar()";
        $levels = Level::all();
        $programs = Program::all();
        $testscoretypes = TestScoreType::all();
        $data = compact('func','levels','programs','testscoretypes');
        // dd($data);
        return view('scholar.form',$data);
        // return View::make('scholar.flash-message');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $scholar = $this->validate(request(),[
          'name_scholar' => 'required',
          'university' => 'required',
          'level_id' => 'required',
          'program_id' => 'required',
          'test_score_types_id' => 'required',
          'country' => 'required',
          'inclusion' => 'required',
          'description' => 'required'
        ]);
          $scholar = new Scholar;
          $scholar->name_scholar = $request->name_scholar;
          $university = $request->university;
          $university_arr = explode(",",$university);
          $university_id_arr = array();
          // $university_arr = trim($university_arr);
          for ($i=0;$i<count($university_arr);$i++){
            $uni = University::where('name','=',$university_arr[$i])->first();
            // if($uni!=''){
            //   alert('error');
            // }
            if ($uni!=null){
              array_push($university_id_arr,$uni->id);
            }
            else{
              $u = new University;
              $u->name = $university_arr[$i];
              $u->save();
              array_push($university_id_arr,$u->id);
            }
          }
          // $university_arr = trim($university_arr);
          // dd($university);

          $scholar->level_id = $request->level_id;
          $scholar->program_id = $request->program_id;
          $country = $request->country;
          $country_arr = explode(",",$country);
          $country_id_arr = array();
          for ($i=0;$i<count($country_arr);$i++){
            $c = Country::where('name','=',$country_arr[$i])->first();
            if ($c!=null){
              array_push($country_id_arr,$c->id);
            }
            else {
              $c = new Country;
              $c->name = $country_arr[$i];
              $c->save();
              array_push($country_id_arr,$c->id);
            }
          }
          $scholar->inclusion = $request->inclusion;
          $scholar->description = $request->description;
          $scholar->save();
          for ($i=0;$i<count($university_id_arr);$i++){
            $scholar->universities()->attach($university_id_arr[$i]);
          }
          for ($i=0;$i<count($country_id_arr);$i++){
            $scholar->countries()->attach($country_id_arr[$i]);
          }
          $scholar->testscorefunc()->attach($request->test_score_types_id);
          // dd($scholar->id);
          Session::flash('success', 'Scholar has been inserted successfully');
          return response()->json([
            'success' => 'ok' // for status 200
            ]);
          // return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scholar = Scholar::find($id);
        $data = compact('scholar');
        // dd($scholar->id);
        return view('scholar.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $scholar = Scholar::find($id);
        // return View::make('scholar.form')
        //   ->with()
        if($id !==''){
          $scholar = Scholar::find($id);
          $func = "updateScholar($id)";
          $levels = Level::all();
          $programs = Program::all();
          $testscoretypes = TestScoreType::all();
          $str ="";
          foreach ($scholar->universities as $university){
               $str .= $university->name.',';
          }
          $str = substr($str,0,-1); //substring function (ตัดตัวสุดท้ายออก)
          $scholar->name_university = "$str";
          $country_str ="";
          foreach ($scholar->countries as $country){
            $country_str .= $country->name.',';
          }
          $country_str = substr($country_str,0,-1);
          $scholar->name_country = "$country_str"; //ตรงนี้คือส่วนที่เราเชื่อมโยงกับ form $scholar->name_country โดยที่ name_country เป็นfield ที่สร้างขึ้นมาเอง ต้องสอดคล้องกับใน form
          // dd($str);
          $data = compact('func','levels','programs','testscoretypes','scholar','str');
          return view('scholar.form',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $scholar = $this->validate(request(),[
          'name_scholar' => 'required',
          'university' => 'required',
          'level_id' => 'required',
          'program_id' => 'required',
          'test_score_types_id' => 'required',
          'country' => 'required',
          'inclusion' => 'required',
          'description' => 'required'
        ]);
          $scholar = Scholar::find($id);
          $scholar->name_scholar = $request->name_scholar;
          $scholar->level_id = $request->level_id;
          $scholar->program_id = $request->program_id;
          // dd($scholar->id);
          $university = $request->university;
          $university_arr = explode(",",$university);
          $university_id_arr = array();
          for ($i=0;$i<count($university_arr);$i++){
            $uni = University::where('name','=',$university_arr[$i])->first();
            if ($uni!=null){
              array_push($university_id_arr,$uni->id);
            }
            else {
              $uni = new University;
              $uni->name = $university_arr[$i];
              $uni->save();
              array_push($university_id_arr,$uni->id);
            }
          }
          $country = $request->country;
          $country_arr = explode(",",$country);
          $country_id_arr = array();
          for ($i=0;$i<count($country_arr);$i++){
            $c = Country::where('name','=',$country_arr[$i])->first();
            if ($c!=null){
              array_push($country_id_arr,$c->id);
            }
            else {
              $c = new Country;
              $c->name = $country_arr[$i];
              $c->save();
              array_push($country_id_arr,$c->id);
            }
          }
          $scholar->inclusion = $request->inclusion;
          $scholar->description = $request->description;
          $scholar->save();
          $scholar->universities()->detach();
          for ($i=0;$i<count($university_id_arr);$i++){
            $scholar->universities()->attach($university_id_arr[$i]);
          }
          $scholar->countries()->detach();
          for ($i=0;$i<count($country_id_arr);$i++){
            $scholar->countries()->attach($country_id_arr[$i]);
          }
          $scholar->testscorefunc()->detach();
          $scholar->testscorefunc()->attach($request->test_score_types_id);
          $scholar->save();
          Session::flash('success', 'Scholar has been edit successfully');
          return response()->json([
            'success' => 'ok' // for status 200
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      Scholar::find($id)->delete();
      return back()->with('success','Scholar has be delete');

        // $scholar = Scholar::destroy($id);
        // // Session::flash('message','Success Delete');
        // return back()->with('success','Scholar has be delete');
    }
}
