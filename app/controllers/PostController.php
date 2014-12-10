<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostController
 *
 * @author owner
 */
class PostController extends BaseController {
    //put your code here
    public function listing() {
           return View::make('post.listing');
    }
    
    public function single($id) {  //passed $id from routes
         return  View::make('post.single')->with('id', $id);
    }



    public function update($id) {  //passed $id from routes
        dd($_POST);
    }
    
    
    
}
