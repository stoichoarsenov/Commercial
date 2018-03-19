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
        $__internal_f0633e182d3eb5f65275617a0a5a9a5929d07c69a2f4df5999e51e5aac38a968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0633e182d3eb5f65275617a0a5a9a5929d07c69a2f4df5999e51e5aac38a968->enter($__internal_f0633e182d3eb5f65275617a0a5a9a5929d07c69a2f4df5999e51e5aac38a968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2c0a413dc6ead77f510aae6555aed1659d1fcfcc9ca9c40172984234b7ac2c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0a413dc6ead77f510aae6555aed1659d1fcfcc9ca9c40172984234b7ac2c4b->enter($__internal_2c0a413dc6ead77f510aae6555aed1659d1fcfcc9ca9c40172984234b7ac2c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f0633e182d3eb5f65275617a0a5a9a5929d07c69a2f4df5999e51e5aac38a968->leave($__internal_f0633e182d3eb5f65275617a0a5a9a5929d07c69a2f4df5999e51e5aac38a968_prof);

        
        $__internal_2c0a413dc6ead77f510aae6555aed1659d1fcfcc9ca9c40172984234b7ac2c4b->leave($__internal_2c0a413dc6ead77f510aae6555aed1659d1fcfcc9ca9c40172984234b7ac2c4b_prof);

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
