<?php

namespace Abhitheawesomecoder\Jobboardpro\Controllers;

use Abhitheawesomecoder\Jobboardpro\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
class JobboardController extends Controller
{

  /*	public function __construct(){
       $this->middleware('auth');
    }*/

    public function home()
    {
      return view('vendor.abhitheawesomecoder.jobboardpro.views.login');
    }
    public function jobdetails($id){

       $job = Job::find($id);

       return view('vendor.abhitheawesomecoder.jobboardpro.views.jobdetails',["job" => $job]);
    }
    public function jobsearch(Request $request)
    {
      $builder = Job::query();
      if ($request->has('keyword')) {
          $queryString = $request->input('keyword');
          $builder->where('job_title', 'LIKE', "%$queryString%");
      }
      if ($request->has('location')) {
          $queryString = $request->input('location');     

          $builder->where(function ($query) use ($queryString)  {
                $query->where('job_location', 'LIKE', "% $queryString %")
                      ->orWhere('job_location', 'LIKE', "$queryString %")
                      ->orWhere('job_location', 'LIKE', "% $queryString");
            });
      }
      if ($request->has('category')) {
          $queryString = $request->input('category');
          $builder->where('job_category', 'LIKE', "%$queryString%");
      }
     
      $jobs = $builder  ->orderBy('id', 'DESC')->get();

     
      return view('vendor.abhitheawesomecoder.jobboardpro.views.search',["jobs" => $jobs]);

    }

    public function jobboard()
    {
      $ufjobs = Job::where('featured',false)->orderBy('id', 'DESC')->get();

      $fjobs = Job::where('featured',true)->orderBy('id', 'DESC')->get();

      return view('vendor.abhitheawesomecoder.jobboardpro.views.job',["ufjobs" => $ufjobs,"fjobs" => $fjobs]);

    }
    public function contact()
    {
      return view('vendor.abhitheawesomecoder.jobboardpro.views.contact');
    }
    public function sendcontactmail(Request $input){


      $toEmail = "pascal@totalsimplicit.com.au";
      $toName = "Admin";

        $fromEmail = $input["email"];
        $fromName = $input["name"];

        /*  $this->validate($input, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|max:255'
      ]);*/

            $validator = Validator::make($input->all(), [
              'name' => 'required|max:255',
              'email' => 'required|email|max:255',
              'message' => 'required|max:255'
           ]);

           if ($validator->fails()) {

               return json_encode(['responseText' => 'Opps something went wrong']);

           }


        $data = array('messagetxt' => $input["message"],'fromName' => $fromName ,'fromEmail' => $fromEmail);
        \Mail::send('vendor.abhitheawesomecoder.jobboardpro.views.mail', $data , function ($message) use ($fromEmail, $fromName, $toEmail, $toName) {
            $message->from($fromEmail, $fromName);
            $message->to($toEmail, $toName)->subject('Contact message for job');
        });

      return json_encode(['responseText' => 'Message send successfully']);
    }

}
