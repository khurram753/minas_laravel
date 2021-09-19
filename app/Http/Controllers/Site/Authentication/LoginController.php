<?php

namespace App\Http\Controllers\Site\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\LoginRequest;
use App\Services\Site\Registration\RegistrationService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginPage(RegistrationService $registrationService)
    {
        return $registrationService->loginPage();
    }

    public function login(LoginRequest $request,RegistrationService $registrationService)
    {
        return $registrationService->login($request);
    }

}
