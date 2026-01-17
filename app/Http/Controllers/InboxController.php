<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Inbox\InboxService;

class InboxController extends Controller
{
    public function __construct(
        protected InboxService $inboxService
    ) {}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email'],
            'service'   => ['nullable', 'string', 'max:255'],
            'message'   => ['required', 'string'],
        ]);

        $this->inboxService->handle($validated);

        return response()->json([
            'message' => 'Your message has been sent successfully.',
        ], 201);
    }
}
