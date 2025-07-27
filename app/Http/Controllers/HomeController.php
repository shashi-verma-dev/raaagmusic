<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Website_status;
use App\Models\Contact_us;
use App\Models\Testimonials;
use App\Models\Faq;
use App\Models\Settings;
use App\Models\Image_categories;
use App\Models\Image_assets;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role === 'admin' && auth()->user()->email ==='admin@gmail.com')
        {
            return view('admin/home');
        }
        else
        {
            
            return redirect()->route('/');
            // return view('frontend.index');
        }
    }

    public function website_status()
    {
        if(auth()->user()->role === 'admin')
        {
            $Website_status = Website_status::first();
            return view('admin/website_status',compact('Website_status'));
        }
        else
        {
        }
    }

    public function manage_settings()
    {
        if(auth()->user()->role === 'admin')
        {
            $setting = Settings::first();
            return view('admin/manage_settings',compact('setting'));
        }
        else
        {
        }
    }


    public function manage_contact_enquiry()
    {
        if(auth()->user()->role === 'admin')
        {
            $data = Contact_us::orderBy('id', 'desc')->paginate(10);
            return view('admin/manage_contact_enquiry', compact('data'));
            
        }
        else
        {
        }
    }


    public function manage_testimonials()
    {
        if(auth()->user()->role === 'admin')
        {
            $data = Testimonials::orderBy('id', 'desc')->paginate(10);
            return view('admin/manage_testimonials',compact('data'));
        }
        else
        {
        }
    }

    public function manage_faq()
    {
        if(auth()->user()->role === 'admin')
        {
            $data = Faq::orderBy('id', 'desc')->paginate(10);
            return view('admin/manage_faq',compact('data'));
        }
        else
        {
        }
    }

    public function updateWebsiteStatus(Request $request)
    {
        if (auth()->user()->role === 'admin') {
            $request->validate([
                'status' => 'required|in:0,1',
                'deactive_note' => 'nullable|string'
            ]);

            Website_status::updateOrCreate([], [
                'status' => $request->status,
                'note' => $request->status == 0 ? $request->deactive_note : null
            ]);

            return redirect()->back()->with('success', 'Website status updated successfully.');
        } else {
            return redirect()->back()->with('error', 'permission not allowed.');
        }
    }




    public function testimonials_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'post' => 'required|string|max:255',
            'stars' => 'required|integer|min:1|max:5',
            'message' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5048',
        ]);
    
        try {
            $testimonial = new Testimonials;
            $testimonial->name = $request->name;
            $testimonial->post = $request->post;
            $testimonial->stars = $request->stars;
            $testimonial->message = $request->message;
            // $testimonial->status = $request->status ?? 1;
    
            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/testimonial_images'), $imageName);
                $testimonial->image = 'admin/testimonial_images/' . $imageName;
                
            }
    
            $testimonial->save();
    
            return redirect()->back()->with('success', 'Testimonial added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInput();
        }
    }
    

    public function del_testimonials($id='')
    {
       $record = Testimonials::find($id);

        if($record)
        {
        $record->delete();
        return redirect()->back()->with('success', 'Testimonial Deleted successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'Record Not Found !!');
        }
    }


    public function faq_store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);
    
        try {
            $faq = new Faq;
            $faq->question = $request->question;
            $faq->answer = $request->answer;    
            $faq->save();
    
            return redirect()->back()->with('success', 'Faq added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInput();
        }
    }

    public function del_faq($id='')
    {
       $record = Faq::find($id);

        if($record)
        {
        $record->delete();
        return redirect()->back()->with('success', 'Faq Deleted successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'Record Not Found !!');
        }
    }


    public function save_setting(Request $request)
    {
        $request->validate([
            'email1'         => 'required|email',
            'email2'         => 'nullable|email',
            'number1'        => 'required|string|max:14',
            'number2'        => 'nullable|string|max:14',
            'address'        => 'required|string|max:255',
            'timing'         => 'required|string|max:255',
            'insta_link'     => 'nullable',
            'x_link'         => 'nullable',
            'pinterest_link' => 'nullable',
            'fb_link'        => 'nullable',
            'linkedin_link'  => 'nullable',
        ]);
    
        // Only one record exists in settings table
        $setting = Settings::first();
    
        if ($setting) {
            $setting->update($request->all());
        } else {
            Settings::create($request->all());
        }
    
        return back()->with('success', 'Settings saved successfully.');
    }
    

    public function image_categories()
    {
        if(auth()->user()->role === 'admin')
        {
            $data = Image_categories::all();
            return view('admin/image_categories',compact('data'));
        }
        else
        {
        }
    }


    public function imageCategoryStore(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:100|unique:image_categories,name',
            'status' => 'required|in:0,1',
            'icon' => 'required|mimes:jpeg,png,jpg,svg,gif|max:5048',
        ]);
    
        try {
            // Store data
            $category = new Image_categories();
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->status = $request->status;

 // Icon upload
 if ($request->hasFile('icon')) {
    $file = $request->file('icon');
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('admin/category_images'), $filename);
    $category->icon = 'admin/category_images/' . $filename;
}

            $category->save();
    
            return back()->with('success', 'Image Category added successfully.');
        } catch (\Exception $e) {
            // Log::error('Image category store failed: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while adding the category.');
        }
    }



    public function del_image_category($id='')
    {
       $record = Image_categories::find($id);

        if($record)
        {
        $record->delete();
        return redirect()->back()->with('success', 'Image Category Deleted successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'Record Not Found !!');
        }
    }

    public function updateImageCategory(Request $request)
{
    $request->validate([
        'id' => 'required|exists:image_categories,id',
        'name' => 'required|string|max:100|unique:image_categories,name,' . $request->id,
        'status' => 'required|in:0,1',
        'icon' => 'nullable|mimes:jpeg,png,jpg,svg,gif|max:5048',
    ]);

    try {
        $cat = Image_categories::findOrFail($request->id);
        $cat->name = $request->name;
        $cat->slug = \Str::slug($request->name);
        $cat->status = $request->status;
  // If icon is uploaded
  if ($request->hasFile('icon')) {
    $file = $request->file('icon');
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('admin/category_images'), $filename);
    $cat->icon = 'admin/category_images/' . $filename;
}

        $cat->save();

        return back()->with('success', 'Category updated successfully!');
    } catch (\Exception $e) {
        \Log::error('Category update failed: ' . $e->getMessage());
        return back()->with('error', 'Something went wrong!');
    }
}

public function upload_assets()
{
    if(auth()->user()->role === 'admin')
    {
        $categories = Image_categories::where('status',1)->get();
        return view('admin/upload_assets',compact('categories'));
    }
    else
    {
    }
}

public function edit_assets($id='')
{
    if(auth()->user()->role === 'admin')
    {
        $data = Image_assets::where('id',$id)->first();
        $categories = Image_categories::where('status',1)->get();
        return view('admin/edit_upload_assets',compact('data','categories'));
    }
    else
    {
    }
}




public function image_assets_store(Request $request)
{
    // dd($request->all());
    try {
    $request->validate([
        'category_id' => 'required|exists:image_categories,id',
        'name' => 'required|string',
        'description' => 'required|string',
        'stars' => 'required|integer|min:1|max:5',
        'premium' => 'required|boolean',
        'og_price' => 'required|min:0',
        'tags' => 'required|string',
        'org_file' => 'required|file',
        'org_file_without_bg' => 'nullable|file',
        'thumbnail_image' => 'required|file',
        'resolution' => 'required|string',
        'size' => 'required|string',
        'status' => 'required|in:0,1',
    ]);
    

    $asset = new Image_assets();
    $asset->category_id = $request->category_id;
    $asset->slug = Str::slug($request->name);
    $asset->name = $request->name;
    $asset->description = $request->description;
    $asset->stars = $request->stars;
    $asset->premium = $request->premium;
    $asset->tags = $request->tags;
    $asset->resolution = $request->resolution;
    $asset->size = $request->size;
    $asset->og_price = $request->og_price;
    $asset->other = $request->other;
    $asset->zip_file_size = $request->zip_file_size;
    $asset->status = $request->status ?? 1;

    if ($request->hasFile('org_file')) {
        $file = $request->file('org_file');
        $filename = 'with_bg_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('admin/asset_files'),  $filename);
        $asset->org_file = 'admin/asset_files/' . $filename;
    }
    
    if ($request->hasFile('org_file_without_bg')) {
        $file2 = $request->file('org_file_without_bg');
        $filename2 = 'no_bg_' . time() . '.' . $file2->getClientOriginalExtension();
        $file2->move(public_path('admin/asset_files') , $filename2);
        $asset->org_file_without_bg = 'admin/asset_files/' . $filename2;
    }
    
    if ($request->hasFile('thumbnail_image')) {
        $thumb = $request->file('thumbnail_image');
        $thumbName = 'thumb_' . time() . '.' . $thumb->getClientOriginalExtension();
        $thumb->move(public_path('admin/asset_files') , $thumbName);
        $asset->thumbnail_image = 'admin/asset_files/' . $thumbName;
    }

    if ($request->hasFile('zip_file')) {
        $zip_file = $request->file('zip_file');
        $zip_file_name = 'zip_file_' . time() . '.' . $zip_file->getClientOriginalExtension();
        $zip_file->move(public_path('admin/asset_files') , $zip_file_name);
        $asset->zip_file = 'admin/asset_files/' . $zip_file_name;
    }

    $asset->save();
    return redirect()->back()->with('success', 'Image asset added successfully!');

    } catch (\Illuminate\Validation\ValidationException $e) {
        return redirect()->back()->withErrors($e->validator)->withInput();
    } catch (\Exception $e) {
        Log::error('Image asset upload error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInput();
    }
}


public function assets_list()
{
    if(auth()->user()->role === 'admin')
    {
        $data = Image_assets::select('image_assets.name', 'image_assets.id','image_assets.name','image_assets.premium','image_assets.thumbnail_image', 'image_assets.status','image_categories.name as category_name')
        ->join('image_categories', 'image_assets.category_id', '=', 'image_categories.id')
        ->paginate(10);
        return view('admin/assets_list',compact('data'));
    }
    else
    {
    }
}

public function update_assets(Request $request, $id)
{
    $asset = Image_assets::findOrFail($id);

    $asset->category_id = $request->category_id;
    $asset->name = $request->name;
    $asset->stars = $request->stars;
    $asset->premium = $request->premium;
    $asset->og_price = $request->og_price;
    $asset->resolution = $request->resolution;
    $asset->size = $request->size;
    $asset->zip_file_size = $request->zip_file_size;
    $asset->status = $request->status;
    $asset->tags = $request->tags;
    $asset->description = $request->description;

    // Thumbnail Image
    if ($request->hasFile('thumbnail_image')) {
        $thumb = $request->file('thumbnail_image');
        $thumbName = 'thumb_' . time() . '.' . $thumb->getClientOriginalExtension();
        $thumb->move(public_path('admin/asset_files'), $thumbName);
        $asset->thumbnail_image = 'admin/asset_files/' . $thumbName;
    }

    // Original File with BG
    if ($request->hasFile('org_file')) {
        $file = $request->file('org_file');
        $filename = 'with_bg_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('admin/asset_files'), $filename);
        $asset->org_file = 'admin/asset_files/' . $filename;
    }

    // Original File without BG
    if ($request->hasFile('org_file_without_bg')) {
        $file2 = $request->file('org_file_without_bg');
        $filename2 = 'no_bg_' . time() . '.' . $file2->getClientOriginalExtension();
        $file2->move(public_path('admin/asset_files'), $filename2);
        $asset->org_file_without_bg = 'admin/asset_files/' . $filename2;
    }

    // Zip File
    if ($request->hasFile('zip_file')) {
        $zip = $request->file('zip_file');
        $zipName = 'zip_' . time() . '.' . $zip->getClientOriginalExtension();
        $zip->move(public_path('admin/asset_files'), $zipName);
        $asset->zip_file = 'admin/asset_files/' . $zipName;
    }

    $asset->save();

    return redirect()->back()->with('success', 'Asset updated successfully!');
}


public function del_asset($id = '')
{
    $record = Image_assets::find($id);

    if ($record) {
        // Define base path
        $basePath = 'public/';

        // Delete thumbnail image
        if (!empty($record->thumbnail_image)) {
            $thumbPath = $basePath . $record->thumbnail_image;
            // dd( $thumbPath);
            if (file_exists($thumbPath)) {
                unlink($thumbPath);
            }
        }

        // Delete original file
        if (!empty($record->org_file)) {
            $orgPath = $basePath . $record->org_file;
            if (file_exists($orgPath)) {
                unlink($orgPath);
            }
        }

        // Delete original file without background
        if (!empty($record->org_file_without_bg)) {
            $bgPath = $basePath . $record->org_file_without_bg;
            if (file_exists($bgPath)) {
                unlink($bgPath);
            }
        }

        // Delete zip file
        if (!empty($record->zip_file)) {
            $zipPath = $basePath . $record->zip_file;
            if (file_exists($zipPath)) {
                unlink($zipPath);
            }
        }
        // Finally delete record from DB
        $record->delete();

        return redirect()->back()->with('success', 'Image asset deleted successfully!');
    } else {
        return redirect()->back()->with('error', 'Record not found!');
    }
}


public function manage_account()
{
    if(auth()->user()->role === 'user')
    {
        return view('frontend/manage_account');
    }
    else
    {
    }
}

public function manage_admin_account()
{
    if(auth()->user()->role === 'admin')
    {
        return view('admin/manage_admin_account');
    }
    else
    {
    }
}




public function updateUserInfo(Request $request)
{
    try {
        // Validate user input
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:4',
        ]);

        $user = Auth::user();
        $user->name  = $request->name;
        $user->email = $request->email;

        // Update password if provided
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    } catch (\Illuminate\Validation\ValidationException $e) {
        return redirect()->back()
            ->withErrors($e->validator)
            ->withInput();
    } catch (\Exception $e) {
        Log::error('User update failed: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }
}



public function search_items(Request $request)
{
    $query = $request->input('query');

    $data = Image_assets::select(
            'image_assets.id',
            'image_assets.name',
            'image_assets.premium',
            'image_assets.thumbnail_image',
            'image_assets.status',
            'image_categories.name as category_name'
        )
        ->join('image_categories', 'image_assets.category_id', '=', 'image_categories.id')
        ->where('image_assets.name', 'like', "%{$query}%")
        ->orWhere('image_categories.name', 'like', "%{$query}%")
        ->paginate(10);

    return view('backend.assets_list', compact('data', 'query'));
}


// public function users_list(Request $request)
// {
//     $query = $request->input('query');

//     $data = User::where('is_admin',0)
//         ->paginate(10);
//     return view('backend.users_list', compact('data', 'query'));
// }

public function users_list(Request $request)
{
    $query = $request->input('query');

    $data = User::where('role', 'user')
        ->when($query, function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%');
        })
        ->orderByDesc('id')
        ->paginate(10);

    return view('admin/users_list', compact('data', 'query'));
}


public function del_user($id = '')
{
    $record = User::find($id);

    if ($record) {
        $record->delete();
        return redirect()->back()->with('success', 'User deleted successfully!');
    } else {
        return redirect()->back()->with('error', 'Record not found!');
    }
}


public function addWalletAmount(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'amount' => 'required|numeric|min:1'
    ]);

    try {
        DB::table('users')->where('id', $request->user_id)->increment('wallet_amount', $request->amount);

        return redirect()->back()->with('success', 'Amount added successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Something went wrong: ' . $e->getMessage());
    }
}

}