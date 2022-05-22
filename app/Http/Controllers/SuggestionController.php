<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestion;

class SuggestionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggestions = Suggestion::all()->sortByDesc('created_at');

        return view('dashboard.saran', [
            'active' => 'suggestion',
            'messages' => $suggestions->take(4),
            'suggestions' => $suggestions,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suggestion::destroy($id);
        return redirect('dashboard/suggestions');
    }
}
