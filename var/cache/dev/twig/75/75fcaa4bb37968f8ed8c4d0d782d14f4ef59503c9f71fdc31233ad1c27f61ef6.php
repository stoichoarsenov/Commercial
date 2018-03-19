<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7087f871177799661e07149ca48a669734d9429884f4f447e52fb26bec78ff67 extends Twig_Template
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
        $__internal_d4c53a7ff64adff3d19118f02f7b9b40681a782e347ec70631fb8d623885b781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c53a7ff64adff3d19118f02f7b9b40681a782e347ec70631fb8d623885b781->enter($__internal_d4c53a7ff64adff3d19118f02f7b9b40681a782e347ec70631fb8d623885b781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4a3906cc16a074e55ddf7fc008cb92b0eb1c87be4f8d296d27cdc3fde89ec605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3906cc16a074e55ddf7fc008cb92b0eb1c87be4f8d296d27cdc3fde89ec605->enter($__internal_4a3906cc16a074e55ddf7fc008cb92b0eb1c87be4f8d296d27cdc3fde89ec605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d4c53a7ff64adff3d19118f02f7b9b40681a782e347ec70631fb8d623885b781->leave($__internal_d4c53a7ff64adff3d19118f02f7b9b40681a782e347ec70631fb8d623885b781_prof);

        
        $__internal_4a3906cc16a074e55ddf7fc008cb92b0eb1c87be4f8d296d27cdc3fde89ec605->leave($__internal_4a3906cc16a074e55ddf7fc008cb92b0eb1c87be4f8d296d27cdc3fde89ec605_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
