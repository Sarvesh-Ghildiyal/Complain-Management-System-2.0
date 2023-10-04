<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreComplainRequest;


class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComplainRequest $request)
    {
        // using policy
        $this->authorize('create', Complain::class);
        
        // validating data
        $validatedData = $request->validated();
        
        //Merge data to array
        $dataToStore= array_merge($validatedData,[
            'uid'=>auth::user()->id,
            'department'=>auth::user()->department,
        ]);
        
        // Storing the complain
         $complain = Complain::create($dataToStore);
         return redirect()->route('user.fillComp')->with('success', 'Complaint submitted successfully!')->flush();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
