<?php

namespace App\Models;

use App\Models\Assignedtest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','test_image','parameters'
      ];

      // Define the relationship with assigned tests
    public function assignedTests()
    {
        return $this->hasMany(Assignedtest::class);
    }
}