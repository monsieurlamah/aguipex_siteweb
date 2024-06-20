<?php

namespace App\Http\Controllers\frontend;

use Carbon\Carbon;
use App\Models\Activitie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ActivityFrontController extends Controller
{
    public function detailActivity(Activitie $activity)
    {
        Carbon::setLocale('fr');
        $activity->formatted_date = Carbon::parse($activity->date_activitie)->translatedFormat('j F Y');

        $activities = Activitie::where('active', true)
        ->where('status', 'publier')
        ->limit(3)
        ->latest()
        ->get();
        $images=DB::table('image_activities')->where('activitie_id', $activity->id)->get();
        return view('frontend.activity.detail', compact('activities', 'activity', 'images'));
    }

    public function allActivities()
    {
        $activities = Activitie::where('active', true)
        ->where('status', 'publier')
        ->latest()
        ->get();
        return view('frontend.activity.list', compact('activities'));
    }
}
