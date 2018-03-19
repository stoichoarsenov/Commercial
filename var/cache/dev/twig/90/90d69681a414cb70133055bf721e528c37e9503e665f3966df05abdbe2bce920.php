<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4d766f6e7e4e1c94630fd0f5567e0246d0cb3d4ad58a120db7247d02200431be extends Twig_Template
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
        $__internal_e2454b44d87244846d8dbb2f396cafa7268780ede69662776395ec8e659cc84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2454b44d87244846d8dbb2f396cafa7268780ede69662776395ec8e659cc84b->enter($__internal_e2454b44d87244846d8dbb2f396cafa7268780ede69662776395ec8e659cc84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_894d5305e0cd84fdf87857ff1e6148800f1cfd0ffbb9acbab5d127a9016fd05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894d5305e0cd84fdf87857ff1e6148800f1cfd0ffbb9acbab5d127a9016fd05e->enter($__internal_894d5305e0cd84fdf87857ff1e6148800f1cfd0ffbb9acbab5d127a9016fd05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e2454b44d87244846d8dbb2f396cafa7268780ede69662776395ec8e659cc84b->leave($__internal_e2454b44d87244846d8dbb2f396cafa7268780ede69662776395ec8e659cc84b_prof);

        
        $__internal_894d5305e0cd84fdf87857ff1e6148800f1cfd0ffbb9acbab5d127a9016fd05e->leave($__internal_894d5305e0cd84fdf87857ff1e6148800f1cfd0ffbb9acbab5d127a9016fd05e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
