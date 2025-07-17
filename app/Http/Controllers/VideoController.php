<?php

namespace App\Http\Controllers;

use App\Models\VideoStatistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display the videos page with real statistics
     */
    public function index()
    {
        $videoFiles = [
            'Sendera Sisters - Tikwasaka.mp4',
            'Sendera Sisters - Akufuna Ndani.mp4',
            'Sendera Sisters - Abetcha Lowa.mp4',
        ];

        // Get total statistics
        $totalViews = VideoStatistics::getTotalViews();
        $totalDownloads = VideoStatistics::getTotalDownloads();
        $totalVideos = count($videoFiles);

        // Get individual video statistics
        $videoStats = [];
        foreach ($videoFiles as $video) {
            $stats = VideoStatistics::getVideoStats($video);
            $videoStats[$video] = [
                'views' => $stats ? $stats->views : 0,
                'downloads' => $stats ? $stats->downloads : 0
            ];
        }

        return view('frontend.components.videos', compact('videoFiles', 'totalViews', 'totalDownloads', 'totalVideos', 'videoStats'));
    }

    /**
     * Track video view
     */
    public function trackView(Request $request)
    {
        $filename = $request->input('filename');
        
        if ($filename) {
            VideoStatistics::incrementViews($filename);
            $stats = VideoStatistics::getVideoStats($filename);
            
            return response()->json([
                'success' => true,
                'views' => $stats ? $stats->views : 0,
                'total_views' => VideoStatistics::getTotalViews()
            ]);
        }

        return response()->json([
            'success' => false
        ], 400);
    }

    /**
     * Track video download
     */
    public function trackDownload(Request $request)
    {
        $filename = $request->input('filename');
        
        if ($filename) {
            VideoStatistics::incrementDownloads($filename);
            $stats = VideoStatistics::getVideoStats($filename);
            
            return response()->json([
                'success' => true,
                'downloads' => $stats ? $stats->downloads : 0,
                'total_downloads' => VideoStatistics::getTotalDownloads()
            ]);
        }

        return response()->json([
            'success' => false
        ], 400);
    }

    /**
     * Download video file
     */
    public function download($filename)
    {
        $filePath = public_path('assets/images/videos/' . $filename);
        
        if (file_exists($filePath)) {
            // Track the download
            VideoStatistics::incrementDownloads($filename);
            
            return response()->download($filePath);
        }

        abort(404, 'Video not found');
    }
}
