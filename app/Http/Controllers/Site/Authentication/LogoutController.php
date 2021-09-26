<?php

namespace App\Http\Controllers\Site\Authentication;

use App\Http\Controllers\Controller;
use App\Services\Site\Registration\RegistrationService;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function logout(RegistrationService $registrationService)
    {
        return $registrationService->logout();
    }
}
