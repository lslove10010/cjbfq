<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {
        return "超"."级"."播"."放器"."独"."立版，作"."者Q"."Q：60"."2524"."950";
    }

}
