<?php

namespace App\Http\Controllers\Publics;

use App\Http\Controllers\Controller;
use App\Traits\GeneralServiceTraits;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    use GeneralServiceTraits;

    public function index() {
        $content 	        = 'public/contents/blogs';
        $dataPageSetting    = $this->pageSetting['PUBLIC'];
        $data 		        = array('content'       => $content,
                                    'title'         => 'Blog',
                                    'pageSetting'   => $dataPageSetting);

        return view('wrapper', $data);
    }
}
