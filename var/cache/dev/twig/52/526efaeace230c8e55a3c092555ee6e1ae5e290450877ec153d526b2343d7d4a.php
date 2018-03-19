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
        $__internal_91ecc04a325217cfb726e7b9ef3c83dab5b14cd4a0164e458bb0bdbc6a3e60e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ecc04a325217cfb726e7b9ef3c83dab5b14cd4a0164e458bb0bdbc6a3e60e9->enter($__internal_91ecc04a325217cfb726e7b9ef3c83dab5b14cd4a0164e458bb0bdbc6a3e60e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_655c3acee5918bd3293613ba4f7da13bb491cc36858f80de97caa97c42350723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655c3acee5918bd3293613ba4f7da13bb491cc36858f80de97caa97c42350723->enter($__internal_655c3acee5918bd3293613ba4f7da13bb491cc36858f80de97caa97c42350723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_91ecc04a325217cfb726e7b9ef3c83dab5b14cd4a0164e458bb0bdbc6a3e60e9->leave($__internal_91ecc04a325217cfb726e7b9ef3c83dab5b14cd4a0164e458bb0bdbc6a3e60e9_prof);

        
        $__internal_655c3acee5918bd3293613ba4f7da13bb491cc36858f80de97caa97c42350723->leave($__internal_655c3acee5918bd3293613ba4f7da13bb491cc36858f80de97caa97c42350723_prof);

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
