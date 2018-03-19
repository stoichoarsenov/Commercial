<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_97aba0fbdd89ecbba5fab83077a148e8be9cbdc9be88ab24410176b896f6188f extends Twig_Template
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
        $__internal_920c07e8aec31b5e76aaad5edccac7cbc059bfd8764c63c385dca936e5765cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920c07e8aec31b5e76aaad5edccac7cbc059bfd8764c63c385dca936e5765cb8->enter($__internal_920c07e8aec31b5e76aaad5edccac7cbc059bfd8764c63c385dca936e5765cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3d51b4ccb23f01baf8b49f2b06b5d274268f4394900fefd05547ade70ccb8f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d51b4ccb23f01baf8b49f2b06b5d274268f4394900fefd05547ade70ccb8f42->enter($__internal_3d51b4ccb23f01baf8b49f2b06b5d274268f4394900fefd05547ade70ccb8f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_920c07e8aec31b5e76aaad5edccac7cbc059bfd8764c63c385dca936e5765cb8->leave($__internal_920c07e8aec31b5e76aaad5edccac7cbc059bfd8764c63c385dca936e5765cb8_prof);

        
        $__internal_3d51b4ccb23f01baf8b49f2b06b5d274268f4394900fefd05547ade70ccb8f42->leave($__internal_3d51b4ccb23f01baf8b49f2b06b5d274268f4394900fefd05547ade70ccb8f42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
