<?php


namespace Aaxis\Practice\Block\Index;

use Magento\Framework\App\Request\Http;
use Magento\Framework\Data\Collection;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\User\Api\Data\UserInterface;
use Aaxis\Practice\Block\Index\User;


class UserPlugin
{

    public function __construct()
    {

    }

    //After-Listener 方法
    //当改变一个原生方法的返回值，或者在执行这个原生方法之后添加一些行为的时候，就需要在插件中用到 After-Listener 方法。
    //
    //After-Listener 方法的命名规则是，将原生方法的首字母改成大写，并在原生方法名前添加前缀 after。
    //
    //After-Listener 方法的第一个参数是原生方法所属类的实例。如果原生方法有返回值，则第二个参数为原生方法的返回值。
    //
    //After-Listener 方法的返回值类型与原生方法的返回值一致。

    public function afterGetUserInfoByEmail(User $subject,
        $result)
    {
        $result->new=' Pass through After' ;

        return $result;
    }


}