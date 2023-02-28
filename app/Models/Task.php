<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function patentRequests(){

        return $this->belongsToMany(PatentRequest::class, 'task_patent_requests');
    }
}
