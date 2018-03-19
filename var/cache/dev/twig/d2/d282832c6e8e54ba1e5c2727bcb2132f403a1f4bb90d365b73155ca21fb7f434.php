<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_05f375681f1fd7daac134a379669fd0c69ed655e6937c94f4526749dedc379b0 extends Twig_Template
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
        $__internal_56547aee2d4b2db0004c6956005b7b74b801c9954f7358fcbc50641e69d9166b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56547aee2d4b2db0004c6956005b7b74b801c9954f7358fcbc50641e69d9166b->enter($__internal_56547aee2d4b2db0004c6956005b7b74b801c9954f7358fcbc50641e69d9166b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_92f1e32f7a9c6c422725023737b0b7895fe37cf3ec5a34fd57bdf15d750cecae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f1e32f7a9c6c422725023737b0b7895fe37cf3ec5a34fd57bdf15d750cecae->enter($__internal_92f1e32f7a9c6c422725023737b0b7895fe37cf3ec5a34fd57bdf15d750cecae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_56547aee2d4b2db0004c6956005b7b74b801c9954f7358fcbc50641e69d9166b->leave($__internal_56547aee2d4b2db0004c6956005b7b74b801c9954f7358fcbc50641e69d9166b_prof);

        
        $__internal_92f1e32f7a9c6c422725023737b0b7895fe37cf3ec5a34fd57bdf15d750cecae->leave($__internal_92f1e32f7a9c6c422725023737b0b7895fe37cf3ec5a34fd57bdf15d750cecae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
