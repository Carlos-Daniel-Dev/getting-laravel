<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function teste() {
        dd('teste');
    }
    public function __invoke(Request $request)
    {
        $this->teste();
    }
}
