<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-4-25
 * Time: 下午4:26
 */
namespace Home\Behavior;
use Think\Behavior;

class TestBehavior extends Behavior{
    //行为扩展入口必须是run
    public function run(&$params){
        if(C('TEST_PARAM')) {
            echo 'RUNTEST BEHAVIOR IS'.$params;
        }
    }
}