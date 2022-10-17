<?php

namespace App\Controllers;

use App\FrameworkTools\Controllers\AbstractControllers;

class updateDataController extends AbstractControllers {

    public function exec() {
        $missingAttribute;
        //vetor
        $response =[
            'success' => true
        ];  
        
        try {
        
             $requestVariable = $this->processServerElements->getVariable();

            if (sizeof($requestVariable) === 0) {
                throw new Execption ("You Need to inform userid variable");
            }
        } catch (\Throwabel $th) {
            $response = [
                'success' => false,
                'message' => $e->getMessage(),
                'missingAttribute' => $missingAttribute
            ];
        }    
        view($response);
        // dd($requestVariable);
    }

}