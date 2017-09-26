<?php

/* EcommerceBundle:Default:include.html.twig */
class __TwigTemplate_7c8613d2747fd46f50349c8692760ffa1921c8a8d72d995bf47922ae9537cd02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Je suis une include";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:include.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Je suis une include", "EcommerceBundle:Default:include.html.twig", "/var/www/html/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/include.html.twig");
    }
}
