<?php namespace Anomaly\AuthPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Illuminate\Contracts\Auth\Guard;
use Twig_SimpleFunction;

/**
 * Class AuthPlugin
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\Streams\Addon\Plugin\Auth
 */
class AuthPlugin extends Plugin
{

    /**
     * The auth object from Laravel.
     *
     * @var \Illuminate\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new AuthPlugin instance.
     *
     * @param \Illuminate\Auth\Guard
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Return plugin functions.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('auth_check', [$this->auth, 'check']),
            new Twig_SimpleFunction('auth_guest', [$this->auth, 'guest']),
            new Twig_SimpleFunction('auth_user', [$this->auth, 'user']),
        ];
    }
}
