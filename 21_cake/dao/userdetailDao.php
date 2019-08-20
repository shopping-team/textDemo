<?php
// echo __DIR__;
// echo __DIR__.'/../db/db_sql.php';
// include
$path=dirname(dirname(__FILE__)); 
require_once($path.'/db/db_sql.php');
class UserdetailDao extends BaseDao{
    public function _selectAll(){
        // $res=parent::table('tab_user')->select();
        $res=parent::table('tab_userdetail')->select();
        return $res;
    }
    public function _del($id){
        $res=parent::table('tab_userdetail')->where("user_id=$id")->delete();
        return $res;
    }
    public function _add($data){
        $res=parent::table('tab_userdetail')->insert($data);
        return $res;
    }
    public function _update($id,$data){
        $res=parent::table('tab_userdetail')->where("userdetail_id=$id")->update($data);
        return $res;
    }
}
// $s=new UserDao;
