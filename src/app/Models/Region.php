<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'address',
        'numRooms',
    ];

    public static function numRooms() {
        return '';
    }

    /**
     * each group has a list of details
     *
     * @access public
     * @return
     */
    public function accommodations()
    {
        return $this->hasMany('App\Models\Accommodation');
    }
}
