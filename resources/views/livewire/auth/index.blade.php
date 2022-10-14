<div>
    @if ($this->isLogin)
        <livewire:auth.components.login />
    @elseif ($this->isRegister)
        <livewire:auth.components.register />
    @else
        <livewire:auth.components.verify-phone />
    @endif
</div>
