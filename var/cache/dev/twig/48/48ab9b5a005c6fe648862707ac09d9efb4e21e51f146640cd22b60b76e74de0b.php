<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7f797f7908612eb1ad84370664b921a07fa74597cbb59058a63b0102058f2ef0 extends Twig_Template
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
        $__internal_5db9306958e570c9b4f5c4d884e9994177b72285f13c943e6bb89403abe8d77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db9306958e570c9b4f5c4d884e9994177b72285f13c943e6bb89403abe8d77d->enter($__internal_5db9306958e570c9b4f5c4d884e9994177b72285f13c943e6bb89403abe8d77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_699b294acf23cacb4752213b22378fbea40c04aca412edb3a09d8dac65b0411e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699b294acf23cacb4752213b22378fbea40c04aca412edb3a09d8dac65b0411e->enter($__internal_699b294acf23cacb4752213b22378fbea40c04aca412edb3a09d8dac65b0411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5db9306958e570c9b4f5c4d884e9994177b72285f13c943e6bb89403abe8d77d->leave($__internal_5db9306958e570c9b4f5c4d884e9994177b72285f13c943e6bb89403abe8d77d_prof);

        
        $__internal_699b294acf23cacb4752213b22378fbea40c04aca412edb3a09d8dac65b0411e->leave($__internal_699b294acf23cacb4752213b22378fbea40c04aca412edb3a09d8dac65b0411e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
