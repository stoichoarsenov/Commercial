<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_23b09d2217c7aa4c81c6158ba947d6fa895c24a475a374bc2bbc8a8e380d3e7f extends Twig_Template
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
        $__internal_2db587b91382da801ff86365032285eba83e9922c59ffa8b839347f4b85ea3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db587b91382da801ff86365032285eba83e9922c59ffa8b839347f4b85ea3a8->enter($__internal_2db587b91382da801ff86365032285eba83e9922c59ffa8b839347f4b85ea3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_7004a211c00f5c10850e3a6b12f619e01b1a7edf5f93fa14d2960625f1bfcf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7004a211c00f5c10850e3a6b12f619e01b1a7edf5f93fa14d2960625f1bfcf88->enter($__internal_7004a211c00f5c10850e3a6b12f619e01b1a7edf5f93fa14d2960625f1bfcf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_2db587b91382da801ff86365032285eba83e9922c59ffa8b839347f4b85ea3a8->leave($__internal_2db587b91382da801ff86365032285eba83e9922c59ffa8b839347f4b85ea3a8_prof);

        
        $__internal_7004a211c00f5c10850e3a6b12f619e01b1a7edf5f93fa14d2960625f1bfcf88->leave($__internal_7004a211c00f5c10850e3a6b12f619e01b1a7edf5f93fa14d2960625f1bfcf88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
