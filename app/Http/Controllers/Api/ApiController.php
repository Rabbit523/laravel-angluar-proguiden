<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Services\Core\Tasks;


class ApiController extends Controller
{

    protected function json($data) {
        $response = array("success" => false);
        if(!isset($data["error"])){
            $response["success"] = true;
            $response["data"] = $data;
        }else{
            $response["error"] = $data["error"];
        }
        return response()->json($response);
    }

    public function index() {
        return $this->json("Maforsikring RESTful API");
    }


    public function tasks(){
        return $this->json(
            Tasks::execute()
        );
    }

}