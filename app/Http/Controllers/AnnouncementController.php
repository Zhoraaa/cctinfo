<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    //
    public function save(Request $request) {
        if (isset($request->id)) {
            $this->update();
        } else {
            $this->create();
        }
    }

    protected function create() {

    }
    protected function update() {
        
    }
}
