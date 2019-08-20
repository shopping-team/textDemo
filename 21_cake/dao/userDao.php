<?php
// echo __DIR__;
// echo __DIR__.'/../db/db_sql.php';
// include
$path=dirname(dirname(__FILE__));
require_once($path.'/db/db_sql.php');
class UserDao extends BaseDao{
    public function _selectAll(){
        // $res=parent::table('tab_user')->select();
        $res=parent::table('tab_user')->select('user_name,pass_word');
        return $res;
    }
    public function _del($id){
        $res=parent::table('tab_user')->where("user_id=$id")->delete();
        return $res;
    }
    public function _add($data){
        $res=parent::table('tab_user')->insert($data);
        return $res;
    }
    public function _update($id,$data){
        $res=parent::table('tab_user')->where("user_id=$id")->update($data);
        return $res;
    }
    public function _anotherSelect(){
        $res=parent::query('select a.user_id,a.user_name,a.pass_word,b.qq,b.phone_num,b.e_mail from `tab_user` a
        left JOIN `tab_userdetail` b
        on a.user_id=b.user_id');
        return $res;
    }
}
$s=new UserDao;
echo json_encode($s->_anotherSelect());
