<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1c2f988b462bfa0417485dcc8f813075a28c14e71149817c686f019d6e93194d extends Twig_Template
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
        $__internal_b4c85b2ee3bff6ea2e5ca96f3fce292b23a9258b3a93a0d48626fa316d7389ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c85b2ee3bff6ea2e5ca96f3fce292b23a9258b3a93a0d48626fa316d7389ba->enter($__internal_b4c85b2ee3bff6ea2e5ca96f3fce292b23a9258b3a93a0d48626fa316d7389ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_268f2791f5efa441cb7428649b37b7bd1d42023ecffeddd13b5c64aaf42b7976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268f2791f5efa441cb7428649b37b7bd1d42023ecffeddd13b5c64aaf42b7976->enter($__internal_268f2791f5efa441cb7428649b37b7bd1d42023ecffeddd13b5c64aaf42b7976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b4c85b2ee3bff6ea2e5ca96f3fce292b23a9258b3a93a0d48626fa316d7389ba->leave($__internal_b4c85b2ee3bff6ea2e5ca96f3fce292b23a9258b3a93a0d48626fa316d7389ba_prof);

        
        $__internal_268f2791f5efa441cb7428649b37b7bd1d42023ecffeddd13b5c64aaf42b7976->leave($__internal_268f2791f5efa441cb7428649b37b7bd1d42023ecffeddd13b5c64aaf42b7976_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
