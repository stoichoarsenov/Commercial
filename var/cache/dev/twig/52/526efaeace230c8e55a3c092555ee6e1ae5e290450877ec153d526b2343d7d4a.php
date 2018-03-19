<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_be7833c68d352973cb7f3e1bacdc069d537ee7b19dbbe95709b2e911b97cac52 extends Twig_Template
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
        $__internal_829c594e614f30a726455bafeff8d55e5470d38ef9e4428adfdcd6d7fff2870a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829c594e614f30a726455bafeff8d55e5470d38ef9e4428adfdcd6d7fff2870a->enter($__internal_829c594e614f30a726455bafeff8d55e5470d38ef9e4428adfdcd6d7fff2870a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_af66262a274690eab076c55598083ce7d490c613d1672437f9b10ad0141bf6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af66262a274690eab076c55598083ce7d490c613d1672437f9b10ad0141bf6b0->enter($__internal_af66262a274690eab076c55598083ce7d490c613d1672437f9b10ad0141bf6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_829c594e614f30a726455bafeff8d55e5470d38ef9e4428adfdcd6d7fff2870a->leave($__internal_829c594e614f30a726455bafeff8d55e5470d38ef9e4428adfdcd6d7fff2870a_prof);

        
        $__internal_af66262a274690eab076c55598083ce7d490c613d1672437f9b10ad0141bf6b0->leave($__internal_af66262a274690eab076c55598083ce7d490c613d1672437f9b10ad0141bf6b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
