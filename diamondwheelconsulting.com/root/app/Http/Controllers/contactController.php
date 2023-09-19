<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Docums;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Mail;



class contactController extends Controller
{
    public function docs(){
        $docum = docums::all();

        return view('admin.add_docs', compact('docum'));

    }
    public function sendMail(){
        if(isset($_POST['submit'])){
        $to = "niiodoi2@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $subject = _$Post["subject"];
        // $subject2 = "Copy of your form submission";
        $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
        // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        // $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        // You cannot use header and echo together. It's one or the other.
            }
        }
    
        public function docs_upload(Request $request)
        {
    
            // Docums::create([
        //     'name' => $request->name,
            //     'file' => $request->file
            // ]);
    
        //     $docum = docums::all();
    
        //     if ($request->hasFile('file')) {
        //         $file = $request->file;
    //         $filename = time().$file->getClientOriginalName();
    //         $save = Docums::create([
    //             "name" => $request->name,
    //             "file" => $filename,
    //         ]);
    //        $savefile = Storage::putFileAs('public/files',$file, $filename);
    //     }
        
    //     if (! $save && $savefile) {
    //         return back()->with("error", "Documents could not be added");
    //     }
    //     return back()->with("success", "Documents added successfully"); 

    //     return redirect() -> back()->with('noted', 'Document added successfully');
               
    // } 



    // public function save(Request $request) { 

    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'subject' => 'required',
    //         'phone_number' => 'required',
    //         'message' => 'required'
    //     ]);

    //     $contact = new Contact;

    //     $contact->name = $request->name;
    //     $contact->email = $request->email;
    //     $contact->subject = $request->subject;
    //     $contact->phone_number = $request->phone_number;
    //     $contact->message = $request->message;

    //     $contact->save();
        
    //     return back()->with('success', 'Thank you for contact us!');

    // }

    // public function storeContactForm(Request $request) 

    // { 

    //     $request->validate([ 

    //         'name' => 'required', 

    //         'email' => 'required|email', 

    //         // 'phone' => 'required|digits:10|numeric', 

    //         'subject' => 'required', 

    //         'message' => 'required', 

    //     ]); 

 

    //     $input = $request->all(); 

 

    //     Contact::create($input); 

 

    //     //  Send mail to admin 

    //     \Mail::send('contactMail', array( 

    //         'name' => $input['name'], 

    //         'email' => $input['email'], 

    //         // 'phone' => $input['phone'], 

    //         'subject' => $input['subject'], 

    //         'message' => $input['message'], 

    //     ), function($message) use ($request){ 

    //         $message->from($request->email); 

    //         $message->to('niiodoi2@gmail.com', 'Admin')->subject($request->get('subject')); 

    //     }); 

 

    //     return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']); 

    // } 
        /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

        return view('contactForm');

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required|digits:10|numeric',

            'subject' => 'required',

            'message' => 'required'

        ]);

  

        Contact::create($request->all());

  

        return redirect()->back()

                         ->with(['success' => 'Thank you for contacting us. we will contact you shortly.']);

    }
}
