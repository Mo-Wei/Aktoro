<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function index(){
        $data = M('document');
        $datas = $data -> select();
        $this->assign('datas',$datas);
        $this->display();
    }
}