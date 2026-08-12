<?php

namespace App\Http\Controllers;

use App\Data\Journals\JournalData;
use App\Http\Requests\Journal\StoreJournalRequest;
use App\Http\Requests\Journal\UpdateJournalRequest;
use App\Models\Journal;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Journal::all();

        return $this->success(JournalData::collect($data));
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
    public function store(StoreJournalRequest $request)
    {
        $journal = Journal::create($request->validated());

        return $this->success(JournalData::from($journal), 'Journal created successfully.', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        return $this->success(JournalData::from($journal));
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
    public function update(UpdateJournalRequest $request, Journal $journal)
    {
        $journal->update($request->validated());

        return $this->success(JournalData::from($journal), 'Journal updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journal $journal)
    {
        $journal->delete();
        
        return $this->success(null, 'Journal deleted successfully.');
    }
}