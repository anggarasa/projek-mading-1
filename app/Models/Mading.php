<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mading extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeCari($query, array $cari)
    {
        $query->when($cari['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('judul', 'like', '%' . $search . '%')
                        ->orWhere('category', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
            });
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
