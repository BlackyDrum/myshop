<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $test = new MailMessage();


        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->from('please-do-not-reply@my-shop.de','My-Shop')
                ->greeting('Hallo!')
                ->salutation(env('APP_NAME'))
                ->subject('E-Mail-Adresse verifizieren')
                ->line('Klicken Sie auf die Schaltfläche unten, um Ihre E-Mail-Adresse zu bestätigen.')
                ->action('E-Mail-Adresse verifizieren', $url)
                ->line("Wenn Sie kein Konto erstellt haben, sind keine weiteren Maßnahmen erforderlich.");


        });

    }
}
