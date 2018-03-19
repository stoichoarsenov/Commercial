<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2f17743b2a3e0166ed20bd5ab6a03d1332f7467a2c5a0d278b1d7da907b8a1c6 extends Twig_Template
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
        $__internal_566fa876a3caa20a768114a875b24492ed57f43221d0826b17e143ec205cf4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566fa876a3caa20a768114a875b24492ed57f43221d0826b17e143ec205cf4a4->enter($__internal_566fa876a3caa20a768114a875b24492ed57f43221d0826b17e143ec205cf4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ff32fa7852cca6a54fa9e24c9cf8638c5c00b9f7d071266de23989300f38c1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff32fa7852cca6a54fa9e24c9cf8638c5c00b9f7d071266de23989300f38c1b2->enter($__internal_ff32fa7852cca6a54fa9e24c9cf8638c5c00b9f7d071266de23989300f38c1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_566fa876a3caa20a768114a875b24492ed57f43221d0826b17e143ec205cf4a4->leave($__internal_566fa876a3caa20a768114a875b24492ed57f43221d0826b17e143ec205cf4a4_prof);

        
        $__internal_ff32fa7852cca6a54fa9e24c9cf8638c5c00b9f7d071266de23989300f38c1b2->leave($__internal_ff32fa7852cca6a54fa9e24c9cf8638c5c00b9f7d071266de23989300f38c1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
