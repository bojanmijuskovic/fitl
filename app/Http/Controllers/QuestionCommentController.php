<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Comment;

class QuestionCommentController extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $questionId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $questionId)
    {
        $comment = new Comment;

        $comment->question_id = $questionId;
        $comment->comment = $request->comment;

        if ( ! $comment->save() ) {
            return redirect()
                ->action('QuestionController@show', $questionId)
                ->with('errors', $comment->getErrors())
                ->withInput();
        }

        // Success!
        return redirect()
            ->action('QuestionController@show', $questionId)
            ->with('message', '<div class="alert alert-success">Comment added!</div>');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $questionId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    
    public function update(Request $request, $questionId, $id)
    {
        $comment = Comment::findOrFail($id);

        $comment->comment = $request->comment;

        if ( ! $comment->save() ) {
            return redirect()
                ->action('QuestionController@show', $questionId)
                ->with('errors', $comment->getErrors())
                ->withInput();
        }

        // Success!
        return redirect()
            ->action('QuestionController@show', $questionId)
            ->with('message', '<div class="alert alert-success">Comment updated!</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $questionId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($questionId, $id)
    {
        $comment = Comment::findOrFail($id);

        $comment->delete();

        return redirect()
            ->action('QuestionController@show', $questionId)
            ->with('message',
                '<div class="alert alert-info">Comment deleted.</div>');
    }
}
