<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoStatistics extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_filename',
        'views',
        'downloads'
    ];

    /**
     * Increment view count for a video
     */
    public static function incrementViews($filename)
    {
        return self::updateOrCreate(
            ['video_filename' => $filename],
            ['views' => \DB::raw('views + 1')]
        );
    }

    /**
     * Increment download count for a video
     */
    public static function incrementDownloads($filename)
    {
        return self::updateOrCreate(
            ['video_filename' => $filename],
            ['downloads' => \DB::raw('downloads + 1')]
        );
    }

    /**
     * Get total views across all videos
     */
    public static function getTotalViews()
    {
        return self::sum('views');
    }

    /**
     * Get total downloads across all videos
     */
    public static function getTotalDownloads()
    {
        return self::sum('downloads');
    }

    /**
     * Get statistics for a specific video
     */
    public static function getVideoStats($filename)
    {
        return self::where('video_filename', $filename)->first();
    }
}
