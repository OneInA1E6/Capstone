<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * each group has a list of details
     *
     * @access public
     * @return
     */
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }

        /**
     * each group has a list of details
     *
     * @access public
     * @return
     */
    public function accommodation()
    {
        return $this->belongsTo('App\Models\Accommodation');
    }

    protected $table = 'booking';

    protected $fillable = [
        'duration',
        'group_id',
    ];
}
