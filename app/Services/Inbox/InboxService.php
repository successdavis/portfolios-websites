<?php

namespace App\Services\Inbox;

use App\Models\Inbox;
use App\Mail\InboxMessageMail;
use Illuminate\Support\Facades\Mail;

class InboxService
{
    /**
     * Store inbox message and forward to admin email
     */
    public function handle(array $data): Inbox
    {
        $inbox = $this->store($data);

        $this->sendEmailNotification($inbox);

        return $inbox;
    }

    /**
     * Persist message to database
     */
    protected function store(array $data): Inbox
    {
        return Inbox::create([
            'full_name' => $data['full_name'],
            'email'     => $data['email'],
            'service'   => $data['service'] ?? null,
            'message'   => $data['message'],
            'sent_at'   => now(),
        ]);
    }

    /**
     * Forward message to personal email
     */
    protected function sendEmailNotification(Inbox $inbox): void
    {
        Mail::to(config('mail.admin_address'))
            ->send(new InboxMessageMail($inbox));
    }
}
