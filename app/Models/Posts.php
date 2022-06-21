<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;
class Posts extends Model
{
    use HasFactory;
    public function lama($tgl_mulai = null, $tgl_sekarang = null) {
        $datetime1 = new DateTime($tgl_mulai);
        $datetime2 = new DateTime($tgl_sekarang);
        $interval = $datetime1->diff($datetime2);
        $result = $interval->format('%a') + 1;
        return $result;
    }
    
}




