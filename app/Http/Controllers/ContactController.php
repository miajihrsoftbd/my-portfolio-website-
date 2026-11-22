<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        ContactMessage::create($validated);

        return redirect('/#contact')
            ->with('success', 'Your message has been sent successfully!');
    }
}
