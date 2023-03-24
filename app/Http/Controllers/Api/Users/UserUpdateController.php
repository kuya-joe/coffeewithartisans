<?php

declare(strict_types=1);
 
namespace App\Http\Controllers\Api\Users;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Enums\Version;
use App\Http\Resources\v1_0\UserResource;
use App\Models\User;

final class UserUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return 'edit screen';
    }
}
