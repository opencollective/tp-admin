<?php
/**
 * User: aierui
 * Email: aieruishi@gmail.com
 * Date: 2018/5/5
 * Time: 上午9:47
 */

namespace app\admin\controller;


var_dump($_REQUEST);die;

use app\common\controller\Common;

class Test1 extends Common
{

    public function index()
    {
        var_dump(__CLASS__);
    }

}