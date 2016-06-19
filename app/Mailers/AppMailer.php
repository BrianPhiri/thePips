<?php

namespace App\Mailers;

use App\User;
use Illuminate\Contracts\Mail\Mailer;

class AppMailer
{

    /**
     * The Laravel Mailer instance.
     *
     * @var Mailer
     */
    protected $mailer;

    /**
     * The sender of the email.
     *
     * @var string
     */
    protected $from = 'thePips11@gmail.com';

    /**
     * The recipient of the email.
     *
     * @var string
     */
    protected $to;

    /**
     * The view for the email.
     *
     * @var string
     */
    protected $view;

    /**
     * The data associated with the view for the email.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Create a new app mailer instance.
     *
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Deliver the email confirmation.
     *
     * @param  User $user
     * @return void
     */
    public function sendEmailConfirmationTo(User $user)
    {
        $this->to = $user->email;
        $this->view = 'emails.confirm';
        $this->data = compact('user');

        $this->deliver();
    }
    /**
     * Send an Email to the Users to Show Confirmation of the Orders
     */
    public function sendOrdersConfirmationTo(User $user)
    {
        $this->to = $user->email;
        $this->view = 'emails.orders_confirmation';
        $this->data = compact('user');

        $this->deliver();
    }

    /**
     * Deliver the email.
     *
     * @return void
     */
    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function ($message) {
            $message->from($this->from, 'noreply, thePips')
            ->to($this->to);
        });
    }
}
