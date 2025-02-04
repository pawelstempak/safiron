<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Contact;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getPhone():object
    {
        return Contact::find(1);
    }
}
