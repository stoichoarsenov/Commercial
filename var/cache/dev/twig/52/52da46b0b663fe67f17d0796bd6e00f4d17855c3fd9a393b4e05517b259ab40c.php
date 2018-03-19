<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b1512bfc99a1fb59b2df504a5e1f855b9d3ad4365d4b0a14d8cea2b78a96852c extends Twig_Template
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
        $__internal_fb4933628c2277bcab450efc91cca92e44168c953a60987788e62ed33829d507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4933628c2277bcab450efc91cca92e44168c953a60987788e62ed33829d507->enter($__internal_fb4933628c2277bcab450efc91cca92e44168c953a60987788e62ed33829d507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_79ff5b1e805fa5972777446c6141e56f9c7e132b0603946c94f00ddeb6377613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ff5b1e805fa5972777446c6141e56f9c7e132b0603946c94f00ddeb6377613->enter($__internal_79ff5b1e805fa5972777446c6141e56f9c7e132b0603946c94f00ddeb6377613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fb4933628c2277bcab450efc91cca92e44168c953a60987788e62ed33829d507->leave($__internal_fb4933628c2277bcab450efc91cca92e44168c953a60987788e62ed33829d507_prof);

        
        $__internal_79ff5b1e805fa5972777446c6141e56f9c7e132b0603946c94f00ddeb6377613->leave($__internal_79ff5b1e805fa5972777446c6141e56f9c7e132b0603946c94f00ddeb6377613_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
