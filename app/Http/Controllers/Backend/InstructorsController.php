<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::all();
        return view('backend.pages.instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states  = DB::table('states')->orderBy('state_name', 'asc')->get();
        return view('backend.pages.instructors.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:instructors',
            'phone' => 'required',
            'university' => 'required',
            'department' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);

        // Create New User
        $instructor = new Instructor();
        $instructor->name = $request->name;
        $instructor->email = $request->email;
        $instructor->phone = $request->phone;
        $instructor->university = $request->university;
        $instructor->department = $request->department;
        $instructor->address = $request->address;
        $instructor->state = $request->state;
        $instructor->city = $request->city;
        $instructor->save();
        
        session()->flash('success', 'Instructor has been created !!');
        return redirect()->route('admin.instructors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructor = Instructor::find($id);
        $states  = DB::table('states')->orderBy('state_name', 'asc')->get();
        return view('backend.pages.instructors.edit', compact('instructor','states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Create New User
        $instructor = Instructor::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email',
            'phone' => 'required',
            'university' => 'required',
            'department' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);

        // Create New User
        $instructor->name = $request->name;
        $instructor->email = $request->email;
        $instructor->phone = $request->phone;
        $instructor->university = $request->university;
        $instructor->department = $request->department;
        $instructor->address = $request->address;
        $instructor->state = $request->state;
        $instructor->city = $request->city;
        $instructor->save();

        session()->flash('success', 'Instructor has been updated !!');
        return redirect()->route('admin.instructors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Instructor::find($id);
        if (!is_null($user)) {
            $user->delete();
        }

        session()->flash('success', 'User has been deleted !!');
        return back();
    }
}
