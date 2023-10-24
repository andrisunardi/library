<?php

namespace Andrisunardi\Library\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DatabaseBackupDailyMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function envelope()
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), env('APP_NAME')),
            subject: 'Database Backup Daily - '.now()->isoFormat('dddd, DD MMMM YYYY'),
        );
    }

    public function content()
    {
        return new Content(
            markdown: 'emails.database-backup-daily',
        );
    }

    public function attachments()
    {
        $file = now()->format('Y-m-d').'.sql';

        return [
            Attachment::fromStorage("database/{$file}")
                ->as("database-{$file}")
                ->withMime('application/gzip'),
        ];
    }
}
