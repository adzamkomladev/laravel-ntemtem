<?php

namespace App\Http\Livewire\Auth;

use App\Enums\Auth\Page;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;


class Index extends Component
{
    public Page $page  = Page::Login;

    protected $listeners = ['showRegister' => 'showRegister'];

    public function mount()
    {
        $this->page = Cache::get('auth.page', Page::Login);
    }

    public function render()
    {
        return view('livewire.auth.index');
    }

    public function getIsLoginProperty()
    {
        return $this->page === Cache::get('auth.page', Page::Login);
    }

    public function getIsRegisterProperty()
    {
        return $this->page === Page::Register;
    }

    public function showLogin()
    {
        $this->page = Page::Login;
    }

    public function showRegister()
    {
        $this->page = Page::Register;
    }

    public function showVerifyEmail()
    {
        $this->page = Page::VerifyEmail;
    }
}
