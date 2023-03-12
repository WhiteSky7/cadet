<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateStatementRequest;
use App\Models\Statement;
use Illuminate\Http\Request;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'hello world';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  return $request->all();
        $statement = new Statement();

        $statement->store($request);

        return response()->json($request, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Statement $statement)
    {
        $statement->showStatement($statement);

        return response()->json($statement);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statement $statement)
    {
        // return $statement;
        $_statement = new Statement();

        $_statement->updateStatement($request, $statement);

        return response()->json($_statement, 202);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statement $statement)
    {
        $_statement = new Statement();

        $_statement->deleteStatement($statement);

        return response()->json($_statement, 204);
    }
}
