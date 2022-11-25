<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * Attribute name.
     *
     * @var string
     */
    public static $model = 'group';

    /**
     * Attribute title.
     *
     * @var array
     */
    public static $title = [
        'single' => 'Group',
        'plural' => 'Groups',
    ];

   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'contact_firstname',
        'contact_lastname',
        'contact_phone_number'
    ];

    /**
     * each group has a list of details
     *
     * @access public
     * @return
     */
    public function details()
    {
        return $this->hasOne(GroupDetails::class);
    }

    /**
     * each group has a list of details
     *
     * @access public
     * @return
     */
    public function booking()
    {
        return $this->hasOne(Booking::class);
    }

}
