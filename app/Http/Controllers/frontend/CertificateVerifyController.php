<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CertificateVerifyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.default.certificate_verify.index');
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
    public function store()
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request): RedirectResponse
    {
        $request->validate([
            'identifier' => ['required', 'alpha_num'],
        ]);
        $certificate = Certificate::with(['user:id,name', 'course:id,title'])->where('identifier', $request['identifier'])->first();
        if ($certificate) {
            $message = "This certificate is valid for " . $certificate->user?->name . " for " . $certificate->course?->title;
            return redirect()->back()->with('success', $message);
        }
        return redirect()->back()->with('error', 'Certificate not found');
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
