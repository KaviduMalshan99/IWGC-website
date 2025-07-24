<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('AdminDashboard.Testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create()
    {
        return view('AdminDashboard.Testimonials.create');
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'review' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('testimonials', 'public');
        }

        Testimonial::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'review' => $request->review,
            'avatar' => $avatarPath,
        ]);

        return redirect()->route('testimonial.index')->with('success', 'Testimonial added successfully.');
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('AdminDashboard.Testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'review' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $avatarPath = $testimonial->avatar;
        if ($request->hasFile('avatar')) {
            // Delete old image if exists
            if ($testimonial->avatar && Storage::disk('public')->exists($testimonial->avatar)) {
                Storage::disk('public')->delete($testimonial->avatar);
            }
            $avatarPath = $request->file('avatar')->store('testimonials', 'public');
        }

        $testimonial->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'review' => $request->review,
            'avatar' => $avatarPath,
        ]);

        return redirect()->route('testimonial.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Delete avatar image if exists
        if ($testimonial->avatar && Storage::disk('public')->exists($testimonial->avatar)) {
            Storage::disk('public')->delete($testimonial->avatar);
        }

        $testimonial->delete();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial deleted successfully.');
    }
}
