<?php

namespace App;

class EmailService
{
    /**
     * @var string $sender
     * @var string $receiver
     * @var string $subject
     * @var string $content
     */
    private string $sender;
    private string $receiver;
    private string $subject;
    private string $content;

    /**
     * Class constructor
     *
     * @param string $sender
     * @param string $receiver
     * @param string $subject
     * @param string $content
     */
    public function __construct(
        string $sender = 'contact@site.com',
        string $receiver = '',
        string $subject = '',
        string $content = ''
    )
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->subject = $subject;
        $this->content = $content;
    }

    /**
     * Sends email confirmation
     *
     * @return string
     */
    public static function sendEmail(): string
    {
        return '--- Send Email ---';
    }
}
