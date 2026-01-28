<?php

// app/Http/Controllers/JournalController.php
namespace Tutorialspoint\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Tutorialspoint\Http\Controllers\Controller;
use Tutorialspoint\Journal;

class JournalController extends Controller


{
    public function __construct()
    {
        $this->middleware('article');
    }


    public function index()
    {


        return view('admin_folder.journals.index');
    }

    public function list()
    {
        return response()->json(
            Journal::orderBy('position',  'desc')->get()
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
            /*    $request->validate([
                'title' => 'required',
                'file'  => 'required|mimes:pdf,doc,docx'
            ]);
             */

            //ensure the uploaded file is image use the extension  please
            //check if picture is set not null
            if ($request->hasFile('picture')) {
                $extension = $request->file('picture')->getClientOriginalExtension();
                if (!in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {

                    return  response()->json(['success' => false, 'message' => 'Invalid picture format. Only jpg, jpeg, png, gif are allowed.']);
                }
                $picture = $request->file('picture')->store('journals', 'public');
            }


            $file = $request->file('file')->store('journals', 'public');

            $lastPosition = Journal::max('position') ?? 0;
            $array  =  [
                'title' => $request->title,
                'author' => $request->author,
                'file' => $file,
                'position' => $lastPosition + 1,
                'description' => $request->description
            ];

            if (isset($picture)) {
                $array['picture'] = $picture;
            }


            Journal::create($array);

            return response()->json(['success' => true,  'message' => 'Journal uploaded successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }


    public function update(Request $request, $id)
    {
        $journal = Journal::findOrFail($id);

        $data = [
            'title'  => $request->title,
            'author' => $request->author,
            'description' => $request->description
        ];

        // If a new file is uploaded
        if ($request->hasFile('file')) {

            // Delete old file
            if ($journal->file && Storage::disk('public')->exists($journal->file)) {
                Storage::disk('public')->delete($journal->file);
            }

            // Store new file
            $data['file'] = $request->file('file')->store('journals', 'public');
        }

        if ($request->hasFile('picture')) {

            // Delete old picture
            if ($journal->picture && Storage::disk('public')->exists($journal->picture)) {
                Storage::disk('public')->delete($journal->picture);
            }

            // Store new picture
            $data['picture'] = $request->file('picture')->store('journals', 'public');
        }

        $journal->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Journal updated successfully'
        ]);
    }


    public function destroy($id)
    {
        $journal = Journal::findOrFail($id);
        Storage::disk('public')->delete($journal->file);
        $journal->delete();

        return response()->json(['success' => true]);
    }

    public function togglePublish($id)
    {
        $journal = Journal::findOrFail($id);
        $journal->update([
            'is_published' => !$journal->is_published
        ]);

        return response()->json(['success' => true]);
    }

    public function reorder(Request $request)
    {
        foreach ($request->order as $index => $id) {
            Journal::where('id', $id)->update([
                'position' => $index + 1
            ]);
        }

        return response()->json(['success' => true]);
    }


    public function download($id)
    {
        $journal = Journal::findOrFail($id);
        return response()->download(
            storage_path('app/public/' . $journal->file)
        );
    }
}
