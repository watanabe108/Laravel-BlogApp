<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $guarded = [
        'id'
      ];

      public static function logDelete(Int $id)
    {
        return (new log())->where('id', $id)->update(
        [
          'is_deleted'=>1
        ]);
    }
    public static function logChange(Int $id ,string $logTitle ,string $detail)
    {
      return (new log())->where('id', $id)->update(
        [
          'logTitle'=>$logTitle,
          'detail'  =>$detail
        ]);
    }
    public static function logCreate(string $logTitle ,string $detail)
    {
      return (new log())->create(
      ['logTitle'=>$logTitle,'detail'=>$detail]);

    }
}
