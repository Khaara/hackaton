<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_model extends Model
{
    protected $table ="crops";
    protected $fillable =
    [
    "id", "name", "description", "price", "size", "color", "avilable", "ammount", "photo", "status", "id_user", "id_sector"
    ];   

    public function users()
    {
        return $this->hasOne(User::class);
    }

    public function purch()
    {
        return $this->hasOne(Purchase::class);
    }

    public function sect()
    {
        return $this->hasOne(Sector::class);
    }

    public function cata()
    {
        return $this->hasOne(Catalog::class);
    }

    public function sale()
    {
        return $this->hasOne(Sale::class);
    }
}