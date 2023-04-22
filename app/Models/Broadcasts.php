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
        return $this->belongsTo(BroadcastFormat::class);
    }

    //A user has one frequency period.
    public function freqPeriod() {
        return $this->belongsTo(FrequencyPeriod::class);
    }

    //A user has one starting point.
    public function freqStartFrom() {
        return $this->belongsTo(FrequencyStartFrom::class);
    }
}
