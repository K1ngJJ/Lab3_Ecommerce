<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MedController extends BaseController
{
  private $med;
public function __construct()
{
$this->med = new \App\Models\MedModel();
}

public function MedDetails($id)
{
$med = $this->med->find($id);
if ($med) {
  $data = [
    'med' => $med
  ];
  return view('jhome', $data);
} else {
  return redirect()->to('/home');
}
}
//Return datas
public function home()
{
$data = [
  'items' => $this->med->findAll()
];
return view('index', $data);
}
    }
