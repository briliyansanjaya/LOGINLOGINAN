<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{

    public function index()
    {
        $agents = DB::table('agents')->get();
        return view('agent', compact('agents'), [
            'title' => 'Home'
        ]);
    }

    public function add(){
        return view('add', [
            'title' => 'Add'
        ]);
    }

    public function input(Request $request){
        $request->validate([
            'agent_name' => 'required|min:1',
            'agent_desc' => 'required',
        ]);

        DB::table('agents')->insert([
            'agent_name' => $request->agent_name,
            'agent_desc' => $request->agent_desc,
            'agent_pict' => $request->agent_pict
        ]);
        return redirect('/');
    }

    public function delete(Request $request){
        DB::table('agents')->where('agent_id', $request->id)->delete();
        return redirect('/');
    }

    public function edit($id){
        $agents = DB::table('agents')->where('agent_id', $id)->get();

        return view('edit', ['agents' => $agents], [
            'title' => 'Edit'
        ]);
    }

    public function update(Request $request){
        // dd($request->all(), $);
        $request->validate([
            'agent_name' => 'required|min:1',
            'agent_desc' => 'required',
            // 'agent_image' => 'required|mimes:png,jpg',
        ]);

        DB::table('agents')->where('agent_id', $request->agent_id)->update([
            'agent_name' => $request->agent_name,
            'agent_desc' => $request->agent_desc,
            'agent_pict' => $request->agent_pict
        ]);

        return redirect('/');
    }
}
