<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('companies.index')->with([
            
            'companies' => Company::latest()->paginate(15),
         ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        Company::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return view('companies.index')->with([
            
            'companies' => Company::latest()->paginate(15),
         ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('companies.show', [
            'name' => $company->name,
            'address' => $company->address,
            
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('companies.edit', [
            'id' => $company->id,
            'name' => $company->name,
            'address' => $company->address,
            
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return view('companies.index')->with([
            
            'companies' => Company::latest()->paginate(15),
         ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->back();
    }
}
