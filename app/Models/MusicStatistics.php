<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MusicStatistics extends Model
{
    use HasFactory;

    protected $fillable = [
        'music_id',
        'plays',
        'downloads'
    ];

    /**
     * Relationship with Music model
     */
    public function music()
    {
        return $this->belongsTo(Music::class);
    }

    /**
     * Increment play count for a music track
     */
    public static function incrementPlays($musicId)
    {
        return self::updateOrCreate(
            ['music_id' => $musicId],
            ['plays' => DB::raw('plays + 1')]
        );
    }

    /**
     * Increment download count for a music track
     */
    public static function incrementDownloads($musicId)
    {
        return self::updateOrCreate(
            ['music_id' => $musicId],
            ['downloads' => DB::raw('downloads + 1')]
        );
    }

    /**
     * Get total plays across all music tracks
     */
    public static function getTotalPlays()
    {
        return self::sum('plays');
    }

    /**
     * Get total downloads across all music tracks
     */
    public static function getTotalDownloads()
    {
        return self::sum('downloads');
    }

    /**
     * Get statistics for a specific music track
     */
    public static function getMusicStats($musicId)
    {
        return self::where('music_id', $musicId)->first();
    }
} 