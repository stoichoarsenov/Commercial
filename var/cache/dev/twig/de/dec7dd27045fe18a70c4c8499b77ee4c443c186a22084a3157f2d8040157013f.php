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
        $__internal_14ebe7f29079c05d92f719654ba349bbfedf857cc9263260012d8f23dd1031a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ebe7f29079c05d92f719654ba349bbfedf857cc9263260012d8f23dd1031a6->enter($__internal_14ebe7f29079c05d92f719654ba349bbfedf857cc9263260012d8f23dd1031a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_a962ce3e3130875ed7aba75aee061d9ab77f7d1f4c76f9b6be435c1dbaaec2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a962ce3e3130875ed7aba75aee061d9ab77f7d1f4c76f9b6be435c1dbaaec2a6->enter($__internal_a962ce3e3130875ed7aba75aee061d9ab77f7d1f4c76f9b6be435c1dbaaec2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_14ebe7f29079c05d92f719654ba349bbfedf857cc9263260012d8f23dd1031a6->leave($__internal_14ebe7f29079c05d92f719654ba349bbfedf857cc9263260012d8f23dd1031a6_prof);

        
        $__internal_a962ce3e3130875ed7aba75aee061d9ab77f7d1f4c76f9b6be435c1dbaaec2a6->leave($__internal_a962ce3e3130875ed7aba75aee061d9ab77f7d1f4c76f9b6be435c1dbaaec2a6_prof);

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
