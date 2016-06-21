<?php
/**
 *关注回复
**/
class AreplyAction extends UserAction{
	public function index(){
		$db=D('Areply');
		$where['uid']=$_SESSION['uid'];
		$where['token']=$_SESSION['token'];
		$res=$db->where($where)->find();
		$this->assign('areply',$res);
		$this->display();
	}
	public function insert(){
		C('TOKEN_ON',false);
		$db=D('Areply');
		$where['uid']=$_SESSION['uid'];
		$where['token']=$_SESSION['token'];
		$res=$db->where($where)->find();
		if($res==false){
			$where['content']=html_entity_decode($this->_post('content'));
			if(empty($_POST['keyword'])){	
				if($where['content']==false){$this->error('内容必须填写');}
			}else{
				$where['keyword']=$this->_post('keyword');
			}			
			
			$where['createtime']=time();
			$id=$db->data($where)->add();
			if($id){
				$this->success('发布成功',U('Areply/index'));
			}else{
				$this->error('发布失败',U('Areply/index'));
			}
		}else{
			$where['id']=$res['id'];
			$where['content']=html_entity_decode($this->_post('content'));
			$where['home']=intval($this->_post('home'));
			$where['updatetime']=time();
			$where['keyword']=strval($this->_post('keyword'));
			if(empty($_POST['keyword'])){
				if($where['content']==false){$this->error('内容必须填写');}
			}else{
				$where['keyword']=$this->_post('keyword');
			}		
			if($db->save($where)){
				$this->success('更新成功',U('Areply/index'));
			}else{
				$this->error('更新失败',U('Areply/index'));
			}
		}
	}
}
?>