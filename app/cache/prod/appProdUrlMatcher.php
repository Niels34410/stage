<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/ecommerce')) {
            // ecommerce_homepage
            if (rtrim($pathinfo, '/') === '/ecommerce') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ecommerce_homepage');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ecommerce_homepage',);
            }

            // ecommerce_first
            if (preg_match('#^/ecommerce/(?P<id>\\d+)/first(?:\\.(?P<_format>html))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ecommerce_first')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::firstTestAction',  '_format' => 'html',));
            }

            // ecommerce_second
            if ($pathinfo === '/ecommerce/second') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::secondTestAction',  '_route' => 'ecommerce_second',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
