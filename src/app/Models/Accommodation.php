<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
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
        return 'test numRooms function';
    }

    /**
     * each group has a list of details
     *
     * @access public
     * @return
     */
    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }

    /**
     * each group has a list of details
     *
     * @access public
     * @return
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }
}
