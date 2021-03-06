<?php

namespace App\Http\Controllers\Publics;

use App\Http\Controllers\Controller;
use App\Traits\GeneralServiceTraits;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    use GeneralServiceTraits;

    public function index() {
        $content 	        = 'public/contents/home';
        $dataPageSetting    = $this->pageSetting['PUBLIC'];
        $data 		        = array('content'       => $content,
                                    'pageSetting'   => $dataPageSetting);

        return view('wrapper', $data);
    }
}
