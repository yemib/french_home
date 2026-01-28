<?php


namespace Tutorialspoint\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Tutorialspoint\Journal;
use Tutorialspoint\Section;

class SectionController extends Controller


{
    public function __construct()
    {
        $this->middleware('article');
    }


    public function index()
    {


        return view('admin_folder.sections.index');
    }

    public function list()
    {
        return response()->json(
            Section::orderBy('position',  'desc')->get()
        );
    }


    /*       public function list(Request $request)
    {
        $journals = Journal::orderBy('position')->paginate(10);
        return response()->json($journals);
    } */

    public function store(Request $request)
    {
        try {
          
        

            $lastPosition =  Section::max('position') ?? 0;
            $array  =  [
                'title' => $request->title,
                'background_color' => $request->background_color,
                'color' => $request->color,
                'position' => $lastPosition + 1,
                'code' => $request->code
            ];

            Section::create($array);

            return response()->json(['success' => true,  'message' => 'Section uploaded successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }


    public function update(Request $request, $id)
    {
        $section = Section::findOrFail($id);

      

          $data  =  [
                'title' => $request->title,
                'background_color' => $request->background_color,
                'color' => $request->color,
               
                'code' => $request->code
            ];

   
        $section->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Section updated successfully'
        ]);
    }


    public function destroy($id)
    {
        $journal = Section::findOrFail($id);
       
        $journal->delete();

        return response()->json(['success' => true]);
    }

    public function togglePublish($id)
    {
        $journal = Section::findOrFail($id);
        $journal->update([
            'is_published' => !$journal->is_published
        ]);

        return response()->json(['success' => true]);
    }

    public function reorder(Request $request)
    {
        foreach ($request->order as $index => $id) {
            Section::where('id', $id)->update([
                'position' => $index + 1
            ]);
        }

        return response()->json(['success' => true]);
    }



}
