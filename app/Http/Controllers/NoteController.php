<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', Auth::id())->latest()->get();
        return view('notes.index', compact('notes'));
    }

    public function store(Request $request)
    {
        $request->validate(['content' => 'required|string']);

        Note::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->route('notes.index')->with('success', 'Note created successfully.');
    }

    public function update(Request $request, $id)
{

    $request->validate([
        'content' => 'required|string'
    ]);

    
    $note = Note::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

    
    $note->update([
        'content' => $request->content
    ]);

    
    return redirect()->route('notes.index')->with('success', 'Note updated successfully.');
}

    public function destroy($id)
    {
        $note = Note::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully.');
    }
}