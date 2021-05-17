<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  //user List 
  public function listUser(){
    return view('pages.page-users-list');
  }
    //user view 
    public function viewUser(){
    return view('pages.page-users-view');
  }
   //user edit 
   public function editUser(){
    return view('pages.page-users-edit');
  }
}
