<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a7017a983a11fdbc857f3d9b81ffa74e7fab707d015ad10f968d3e33b0f1eaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7ed6bd5a8356f2010f820ac5554ae50053fbdc6f215722319796ffe58be81be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ed6bd5a8356f2010f820ac5554ae50053fbdc6f215722319796ffe58be81be->enter($__internal_e7ed6bd5a8356f2010f820ac5554ae50053fbdc6f215722319796ffe58be81be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_2515f39318cd9080ffe611f1a33f6f2a954944e93734917d66dc910c0e591a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2515f39318cd9080ffe611f1a33f6f2a954944e93734917d66dc910c0e591a78->enter($__internal_2515f39318cd9080ffe611f1a33f6f2a954944e93734917d66dc910c0e591a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ed6bd5a8356f2010f820ac5554ae50053fbdc6f215722319796ffe58be81be->leave($__internal_e7ed6bd5a8356f2010f820ac5554ae50053fbdc6f215722319796ffe58be81be_prof);

        
        $__internal_2515f39318cd9080ffe611f1a33f6f2a954944e93734917d66dc910c0e591a78->leave($__internal_2515f39318cd9080ffe611f1a33f6f2a954944e93734917d66dc910c0e591a78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edac129728bbbbdbc88af366e0e279e05c2cd96d68acaf54f096ec4c3a94aa37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edac129728bbbbdbc88af366e0e279e05c2cd96d68acaf54f096ec4c3a94aa37->enter($__internal_edac129728bbbbdbc88af366e0e279e05c2cd96d68acaf54f096ec4c3a94aa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d8fa563bdcd6adda57bdc6eda0a64beff1b7f06e868782e2c85b55978135bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8fa563bdcd6adda57bdc6eda0a64beff1b7f06e868782e2c85b55978135bb3->enter($__internal_8d8fa563bdcd6adda57bdc6eda0a64beff1b7f06e868782e2c85b55978135bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8d8fa563bdcd6adda57bdc6eda0a64beff1b7f06e868782e2c85b55978135bb3->leave($__internal_8d8fa563bdcd6adda57bdc6eda0a64beff1b7f06e868782e2c85b55978135bb3_prof);

        
        $__internal_edac129728bbbbdbc88af366e0e279e05c2cd96d68acaf54f096ec4c3a94aa37->leave($__internal_edac129728bbbbdbc88af366e0e279e05c2cd96d68acaf54f096ec4c3a94aa37_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}

", "@FOSUser/Security/login.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
