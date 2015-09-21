<?php

class PublicationController extends BaseController {
     public function index() {
         $publications = Publication::all();

         // load the view and pass the nerds
         return View::make('publications')->with('publications', $publications);
    }
}

