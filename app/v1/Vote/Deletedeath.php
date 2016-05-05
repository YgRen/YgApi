<?php

/**
 * Created by PhpStorm.
 * User: eudemon
 * Date: 15/10/17
 * Time: 上午10:09
 */
class VoteDeletedeathController
{
    public function execute($request)
    {
        if (!isset($request['username']) || !isset($request['accessToken']) || !isset($request['resurrection_id'])
            || !isset($request['pic_id'])

        ) {
            throw new Exception('参数错误!', 1000);
        } else {
            if (!UserModel::checkLogin($request)) {
                throw new Exception("操作失败，该用户未登录", 1005);

            } else {
                return VoteModel::deleteDeath($request);
            }
        }

    }
}