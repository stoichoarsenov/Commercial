<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4b8fef7cf96e7da8559cfec462c2bb47e818ed60a5e9144fe01cbeb186827319 extends Twig_Template
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
        $__internal_55e02dd7bcc1138972709d85ca17baf66eee8df3caa410e87968f6a2a9764978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e02dd7bcc1138972709d85ca17baf66eee8df3caa410e87968f6a2a9764978->enter($__internal_55e02dd7bcc1138972709d85ca17baf66eee8df3caa410e87968f6a2a9764978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_388596b6089ff1205623794cfffef41dbd092c07b366311677996f92521f3efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388596b6089ff1205623794cfffef41dbd092c07b366311677996f92521f3efc->enter($__internal_388596b6089ff1205623794cfffef41dbd092c07b366311677996f92521f3efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_55e02dd7bcc1138972709d85ca17baf66eee8df3caa410e87968f6a2a9764978->leave($__internal_55e02dd7bcc1138972709d85ca17baf66eee8df3caa410e87968f6a2a9764978_prof);

        
        $__internal_388596b6089ff1205623794cfffef41dbd092c07b366311677996f92521f3efc->leave($__internal_388596b6089ff1205623794cfffef41dbd092c07b366311677996f92521f3efc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
