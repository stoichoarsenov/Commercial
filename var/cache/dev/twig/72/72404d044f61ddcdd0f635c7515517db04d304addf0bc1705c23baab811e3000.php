<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ad5aa21744d5c1cdf8d04256163bf084eb0e2495c07e12cb66d48b5ad701cb44 extends Twig_Template
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
        $__internal_e05e7b7d2f0a2e17f54107cd62abe267d04b252abb8127801914ae0eb68fe812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05e7b7d2f0a2e17f54107cd62abe267d04b252abb8127801914ae0eb68fe812->enter($__internal_e05e7b7d2f0a2e17f54107cd62abe267d04b252abb8127801914ae0eb68fe812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2991294d3d23ce69a3d460900192aa4e880043a7e1031f7a152dd46e63b34dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2991294d3d23ce69a3d460900192aa4e880043a7e1031f7a152dd46e63b34dcb->enter($__internal_2991294d3d23ce69a3d460900192aa4e880043a7e1031f7a152dd46e63b34dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e05e7b7d2f0a2e17f54107cd62abe267d04b252abb8127801914ae0eb68fe812->leave($__internal_e05e7b7d2f0a2e17f54107cd62abe267d04b252abb8127801914ae0eb68fe812_prof);

        
        $__internal_2991294d3d23ce69a3d460900192aa4e880043a7e1031f7a152dd46e63b34dcb->leave($__internal_2991294d3d23ce69a3d460900192aa4e880043a7e1031f7a152dd46e63b34dcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
