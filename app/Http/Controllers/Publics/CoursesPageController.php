<?php

namespace App\Http\Controllers\Publics;

use App\Http\Controllers\Controller;
use App\Traits\GeneralServiceTraits;
use Illuminate\Http\Request;

class CoursesPageController extends Controller
{
    use GeneralServiceTraits;

    public function index() {
        $content 	        = 'public/contents/courses';
        $dataPageSetting    = $this->pageSetting['PUBLIC'];
        $data 		        = array('content'       => $content,
                                    'title'         => 'Courses',
                                    'pageSetting'   => $dataPageSetting);

        return view('wrapper', $data);
    }
}
