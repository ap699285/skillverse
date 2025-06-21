<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function dashboard(Request $request)
    {
        $totalUsers = User::count();
        $activeUsersToday = 876; // Contoh data statis
        $newUsersThisMonth = 120; // Contoh data statis
        $userRetentionRate = '65%'; // Contoh data statis
        $averageSessionDuration = '5m 30s'; // Contoh data statis

        return view('dashboard', compact('totalUsers', 'activeUsersToday', 'newUsersThisMonth', 'userRetentionRate', 'averageSessionDuration'));
    }

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

        $dataChoose = DB::table('landing_choose as lc')
            ->select(
                'lc.*'
            )
            ->where('lc.is_active', 1)
            ->get();

        $dataChooseContent = DB::table('landing_choose_content as lcc')
            ->select(
                'lcc.*'
            )
            ->where('lcc.is_active', 1)
            ->get();

        $dataGallery = DB::table('landing_gallery as lg')
            ->select(
                'lg.*'
            )
            ->where('lg.is_active', 1)
            ->get();

        $dataGalleryContent = DB::table('landing_gallery_content as lgc')
            ->select(
                'lgc.*'
            )
            ->where('lgc.is_active', 1)
            ->get();

        $dataBlog = DB::table('landing_blog as lb')
            ->leftJoin('users as us', 'lb.user_id', 'us.id')
            ->leftJoin('landing_blog_comment as lbc', 'lb.id', 'lbc.blog_id')
            ->select(
                'us.name',
                'lb.*',
                DB::raw('COUNT(lbc.id) as jumlah_comment')
            )
            ->where('lb.is_active', 1)
            ->groupBy('lb.id')
            ->get();

        $data = [
            'dataSlider' => $dataSlider,
            'dataFeature' => $dataFeature,
            'dataAbout' => $dataAbout,
            'dataCounter' => $dataCounter,
            'dataCourse' => $dataCourse,
            'dataVideo' => $dataVideo,
            'dataTeam' => $dataTeam,
            'dataChoose' => $dataChoose,
            'dataChooseContent' => $dataChooseContent,
            'dataGallery' => $dataGallery,
            'dataGalleryContent' => $dataGalleryContent,
            'dataBlog' => $dataBlog
        ];
        return view('landing.welcome2', $data);
    }

    public function pengaturan_slider(Request $request)
    {
        $edit = $request->edit;
        $id = $request->id;

        $dataSlider = DB::table('landing_slider as ls')
            ->select(
                'ls.*'
            );
            if($edit){
                $dataSlider = $dataSlider->where('ls.id', $id);
            }
            $dataSlider = $dataSlider->where('ls.is_active', 1)
            ->get();

        $data = [
            'dataSlider' => $dataSlider
        ];
        if($edit) {
            $view = 'settings.slider.edit-slider';
        } else {
            $view = 'settings.slider.slider';
        }

        return view($view, $data);
    }

    public function pengaturan_slider_save(Request $request)
    {
        try {
            $id = $request->id;
            $gambar = $request->file('gambar');
            $gambar_old = $request->gambar_old;

            if(!empty($gambar)) {
                $filename = time() . '_' . $gambar->getClientOriginalName();
                $gambar->move(public_path('img/slider'), $filename);
                $file_gambar = '/img/slider/'.$filename;
            }else{
                $file_gambar = $gambar_old;
            }

            $data = [
                'judul' => $request->judul,
                'sub_judul' => $request->sub_judul,
                'keterangan' => $request->keterangan,
                'file_gambar' => $file_gambar
            ];

            $update = DB::table('landing_slider')->where('id', $id)->update($data);

            return redirect()->back()->with('message', 'Berhasil update data');
        } catch(\Exception $error) {
            $data = [
                'message' => $error->getMessage()
            ];

            return view('error.error', $data);
        }
    }

    public function blog_content($id)
    {
        $dataBlogRecent = DB::table('landing_blog as lb')
            ->leftJoin('users as us', 'lb.user_id', 'us.id')
            ->leftJoin('landing_blog_comment as lbc', 'lb.id', 'lbc.blog_id')
            ->select(
                'us.name',
                'lb.*',
                DB::raw('COUNT(lbc.id) as jumlah_comment')
            )
            ->where('lb.is_active', 1)
            ->groupBy('lb.id')
            ->get();

        $dataBlog = DB::table('landing_blog as lb')
            ->leftJoin('users as us', 'lb.user_id', 'us.id')
            ->leftJoin('landing_blog_comment as lbc', 'lb.id', 'lbc.blog_id')
            ->select(
                'us.name',
                'lb.*',
                DB::raw('COUNT(lbc.id) as jumlah_comment')
            )
            ->where('lb.id', $id)
            ->where('lb.is_active', 1)
            ->groupBy('lb.id')
            ->get();
        
        $dataBlogComment = DB::table('landing_blog_comment as lbc')
            ->leftJoin('users as us', 'lbc.user_id', 'us.id')
            ->select(
                'us.name',
                'lbc.*'
            )
            ->where('lbc.blog_id', $id)
            ->get();

        $data = [
            'blog_id' => $id,
            'dataBlogRecent' => $dataBlogRecent,
            'dataBlog' => $dataBlog,
            'dataBlogComment' => $dataBlogComment
        ];
        return view('landing.components.main.blog_content', $data);
    }

    public function save_comment_blog(Request $request)
    {
        try {
            $data = [
                'blog_id' => $request->blog_id,
                'name' => $request->nama,
                'email' => $request->email,
                'comment' => $request->comment
            ];

            $insert_comment = DB::table('landing_blog_comment')->insert($data);

            return redirect()->back();
        } catch(\Exception $error) {
            $data = [
                'message' => $error->getMessage()
            ];

            return view('error.error', $data);
        }
    }

    public function pengaturan_feature(Request $request)
    {
        $edit = $request->edit;
        $id = $request->id;

        $dataSlider = DB::table('landing_feature as ls')
            ->select(
                'ls.*'
            );
            if($edit){
                $dataSlider = $dataSlider->where('ls.id', $id);
            }
            $dataSlider = $dataSlider->where('ls.is_active', 1)
            ->get();

        $data = [
            'dataSlider' => $dataSlider
        ];
        if($edit) {
            $view = 'settings.feature.edit-feature';
        } else {
            $view = 'settings.feature.feature';
        }

        return view($view, $data);
    }

    public function pengaturan_feature_save(Request $request)
    {
        try {
            $id = $request->id;
            $gambar = $request->file('gambar');
            $gambar_old = $request->gambar_old;

            if(!empty($gambar)) {
                $filename = time() . '_' . $gambar->getClientOriginalName();
                $gambar->move(public_path('img/icon'), $filename);
                $file_gambar = '/img/icon/'.$filename;
            }else{
                $file_gambar = $gambar_old;
            }

            $data = [
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'file_gambar' => $file_gambar
            ];

            $update = DB::table('landing_feature')->where('id', $id)->update($data);

            return redirect()->back()->with('message', 'Berhasil update data');
        } catch(\Exception $error) {
            $data = [
                'message' => $error->getMessage()
            ];

            return view('error.error', $data);
        }
    }

    public function pengaturan_counter(Request $request)
    {
        $edit = $request->edit;
        $id = $request->id;

        $dataSlider = DB::table('landing_counter as ls')
            ->select(
                'ls.*'
            );
            if($edit){
                $dataSlider = $dataSlider->where('ls.id', $id);
            }
            $dataSlider = $dataSlider->where('ls.is_active', 1)
            ->get();

        $data = [
            'dataSlider' => $dataSlider
        ];
        if($edit) {
            $view = 'settings.counter.edit-counter';
        } else {
            $view = 'settings.counter.counter';
        }

        return view($view, $data);
    }

    public function pengaturan_counter_save(Request $request)
    {
        try {
            $id = $request->id;
            $gambar = $request->file('gambar');
            $gambar_old = $request->gambar_old;

            if(!empty($gambar)) {
                $filename = time() . '_' . $gambar->getClientOriginalName();
                $gambar->move(public_path('img/icon'), $filename);
                $file_gambar = '/img/icon/'.$filename;
            }else{
                $file_gambar = $gambar_old;
            }

            $data = [
                'judul' => $request->judul,
                'sub_judul' => $request->sub_judul,
                'keterangan' => $request->keterangan,
                'file_gambar' => $file_gambar
            ];

            $update = DB::table('landing_counter')->where('id', $id)->update($data);

            return redirect()->back()->with('message', 'Berhasil update data');
        } catch(\Exception $error) {
            $data = [
                'message' => $error->getMessage()
            ];

            return view('error.error', $data);
        }
    }

    public function pengaturan_course(Request $request)
    {
        $edit = $request->edit;
        $id = $request->id;

        $dataSlider = DB::table('landing_course as ls')
            ->select(
                'ls.*'
            );
            if($edit){
                $dataSlider = $dataSlider->where('ls.id', $id);
            }
            $dataSlider = $dataSlider->where('ls.is_active', 1)
            ->get();

        $data = [
            'dataSlider' => $dataSlider
        ];
        if($edit) {
            $view = 'settings.course.edit-course';
        } else {
            $view = 'settings.course.course';
        }

        return view($view, $data);
    }

    public function pengaturan_course_save(Request $request)
    {
        try {
            $id = $request->id;
            $gambar = $request->file('gambar');
            $gambar_old = $request->gambar_old;

            if(!empty($gambar)) {
                $filename = time() . '_' . $gambar->getClientOriginalName();
                $gambar->move(public_path('img/icon'), $filename);
                $file_gambar = '/img/icon/'.$filename;
            }else{
                $file_gambar = $gambar_old;
            }

            $data = [
                'judul' => $request->judul,
                'sub_judul' => $request->sub_judul,
                'jumlah_kursi' => $request->jumlah_kursi,
                'lama_waktu' => $request->lama_waktu,
                'lesson' => $request->lesson,
                'keterangan' => $request->keterangan,
                'file_gambar' => $file_gambar
            ];

            $update = DB::table('landing_course')->where('id', $id)->update($data);

            return redirect()->back()->with('message', 'Berhasil update data');
        } catch(\Exception $error) {
            $data = [
                'message' => $error->getMessage()
            ];

            return view('error.error', $data);
        }
    }

    public function pengaturan_video(Request $request)
    {
        $edit = $request->edit;
        $id = $request->id;

        $dataSlider = DB::table('landing_video as ls')
            ->select(
                'ls.*'
            );
            if($edit){
                $dataSlider = $dataSlider->where('ls.id', $id);
            }
            $dataSlider = $dataSlider->where('ls.is_active', 1)
            ->get();

        $data = [
            'dataSlider' => $dataSlider
        ];
        if($edit) {
            $view = 'settings.video.edit-video';
        } else {
            $view = 'settings.video.video';
        }

        return view($view, $data);
    }

    public function pengaturan_video_save(Request $request)
    {
        try {
            $id = $request->id;
            $gambar = $request->file('gambar');
            $gambar_old = $request->gambar_old;

            if(!empty($gambar)) {
                $filename = time() . '_' . $gambar->getClientOriginalName();
                $gambar->move(public_path('img/video'), $filename);
                $file_gambar = '/img/video/'.$filename;
            }else{
                $file_gambar = $gambar_old;
            }

            $data = [
                'judul' => $request->judul,
                'sub_judul' => $request->sub_judul,
                'keterangan' => $request->keterangan,
                'url' => $request->url,
                'file_gambar' => $file_gambar
            ];

            $update = DB::table('landing_video')->where('id', $id)->update($data);

            return redirect()->back()->with('message', 'Berhasil update data');
        } catch(\Exception $error) {
            $data = [
                'message' => $error->getMessage()
            ];

            return view('error.error', $data);
        }
    }

    public function about_us(Request $request)
    {
        return view('landing.components.main.about_content');
    }
}
