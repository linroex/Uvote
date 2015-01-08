<?php
class HomeController extends Controller{
    public function showIndex(){
        return View::make('index')->with([
            'issues' => Issues::all()->sortBy('created_at')->reverse()
        ]);
    }

}
