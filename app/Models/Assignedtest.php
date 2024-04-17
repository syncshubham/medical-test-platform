<?php

namespace App\Models;

use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assignedtest extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_id','lab_id','lab_rate', 'final_rate'
      ];

      public function lab()
      {
          return $this->belongsTo(User::class, 'lab_id');
      }
  
      public function test()
      {
          return $this->belongsTo(Test::class, 'test_id');
      }
}