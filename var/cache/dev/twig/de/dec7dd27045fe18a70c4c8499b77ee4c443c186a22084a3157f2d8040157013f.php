<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_54eba50fa1b6695ca6feabc8b62b73bfe52c644bbc327f0e55b0f6c7b0e63065 extends Twig_Template
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
        $__internal_3cfb6c6d903b1d73e3a1443da316e90983a4f2d2a27e74a70db4d489c98a7ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfb6c6d903b1d73e3a1443da316e90983a4f2d2a27e74a70db4d489c98a7ffc->enter($__internal_3cfb6c6d903b1d73e3a1443da316e90983a4f2d2a27e74a70db4d489c98a7ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_572078c7df6fe25ecfd35f5e426c3b68e4863db14471f32794274ab5081590ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572078c7df6fe25ecfd35f5e426c3b68e4863db14471f32794274ab5081590ec->enter($__internal_572078c7df6fe25ecfd35f5e426c3b68e4863db14471f32794274ab5081590ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_3cfb6c6d903b1d73e3a1443da316e90983a4f2d2a27e74a70db4d489c98a7ffc->leave($__internal_3cfb6c6d903b1d73e3a1443da316e90983a4f2d2a27e74a70db4d489c98a7ffc_prof);

        
        $__internal_572078c7df6fe25ecfd35f5e426c3b68e4863db14471f32794274ab5081590ec->leave($__internal_572078c7df6fe25ecfd35f5e426c3b68e4863db14471f32794274ab5081590ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
