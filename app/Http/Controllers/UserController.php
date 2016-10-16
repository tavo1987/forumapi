<?php

namespace App\Http\Controllers;

use App\Transformers\UserTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer())
            ->toArray();
    }
}
