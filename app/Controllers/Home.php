<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $data = [
      'active1' => 'border-bottom border-purple border-4',
      'active2' => 'text-secondary',
      'title' => 'Homepage',
    ];
    return view('homepage', $data);
  }
}
