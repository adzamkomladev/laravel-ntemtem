<?php

namespace App\Enums\Auth;

enum Page: string
{
    case Login = 'LOGIN';
    case Register = 'REGISTER';
    case VerifyEmail = 'VERIFY_EMAIL';
}
