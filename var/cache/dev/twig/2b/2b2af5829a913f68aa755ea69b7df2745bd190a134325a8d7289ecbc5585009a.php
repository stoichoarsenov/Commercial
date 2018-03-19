<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9b06316700fba52bb8c223305e9b5a84cdbeaf2d43dbde225adb50602776dd8f extends Twig_Template
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
        $__internal_fe1587968c1a96dbf1f5897d7971092c3eddb96648aeabb45a7cd5057178fe10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1587968c1a96dbf1f5897d7971092c3eddb96648aeabb45a7cd5057178fe10->enter($__internal_fe1587968c1a96dbf1f5897d7971092c3eddb96648aeabb45a7cd5057178fe10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9e9887ff9c9627b41c23ca7e7677dd55aa93f8b61833eb51de4907cd46286ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9887ff9c9627b41c23ca7e7677dd55aa93f8b61833eb51de4907cd46286ca7->enter($__internal_9e9887ff9c9627b41c23ca7e7677dd55aa93f8b61833eb51de4907cd46286ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fe1587968c1a96dbf1f5897d7971092c3eddb96648aeabb45a7cd5057178fe10->leave($__internal_fe1587968c1a96dbf1f5897d7971092c3eddb96648aeabb45a7cd5057178fe10_prof);

        
        $__internal_9e9887ff9c9627b41c23ca7e7677dd55aa93f8b61833eb51de4907cd46286ca7->leave($__internal_9e9887ff9c9627b41c23ca7e7677dd55aa93f8b61833eb51de4907cd46286ca7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
