<?php
namespace App\Http\Controllers;
use App\job_seeker;
use Illuminate\Http\Request;
use DB;
use DateTime;
use App\Models\JobSeeker;
use App\Models\City;
use App\Models\Company;
use App\Models\University;
use App\Models\Detail;
use App\Models\Resume;
use App\Models\EducationalDetail;
use App\Models\ExperienceDetail;
use App\Models\Skill;
use App\Models\Language;
use App\Models\JobCategory;
use App\Models\Course;
use App\Models\Institute;

class JobSeekerController extends Controller
{
    public function getIndex()
    {
        $job_seekers = JobSeeker::all();
        return view('pages.job_seeker',[
            'job_seekers' => $job_seekers
        ]);
    }

    public function postLoadCityNiceAction(Request $request)
    {
        if($request->ajax())
        {
            $cities = City::paginate(1000);
            return response()->json($cities);
        }
    }
    public function postLoadCompanyNiceAction(Request $request)
    {
        if($request->ajax())
        {
            $companies = Company::all();
            return response()->json($companies);
        }
    }
    public function postLoadUniversityNiceAction(Request $request)
    {
        if($request->ajax())
        {
            $universities = University::all();
            return response()->json($universities);
        }
    }
    public function postLoadSkillNiceAction(Request $request)
    {
        if($request->ajax())
        {
            $skills = Skill::all();
            return response()->json($skills);
        }
    }
    public function postLoadLanguageNiceAction(Request $request)
    {
        if($request->ajax())
        {
            $languages = Language::all();
            return response()->json($languages);
        }
    }
    public function postLoadDesignationNiceAction(Request $request)
    {
        if($request->ajax())
        {
            $designations = JobCategory::all();
            return response()->json($designations);
        }
    }
    public function postLoadCourseNiceAction(Request $request)
    {
        if($request->ajax())
        {
            $courses = Course::all();
            return response()->json($courses);
        }
    }
    public function postLoadInstituteNiceAction(Request $request)
    {
        $university =$request['university'];
        if($request->ajax())
        {
            $institutes = Institute::all()->where('ins_uni_id', $university);
            return response()->json($institutes);
        }
    }
    public function postInsertNiceAction(Request $request)
    {
        try {
            DB::connection()->getPdo()->beginTransaction();

            if($request->ajax())
            {
                $var = $request['seekers_dob'];
                $date = str_replace('/', '-', $var);
                $seekers_dob=date('Y-m-d', strtotime($date));
                $seekers_createdon=new DateTime();
                $js = new JobSeeker();
                $js_detail=new Detail();
                $js_resume=new Resume();
                $js_edudetail=new EducationalDetail();
                $js_expdetail=new ExperienceDetail();

                $js_detail->detail_city_id = $request['seekers_city'];
                $js_detail->address = $request['seekers_address'];
                $js_detail->landline = $request['seekers_landline'];
                $js_detail->mobile = $request['seekers_mobile'];
                $js_detail->email = $request['seekers_email'];
                $js_detail->pincode = $request['seekers_pincode'];
                $js_detail->alt_mobile = $request['seekers_alt_mobile'];
                $js_detail->save();
                $seekers_detailId = $js_detail->id;
                echo "Query-1 Executed".$seekers_detailId."<br/>";
                $Rawjson=rawurldecode($_POST['experience_details']);
                $Exptable = json_decode($Rawjson, true);
                print_r($Exptable);
                $expid_array = array();

                foreach($Exptable as $key => $value)
                {
                    $js_expdetail->exp_cmp_id = $value['expcmpid'];
                    $var = $value['expfromyear'];
                    $date = str_replace('/', '-', $var);
                    $expfromyear=date('Y-m-d', strtotime($date));
                    $js_expdetail->from_year = $expfromyear;

                    $var = $value['exptoyear'];
                    $count=substr_count($var,"/");
                    if($count>1)
                    {
                        $date = str_replace('/', '-', $var);
                        $exptoyear=date('Y-m-d', strtotime($date));
                    }
                    else
                    {
                        $exptoyear="Current";
                    }
                    $js_expdetail->to_year = $exptoyear;
                    $js_expdetail->job_title = $value['jobtitle'];
                    $js_expdetail->salary = $value['expsalary'];
                    if($value['expcmpid'] <> "")
                    {
                        $js_expdetail->save();
                        $expId = $js_detail->exp_id;
                        array_push($expid_array,$expId);
                    }
                }
                $expidlist = implode (", ", $expid_array);
                echo "Query-2 Executed".$expidlist."<br/>";
                $Rawjson=rawurldecode($_POST['educational_details']);
                $Edutable = json_decode($Rawjson, true);
                print_r($Edutable);
                $eduid_array = array();
                foreach($Edutable as $key => $value)
                {
                    $js_edudetail->edu_ins_id = $value['eduinsid'];
                    $js_edudetail->edu_city_id = $value['educityid'];
                    $js_edudetail->edu_course_id = $value['educourseid'];
                    $js_edudetail->pass_year = $value['passyear'];
                    $js_edudetail->percent = $value['passpercent'];
                    if($value['eduinsid'] <> "")
                    {
                        $js_edudetail->save();
                        $eduId = $js_edudetail->edu_id;
                        array_push($eduid_array, $eduId);
                    }
                }
                $eduidlist = implode (", ", $eduid_array);

                echo "Query-3 Executed".$eduidlist."<br/>";
                $js_resume->designation = $request['seekers_designation'];
                $js_resume->objective = $request['seekers_objective'];
                $js_resume->exp_id = $expidlist;
                $js_resume->edu_id = $eduidlist;
                $js_resume->save();
                $seekers_resumeId = $js_resume->res_id;

                echo "Query-4 Executed".$seekers_resumeId."<br/>";

                $js->seek_name = $request['seekers_name'];
                $js->seek_surname = $request['seekers_surname'];
                $js->gender = $request['seekers_gender'];
                $js->marital_status = $request['seekers_mstatus'];
                $js->dob = $seekers_dob;
                $js->languages = $request['seekers_languages'];
                $js->skills = $request['seekers_skill'];
                $js->seek_status = $request['seek_status'];
                $js->created_on = $seekers_createdon;
                $js->seek_detail_id = $seekers_detailId;
                $js->seek_resume_id = $seekers_resumeId;
                $js->save();
                echo "Final Query Executed";

                $file=$request['file'];
                $name=$_FILES['file']['name'];
                $tmp_name=$_FILES['file']['tmp_name'];
                if(isset($name))
                {
                    if(!empty($name))
                    {
                        $location="photos/";
                        $file_path=$name.".jpg";
                        move_uploaded_file($tmp_name,$location.$name.".jpg");
                    }
                }
                echo "File Uploaded";
                DB::connection()->getPdo()->commit();

                return response()->json(['message' => 'Saved Successfully']);
            }


        } catch (\PDOException $e) {
            // Woopsy
            return response()->json(['message' => $e->getMessage()]);
            DB::connection()->getPdo()->rollBack();
        }

    }
}
