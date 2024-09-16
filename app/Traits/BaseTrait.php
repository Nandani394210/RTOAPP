<?php
namespace App\Traits;

trait BaseTrait{

    public function sendSuccess($meesage,$status = 200){
        return response()->json([
            'status' => true,
            'message' => $meesage,
        ],$status);
    }


    public function sendError($meesage,$status = 400){
        return response()->json([
            'status' => false,
            'message' => $meesage,
        ],$status);
    }


    public function sendResponse($meesage,$data,$status = 200){
        return response()->json([
            'status' => true,
            'message' => $meesage,
            'data' => $data
        ],$status);
    }


    public function sendValidationErrors($errors,$status = 400){
        return response()->json([
            'status' => false,
            'errors' => $errors
        ],$status);
    }

}

?>
