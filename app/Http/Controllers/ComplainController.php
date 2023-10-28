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
    public function index(Request $request)
    {

        // Fetch the status from the query parameter, default to 'all'
        $status = $request->query('status', 'all');
        
        // Initialize a query builder instance specific to the authenticated user's complaints
        $complains = auth()->user()->complains();

        // Apply filters based on the status
        if ($status === 'open') {
            $complains->where('status', 'open');
        } elseif ($status === 'closed') {
            $complains->where('status', 'closed');
        }

        // Paginate the results
        $complains = $complains->paginate(5);
   
          // action based on uri
          $uri=$request->segment(2);
          if( $uri=='view') {
              $action='View';
          } elseif ($uri=='edit') {
              $action='Edit';
          }

        $data=compact('complains','action');
        return view('user.viewComplain', $data);
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
         return redirect()->route('user.fillComp')->with('success', 'Complaint submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Complain $complain)
    {
        //showing table
        // dd($complain);
        $data = array_merge(compact('complain'), ['action' => 'Back']);
        return view('user.complainAction', $data);
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
