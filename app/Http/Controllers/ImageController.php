<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index()
    {
        $Images = Image::latest()->paginate(5);
        return view('image', compact('Images'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'required',

        ]);
        // $images = $request->file('image');
        $image_path = $request->file('image');

        // print_r( $image_path);
        foreach($request->file('image') as $file)
            {
                $image_path=$file->store('/Image', 'public');
                $data[] = $image_path;
            }

            $data_str=implode("/img_img",$data);
        // $file= new File();
        // $file->filenames=json_encode($data);
        // $file->save();

        Image::create([
            'name' => $request->post('name'),
            'category' => $request->post('category'),
            'image' => $data_str
        ]);


        return redirect()->route('Image.index')
            ->with('success', 'Image created successfully.');
    }


    public function Imagelisting()
    {
        $ImageLi = Image::select('name', 'category','image','id')
            ->get();


            return view('Imagelisting', compact('ImageLi'));

    }

    public function Imagelistingone($id)
    {
        $ImageLi = Image::select('name', 'category','image','id')->where('id', $id)->get();

            return view('imagegallery', compact('ImageLi'));

    }


    public function destroy($id){

        $Image = Image::findOrFail($id);
        $destination = public_path('/storage/'.$Image->image);

        $destination= File::delete($destination);

        $Image->delete();
        return redirect()->route('image.imagelisting');
    }




    public function status(Request $request, $status, $id)
    {
        $model = Image::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message', 'Category status updated');
        return redirect()->route('Image.Imagelisting');
    }
}
