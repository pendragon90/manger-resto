<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Comment::with('user')->get();
        
        $view = [
            'title' => 'ulasan',
            'comments' => $comment
        ];

        return view('web.ulasan', $view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.tes', [
            'title' => 'tes',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = $request->input('comment');
        $user_id = $request->session()->get('user_id');

        Comment::create([
            'user_id' => $user_id,
            'comment' => $comment,
        ]);

        return redirect('ulasan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::with('user')->where('id', $id)->first();
        
        $view = [
            'title' => 'ulasan',
            'comment' => $comment
        ];

        return view('web.ulasan', $view);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comment = $request->input('comment');
        $user_id = $request->session()->get('user_id');

        Comment::where('id',$id)->update([
            'user_id' => $user_id,
            'comment' => $comment,
        ]);

        return redirect('ulasan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Comment::where('id', $id)->delete();

        return redirect('ulasan');
    }
}
