<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d9c3dba5d3ac627f517125e620a55ec76c18717137ca8d98301784cffd6e488e extends Twig_Template
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
        $__internal_839a35e3c83428632df1fa4c76f015584e47bc5207474606acfb6b70961347cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839a35e3c83428632df1fa4c76f015584e47bc5207474606acfb6b70961347cd->enter($__internal_839a35e3c83428632df1fa4c76f015584e47bc5207474606acfb6b70961347cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f89dc40fa1989a2a374168ce2b372c5a4de725eeec195eb45675aa66874361f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89dc40fa1989a2a374168ce2b372c5a4de725eeec195eb45675aa66874361f0->enter($__internal_f89dc40fa1989a2a374168ce2b372c5a4de725eeec195eb45675aa66874361f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_839a35e3c83428632df1fa4c76f015584e47bc5207474606acfb6b70961347cd->leave($__internal_839a35e3c83428632df1fa4c76f015584e47bc5207474606acfb6b70961347cd_prof);

        
        $__internal_f89dc40fa1989a2a374168ce2b372c5a4de725eeec195eb45675aa66874361f0->leave($__internal_f89dc40fa1989a2a374168ce2b372c5a4de725eeec195eb45675aa66874361f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
