<?php

class HomeController extends BaseController {

    protected $layout = "layout.main";
    protected $user;

    public function homeController() {
        
    }

    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function showWelcome() {
        return View::make('hello');
    }

    public function getUsers() {

        $this->user = User::all();
        var_dump($this->user[0]->prenom);

        $this->layout->content = View::make('users')->with('user', $this->user);
    }

}
