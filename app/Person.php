<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
   protected $guarded = array('id');

   public static $rules = array(
      'name' => 'required',
      'mail' => 'email',
      'password' => 'password',
   );

   // getDataは残しておく
   public function getData()
   {
      return $this->id . ': ' . $this->name . ' (' . $this->password . ')';
   }
}
