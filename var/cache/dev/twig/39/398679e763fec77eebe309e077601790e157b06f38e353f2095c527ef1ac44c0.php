<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_466aad876517f739c3e5f2370458f59894f14aff2dac53a01c7b32c57321839d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5674815141d22995e4ba12289acde650749c81a5ad48fa1205d43778c1e83fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5674815141d22995e4ba12289acde650749c81a5ad48fa1205d43778c1e83fdb->enter($__internal_5674815141d22995e4ba12289acde650749c81a5ad48fa1205d43778c1e83fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d9b9ec21f28d77cc70dfdc5a9edf3e4cbb9439063e67bc6da0b3a1e27841029b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b9ec21f28d77cc70dfdc5a9edf3e4cbb9439063e67bc6da0b3a1e27841029b->enter($__internal_d9b9ec21f28d77cc70dfdc5a9edf3e4cbb9439063e67bc6da0b3a1e27841029b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5674815141d22995e4ba12289acde650749c81a5ad48fa1205d43778c1e83fdb->leave($__internal_5674815141d22995e4ba12289acde650749c81a5ad48fa1205d43778c1e83fdb_prof);

        
        $__internal_d9b9ec21f28d77cc70dfdc5a9edf3e4cbb9439063e67bc6da0b3a1e27841029b->leave($__internal_d9b9ec21f28d77cc70dfdc5a9edf3e4cbb9439063e67bc6da0b3a1e27841029b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_982523772a11f25849aeab87a62f9b04654355ee99c1d830eed9e827dfcabc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982523772a11f25849aeab87a62f9b04654355ee99c1d830eed9e827dfcabc59->enter($__internal_982523772a11f25849aeab87a62f9b04654355ee99c1d830eed9e827dfcabc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8106f6baee3dd25c8b3a480ac29ea0ba5d989a708bcc6479a8160e8ca90a5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8106f6baee3dd25c8b3a480ac29ea0ba5d989a708bcc6479a8160e8ca90a5d9->enter($__internal_d8106f6baee3dd25c8b3a480ac29ea0ba5d989a708bcc6479a8160e8ca90a5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d8106f6baee3dd25c8b3a480ac29ea0ba5d989a708bcc6479a8160e8ca90a5d9->leave($__internal_d8106f6baee3dd25c8b3a480ac29ea0ba5d989a708bcc6479a8160e8ca90a5d9_prof);

        
        $__internal_982523772a11f25849aeab87a62f9b04654355ee99c1d830eed9e827dfcabc59->leave($__internal_982523772a11f25849aeab87a62f9b04654355ee99c1d830eed9e827dfcabc59_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
