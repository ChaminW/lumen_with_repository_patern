<?php
/**
 * Created by PhpStorm.
 * User: chamin
 * Date: 10/19/16
 * Time: 6:41 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;




class Employee extends Model
{
    protected $fillable = ['first_name','last_name', 'contact_num', 'address'];
}