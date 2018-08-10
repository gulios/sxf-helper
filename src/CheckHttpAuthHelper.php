<?php namespace SXF\Helper;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CheckHttpAuth
 * @package SXF\Helper
 *
 * $check = new CheckHttpAuth($this->sxf->request);
$check->check('1','2');
 */
class CheckHttpAuth
{
    /**
     * @var Request
     */
    public $request;

    /**
     * CheckHttpAuthHelper constructor.
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param $user
     * @param $password
     * @return bool
     */
    public function check($user, $password)
    {
        if ($user === $this->request->getUser() && $password === $this->request->getPassword()) {
            return true;
        } else {
            header('WWW-Authenticate: Basic realm="My Realm1"');
            header('HTTP/1.0 401 Unauthorized');

            die('Not authorized');
        }
    }
}
