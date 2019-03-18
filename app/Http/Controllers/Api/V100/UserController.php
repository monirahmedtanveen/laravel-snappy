<?php

namespace App\Http\Controllers\Api\V100;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        $pdf = \Illuminate\Support\Facades\App::make('snappy.pdf.wrapper');
        $pdf = $pdf->loadView('pdf.user_list',compact('users'))
            ->setPaper('a4');

        return $pdf->download('User List.pdf');
    }
}
