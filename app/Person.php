<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
   protected $guarded = array('id');

   public static $rules = array(
      'data' => 'required',
      'memo' => 'required',
   );

   // getDataは残しておく
   //public function getData()
   //{
   //   return $this->id . ': ' . $this->data . ' (' . $this->memo . ')';
  // }
}
