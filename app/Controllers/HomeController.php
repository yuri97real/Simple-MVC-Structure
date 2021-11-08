<?php

use App\Core\Controller;

use App\Core\iRequest;
use App\Core\iResponse;

class HomeController extends Controller {

    public function index(iRequest $request, iResponse $response)
    {
        $response->view("home/index", [
            "title"=>"Home Page"
        ]);
    }

}