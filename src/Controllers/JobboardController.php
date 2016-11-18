<?php

namespace Abhitheawesomecoder\Jobboardpro\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
class JobboardController extends Controller
{

  	public function __construct(){
       $this->middleware('auth');
    }

    public function home()
    {
      return view('vendor.abhitheawesomecoder.jobboardpro.views.login');
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
