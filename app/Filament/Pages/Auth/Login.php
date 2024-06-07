<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as BasePage;

class Login extends BasePage
{
    public function mount(): void
    {
        parent::mount();
        if (app()->environment('local')) {
            $this->form->fill([
                /*
                'email' => 'demo@dinero.app',
                'password' => '12345678',
                */
                'email' => env('APP_TMPLOGIN_EMAIL', 'demo@demo.com'),
                'password' => env('APP_TMPLOGIN_PASSWORD', '12345678'),
                'remember' => true,
            ]);
        }
    }
}
