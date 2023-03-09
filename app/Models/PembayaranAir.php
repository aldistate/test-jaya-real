<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranAir extends Model
{
    use HasFactory;

    protected $table = 'pembayaran_air';
    protected $primaryKey = 'bill_id';
    public $timestamps = false;

    protected $fillable = [
        'bill_id',
        'bill_name',
        'bill_address',
        'bill_periode',
        'bill_due_date',
        'bill_desc',
        'bill_abonemen',
        'bill_air',
        'bill_ipl',
        'bill_disc_air',
        'bill_disc_ipl',
        'bill_denda',
        'bill_total_amount',
        'bill_resp_stat'
    ];
}
