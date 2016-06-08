<?php

class Domain_Post {

    public function getIndexPost($page) {
        $rs = array();
        $model = new Model_Post();
        $rs = $model->getIndexPost($page);
        return $rs;
    }

    public function getGroupPost($groupID,$page) {
        $rs = array();
        $model = new Model_Post();
        $rs = $model->getGroupPost($groupID,$page);
        return $rs;
    }
    
    public function getMyGroupPost($userID,$page) {
        $rs = array();
        $model = new Model_Post();
        $rs = $model->getMyGroupPost($userID,$page);
        return $rs;
    }

    public function getPostBase($postID) {
        $rs = array();
        $model = new Model_Post();
        $rs = $model->getPostBase($postID);
        return $rs;
    }

    public function getPostReply($postID,$page) {
        $rs = array();
        $model = new Model_Post();
        $rs = $model->getPostReply($postID,$page);
        return $rs;
    }
    public function PostReply($data) {
        $rs = array();
        $model = new Model_Post();
        $rs = $model->PostReply($data);
        return $rs;
    }
    public function editPost($data) {
        $rs = array();
        $model = new Model_Post();
        $rs = $model->editPost($data);
        return $rs;
    }
    
    public function stickyPost($data){
    	$rs = array();
    	$domain = new Domain_Post();
        $domain1 = new Domain_User();
    	$sqla = $domain->getGroupId($data['post_id']);
        $sqlb = $domain1->judgeCreate($data['user_id'],$sqla);
        
        if($sqlb) {
            $model=new Model_Post();
            $rs = $model->stickyPost($data);

        }else{
            $rs['code']=0;
            $rs['re']="仅星球创建者能取消置顶帖子!";
        }
        return $rs;
    }
    	
    public function unStickyPost($data){
        $rs = array();
        $domain = new Domain_Post();
        $domain1 = new Domain_User();
        $sqla = $domain->getGroupId($data['post_id']);
        $sqlb = $domain1->judgeCreate($data['user_id'],$sqla);

        if($sqlb) {
            $model=new Model_Post();
            $rs = $model->unStickyPost($data);

        }else{
            $rs['code']=0;
            $rs['re']="仅星球创建者能取消置顶帖子!";
        }
        return $rs;
    }
    		
    public function deletePost($data){
        $rs = array();
        $domain = new Domain_Post();
        $domain1 = new Domain_User();
        $sqla = $domain->getGroupId($data['post_id']);
        $sqlb = $domain1->judgeCreate($data['user_id'],$sqla);
        $sqlc = $domain->judgePoster($data['user_id'],$data['post_id'],$sqla);
        $sqld = $domain1->judgeAdmin($data['user_id']);
        if($sqlb||$sqlc||$sqld){
            $model = new Model_Post();
            $rs = $model->deletePost($data);
        }else{
            $rs['code']=0;
            $rs['re']="仅星球创建者和发帖者和管理员能删除帖子!";
        }
    	return $rs;
    }
    
    public function deleteHtmlPosts($data){
        $rs = $data;
        for ($i=0; $i<count($rs['posts']); $i++) {
        $rs['posts'][$i]['text'] = strip_tags($rs['posts'][$i]['text']);
        }
        return $rs;
    }

    public function deleteHtmlReply($data){
        $rs = $data;
        for ($i=0; $i<count($rs['reply']); $i++) {
        $rs['reply'][$i]['text'] = strip_tags($rs['reply'][$i]['text']);
        }
        return $rs;
    }
/*
 * 获取创建者id
 */
    public function getCreaterId($groupID){
        $model = new Model_Post();
        $createrId = $model->getCreaterId($groupID);
        return $createrId;
    }
/*
 * 获取星球id
 */
    public function getGroupId($post_id){
        $model = new Model_Post();
        $group_Id = $model->getGroupId($post_id);
        return $group_Id;
    }
    
 /*
  * 判断是否为发帖者
  */   
    public function judgePoster($user_id,$post_id){
        $model = new Model_Post();
        $rs = $model->judgePoster($user_id,$post_id);
        return $rs;
    }
    
}
