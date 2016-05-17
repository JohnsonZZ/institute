<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
		$list = M('List')->order('time')->select();
		$this->assign('list',$list);
        $this->display();
	}
	public function theme(){
		$data['id'] = I('get.id');
		$list = M('List')->where($data)->find();
		$this->assign($list);
        $this->display();
	}
}