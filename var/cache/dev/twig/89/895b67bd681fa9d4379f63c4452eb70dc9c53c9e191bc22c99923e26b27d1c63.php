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
        $__internal_e57ac5d723ff30167e0e3e5b5ac7b078390f43d0c27e4ffad8fa5de913736cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57ac5d723ff30167e0e3e5b5ac7b078390f43d0c27e4ffad8fa5de913736cb5->enter($__internal_e57ac5d723ff30167e0e3e5b5ac7b078390f43d0c27e4ffad8fa5de913736cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4fe5637b10702815fa5c00440a4cca4306f72b7d3ff70f6526260b9eb48108bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe5637b10702815fa5c00440a4cca4306f72b7d3ff70f6526260b9eb48108bb->enter($__internal_4fe5637b10702815fa5c00440a4cca4306f72b7d3ff70f6526260b9eb48108bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e57ac5d723ff30167e0e3e5b5ac7b078390f43d0c27e4ffad8fa5de913736cb5->leave($__internal_e57ac5d723ff30167e0e3e5b5ac7b078390f43d0c27e4ffad8fa5de913736cb5_prof);

        
        $__internal_4fe5637b10702815fa5c00440a4cca4306f72b7d3ff70f6526260b9eb48108bb->leave($__internal_4fe5637b10702815fa5c00440a4cca4306f72b7d3ff70f6526260b9eb48108bb_prof);

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
