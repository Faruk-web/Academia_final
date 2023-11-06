<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use App\Models\Property;
use App\Models\Multi_image;
use App\Models\Privacy;
class HomeController extends Controller
{
    public function index()
    {
        $property=Property::select('id','name','image')->get();
        $privacy=Privacy::select('id','name','image','title')->get();
        return view('front.home.home',compact('property','privacy'));
    }
    public function pages()
    {
        return view('front.page.page');
    }
    public function blogs()
    {
        return view('front.blog.blog');
    }
    public function blogDetails()
    {
        return view('front.blog.blog_details');
    }
    public function academiaGlobal()
    {
        return view('front.coaching.academia_lobal');
    }
    public function academia()
    {
        return view('front.coaching.academia');
    }
    public function studyingAbroad()
    {
        return view('front.visa.studying_abroad');
    }
    public function comprehensiveCounselling()
    {
        return view('front.country.comprehensive_counselling');
    }
    public function studentVisa()
    {
        return view('front.assist.student_visa');
    }
    public function applicationProcess()
    {
        return view('front.assist.application_process');
    }
    public function programSelection()
    {
        return view('front.assist.program_selection');
    }
    public function scholarshipApplication()
    {
        return view('front.assist.scholarship_application');
    }

    public function participation()
    {
        return view('front.assist.participation');
    }
    public function departureCounselling()
    {
        return view('front.assist.departure_counselling');
    }
    public function visitVisa()
    {
        return view('front.assist.visit_visa');
    }
    public function Immigration()
    {
        return view('front.assist.immigration');
    }
    public function about()
    {
        $privacy=Privacy::select('id','name','image','title')->get();
        return view('front.about.about',compact('privacy'));
    }

    public function contact()
    {
        return view('front.contact.contact');
    }
    public function ielts()
    {
        return view('front.contact.ielts');
    }
    public function pte()
    {
        return view('front.contact.pte');
    }
    public function studyAustralia()
    {
        return view('front.assist.study_australia');
    }

    public function Provider()
    {
        return view('front.assist.provider');
    }
    public function Canada()
    {
        return view('front.assist.canada');
    }
    public function nitedKingdom()
    {
        return view('front.assist.nited_Kingdom');
    }

    public function visaExtension()
    {
        return view('front.assist.visa_extension');
    }
    public function unitedState()
    {
        return view('front.assist.united_state');
    }
    public function topCourses()
    {
        $property=Property::select('id','name','image')->get();
        return view('front.assist.top_courses',compact('property'));
    }
    public function topCoursesDetails($id)
    {
        $property_detail=Property::select('id','name','privacy')->find($id);
        return view('front.assist.top_courses_details',compact('property_detail'));
    }

     public function Property($id){
        $property=Property::find($id);
        $multi_iamge=Multi_image::where('property_id',$property->id)->get();
        return view('front.assist.property',compact('multi_iamge','property'));
     }
     public function privacy($id){

        if ($id==5) {
            return view('front.assist.united_state');
          } elseif ($id==6) {
            return view('front.assist.study_australia');
          } elseif ($id==7) {
            return view('front.assist.canada');
          }  elseif ($id==8) {
            return view('front.assist.nited_Kingdom');
          } else {
            $privacy=Privacy::find($id);
            return view('front.assist.privacy',compact('privacy'));
          }

     }

}
