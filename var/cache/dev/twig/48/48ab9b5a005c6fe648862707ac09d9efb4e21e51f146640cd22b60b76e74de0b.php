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
        $__internal_33cffc09c7fb3694e095fe7aea8be7c716660bc19a134a3cb44744b4f051cc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cffc09c7fb3694e095fe7aea8be7c716660bc19a134a3cb44744b4f051cc42->enter($__internal_33cffc09c7fb3694e095fe7aea8be7c716660bc19a134a3cb44744b4f051cc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d0704ab236a13969a6b3770c44269fff1312439d46cca034078b9b1af074ad39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0704ab236a13969a6b3770c44269fff1312439d46cca034078b9b1af074ad39->enter($__internal_d0704ab236a13969a6b3770c44269fff1312439d46cca034078b9b1af074ad39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_33cffc09c7fb3694e095fe7aea8be7c716660bc19a134a3cb44744b4f051cc42->leave($__internal_33cffc09c7fb3694e095fe7aea8be7c716660bc19a134a3cb44744b4f051cc42_prof);

        
        $__internal_d0704ab236a13969a6b3770c44269fff1312439d46cca034078b9b1af074ad39->leave($__internal_d0704ab236a13969a6b3770c44269fff1312439d46cca034078b9b1af074ad39_prof);

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
