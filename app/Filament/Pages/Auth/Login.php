<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as Page;

class Login extends Page
{
    public function mount(): void
    {
        parent::mount();

        $this->form->fill([
            'email' => 'admin@filamentphp.com',
            'password' => 'password',
            'remember' => true,
        ]);
    }
}
