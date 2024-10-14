<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
   public function booking(Request $request,$id){
        $booking= Booking::create(['package_id'=>$id,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'start_date'=>$request->start_date,
            'number_of_adult'=>$request->number_of_adult,
            'number_of_children'=>$request->number_of_children,
            'notes'=>$request->notes,
        ]);

    /*$mail=    Mail::send('admin.booking',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone_number' => $request->get('phone_number'),
                'start_date' => $request->get('start_date'),
                'number_of_adult' => $request->get('number_of_adult'),
                'number_of_children' => $request->get('number_of_children'),
                'notes' => $request->get('notes'),
            ), function($message)
            {

                $message->to('athirareshu9544@gmail.com', 'Admin');
            });
       $mail->SMTPOptions = array(
           'ssl' => array(
               'verify_peer' => false,
               'verify_peer_name' => false,
               'allow_self_signed' => true
           )
       );*/
        return back()->with('success', 'Thanks for contacting us!');

    }




    public function contact(Request $request)
    {
        $request->validate([

            'email' => 'required',
            'number' => 'required',
        ]);
        if(!empty($request->messege))
        {
            $contact= Contactus::create(['name'=>$request->name,
                'email'=>$request->email,
                'number'=>$request->number,
                'subject'=>$request->subject,
                'messege'=>$request->messege,

            ]);
           /* $contact_mail=    Mail::send('admin.booking',
                array(
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'subject' => $request->get('subject'),
                    'messege' => $request->get('messege'),

                ), function($message)
                {

                    $message->to('athirareshu9544@gmail.com', 'Admin');
                });
            $contact_mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );*/
        }
        else
        {

            $contactus= Contactus::create(['name'=>$request->name,
                'email'=>$request->email,
                'number'=>$request->number,
                'subject'=>$request->subject,

            ]);


           /* $contact_mail=    Mail::send('admin.booking',
                array(
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'subject' => $request->get('subject'),
                    'messege' => $request->get('messege'),

                ), function($message)
                {

                    $message->to('athirareshu9544@gmail.com', 'Admin');
                });
            $contact_mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );*/

            flash('Mail sent Successfully')->important()->success();
            return Redirect::back();
        }
        return response()->json(true);


    }







}
