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
        // 'region_id',
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
        return $this->belongsTo(Region::class);
    }

    /**
     * each group has a list of details
     *
     * @access public
     * @return
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
