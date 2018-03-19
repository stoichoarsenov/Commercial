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
        $__internal_64d4b923b3df1832580beb5c5e138ef33ae5ed23e430db36a64a67e40ddc95d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d4b923b3df1832580beb5c5e138ef33ae5ed23e430db36a64a67e40ddc95d6->enter($__internal_64d4b923b3df1832580beb5c5e138ef33ae5ed23e430db36a64a67e40ddc95d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_df40d003f3d36e080538fb0143548ba7b4c219d230dd36e58ecef8abd3e4ae79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df40d003f3d36e080538fb0143548ba7b4c219d230dd36e58ecef8abd3e4ae79->enter($__internal_df40d003f3d36e080538fb0143548ba7b4c219d230dd36e58ecef8abd3e4ae79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_64d4b923b3df1832580beb5c5e138ef33ae5ed23e430db36a64a67e40ddc95d6->leave($__internal_64d4b923b3df1832580beb5c5e138ef33ae5ed23e430db36a64a67e40ddc95d6_prof);

        
        $__internal_df40d003f3d36e080538fb0143548ba7b4c219d230dd36e58ecef8abd3e4ae79->leave($__internal_df40d003f3d36e080538fb0143548ba7b4c219d230dd36e58ecef8abd3e4ae79_prof);

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
