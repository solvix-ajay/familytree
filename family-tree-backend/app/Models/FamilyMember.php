<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'age', 'birthdate', 'image', 'parent_id'];

    /**
     * Define the relationship with the parent family member.
     */
    public function parent()
    {
        return $this->belongsTo(FamilyMember::class, 'parent_id');
    }

    /**
     * Define the relationship with child family members.
     */
    public function children()
    {
        return $this->hasMany(FamilyMember::class, 'parent_id');
    }
}
