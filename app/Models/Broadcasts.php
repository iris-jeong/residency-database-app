<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BroadcastFormat;
use App\Models\FrequencyPeriod;
use App\Models\FrequencyStartFrom;

class Broadcasts extends Model
{
    use HasFactory;
    public $table = 'broadcast';

    //A broadcast has one format
    public function broadcastFormat() {
        return $this->belongsTo(BroadcastFormat::class, 'format_id');
    }

    //A user has one frequency period.
    public function freqPeriod() {
        return $this->belongsTo(FrequencyPeriod::class, 'freq_period_id');
    }

    //A user has one starting point.
    public function freqStartFrom() {
        return $this->belongsTo(FrequencyStartFrom::class, 'freq_start_id');
    }

    protected $fillable = [
        'to',
        'title',
        'message',
        'description',
        'freq_auto',
        'freq_count',
        'freq_period_id',
        'freq_start_id',
        'message',
        'attachments',
        'format_id'
    ];
}
