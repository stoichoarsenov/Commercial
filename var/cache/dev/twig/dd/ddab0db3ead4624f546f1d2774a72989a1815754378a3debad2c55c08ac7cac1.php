<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a5ca2eae3b5a542097fecbff8243c32e2c19a00991ff12826193fe62d5ffae26 extends Twig_Template
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
        $__internal_c028cc11b72681b32ff439608e638d815e4e21a843f017a0701762790ccd3dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c028cc11b72681b32ff439608e638d815e4e21a843f017a0701762790ccd3dda->enter($__internal_c028cc11b72681b32ff439608e638d815e4e21a843f017a0701762790ccd3dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ad5f4330aca6838680804135bc2ae9ed3f9ce1e733d053015362d324e7e36427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5f4330aca6838680804135bc2ae9ed3f9ce1e733d053015362d324e7e36427->enter($__internal_ad5f4330aca6838680804135bc2ae9ed3f9ce1e733d053015362d324e7e36427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c028cc11b72681b32ff439608e638d815e4e21a843f017a0701762790ccd3dda->leave($__internal_c028cc11b72681b32ff439608e638d815e4e21a843f017a0701762790ccd3dda_prof);

        
        $__internal_ad5f4330aca6838680804135bc2ae9ed3f9ce1e733d053015362d324e7e36427->leave($__internal_ad5f4330aca6838680804135bc2ae9ed3f9ce1e733d053015362d324e7e36427_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
