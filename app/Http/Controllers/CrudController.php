<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CrudModel;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function home() { 

        $list = CrudModel::all();

        return view('home',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required', 
            'location' => 'required', 
            'email' => 'required'
        ]);

        $human = new CrudModel();

        $human->name = $data['name']; 
        $human->age = $data['age'];
        $human->location = $data['location']; 
        $human->email= $data['email'];

        $human->save(); 

        return redirect()->route('home')->with('success','Successfully added');
    }

    /*

    public function store(Request $request) { 
        

        $data = $request->validate([
            
            'name' => 'required',
            'email' => 'required|unique:students', 
            'average'=> 'required']);

            $student = new Student(); 

            $student->name = $data['name']; 
            $student->email = $data['email']; 
            $student->average = $data['average'];

            $student->save(); 

            return redirect()->route('students.index');


    }
*/
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
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required', 
            'location' => 'required', 
            'email' => 'required'
        ]);
    
        CrudModel::where('id', $id)->update($data); // Diretso update
    
        return redirect()->route('home')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crudModel = CrudModel::find($id);

        if ($crudModel) {
            $crudModel->delete();  // Delete the record
            return redirect()->route('home')->with('message', 'Record deleted successfully');
        } else {
            return redirect()->route('home')->with('error', 'Record not found');
        }
    }

    public function task() { 
        return view('taskmanagement');
    }
}
