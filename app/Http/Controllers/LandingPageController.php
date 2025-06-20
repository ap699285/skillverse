<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function landing_page(Request $request)
    {
        $dataSlider = DB::table('landing_slider as ls')
            ->select(
                'ls.*'
            )
            ->where('ls.is_active', 1)
            ->get();

        $dataFeature = DB::table('landing_feature as lf')
            ->select(
                'lf.*'
            )
            ->where('lf.is_active', 1)
            ->get();

        $dataAbout = [];

        $dataCounter = DB::table('landing_counter as lc')
            ->select(
                'lc.*'
            )
            ->where('lc.is_active', 1)
            ->get();

        $dataCourse = DB::table('landing_course as lc')
            ->select(
                'lc.*'
            )
            ->where('lc.is_active', 1)
            ->get();

        $dataVideo = DB::table('landing_video as lv')
            ->select(
                'lv.*'
            )
            ->where('lv.is_active', 1)
            ->get();

        $dataTeam = DB::table('landing_team as lt')
            ->select(
                'lt.*'
            )
            ->where('lt.is_active', 1)
            ->get();

        $data = [
            'dataSlider' => $dataSlider,
            'dataFeature' => $dataFeature,
            'dataAbout' => $dataAbout,
            'dataCounter' => $dataCounter,
            'dataCourse' => $dataCourse,
            'dataVideo' => $dataVideo,
            'dataTeam' => $dataTeam
        ];
        return view('landing.welcome2', $data);
    }

    public function pengaturanSlider(Request $request)
    {
        $dataSlider = DB::table('landing_slider as ls')
            ->select(
                'ls.*'
            )
            ->where('ls.is_active', 1)
            ->get();

        $data = [
            'dataSlider' => $dataSlider
        ];
        return view('settings.landing.slider', $data);
    }
}
