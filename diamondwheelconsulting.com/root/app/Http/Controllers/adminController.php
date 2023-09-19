<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trends;
use App\Models\Docums;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class adminController extends Controller
{
    public function uploadnews()
    {
        $trend = trends::all();


        return view('admin.add_news', compact('trend'));
        // return view('admin.add_news');
    }

    public function editNews(Request $request) {
        $trend = trends::all();
       $edit_trend = Trends::where('id', $request->query('trend'))->first();
       return view('admin.add_news', ['edit_trend' => $edit_trend, 'trend' => $trend]);

    }

    public function updateTrend (Request $request) {
            $update = Trends::where('id', $request->id)->update([
                "title" => $request->title,
                "category" => $request->category,
                "writeup" => $request->writeup,
            ]);
        if (! $update) {
            return back()->with("error", "News could not be updated");
        }
        return back()->with("success", "News updated successfully");  
    }

    public function trendupload(Request $request)
    {
        if ($request->hasFile('photo')) {
            $image = $request->photo;
            $filename = time().$image->getClientOriginalName();
            $save = Trends::create([
                "title" => $request->title,
                "category" => $request->category,
                "writeup" => $request->writeup,
                "photo" => $filename,
            ]);
           $savefile = Storage::putFileAs('public/news',$image, $filename);
        }
        
        if (! $save && $savefile) {
            return back()->with("error", "News could not be added");
        }
        return back()->with("success", "News added successfully");   
    } 

    public function deletetrend($id)
    {
        $data = Trends::find($id);
        $data -> delete();
        return back()->with('message_deleted', 'News deleted successfully');
    }


    public function docs(){
        $docum = docums::all();

        return view('admin.add_docs');

    }

    public function docs_upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file;
            $filename = time().$file->getClientOriginalName();
            $save = Docums::create([
                "name" => $request->name,
                "file" => $filename,
            ]);
           $savefile = Storage::putFileAs('public/documents',$file, $filename);
        }
        if (! $save && $savefile) {
            return back()->with("error", "Documents could not be added");
        }
        return back()->with("success", "Documents added successfully"); 
 
    } 

    public function deletedocs($id)
    {
        $data = Docums::find($id);
        $data -> delete();
        return back()->with('message_deleted', 'News deleted successfully');
    }
}

