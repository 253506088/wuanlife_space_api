<?php

class Domain_User {

    /*
    ��¼���

    */

    public function login($data){
        $model = new Model_User();
        $rs = $model->login($data);
        return $rs;
    }
    /*
    ע����

    */

    public function reg($data){
        $model = new Model_User();
        $rs = $model->reg($data);
        return $rs;
    }
    /*
	ע�����

    */
    public function logout(){
        $model = new Model_User();
        $rs = $model->logout();
        return $rs;
    }

}



