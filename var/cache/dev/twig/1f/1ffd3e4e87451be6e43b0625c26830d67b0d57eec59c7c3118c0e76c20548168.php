<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_1da17542b57ed7cc1eb83e9641adaec9d0e1ae8a25aa7a25fafbd54fbcc67a91 extends Twig_Template
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
        $__internal_5ebc43a10ae0cdf0d7ef36a9e529d36ebffd20356689288ca5222097c61ea68e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebc43a10ae0cdf0d7ef36a9e529d36ebffd20356689288ca5222097c61ea68e->enter($__internal_5ebc43a10ae0cdf0d7ef36a9e529d36ebffd20356689288ca5222097c61ea68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7f42a814b4c042bfc2db74ae837f88d557c446aef72caebae5d6fd3e83f775f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f42a814b4c042bfc2db74ae837f88d557c446aef72caebae5d6fd3e83f775f7->enter($__internal_7f42a814b4c042bfc2db74ae837f88d557c446aef72caebae5d6fd3e83f775f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5ebc43a10ae0cdf0d7ef36a9e529d36ebffd20356689288ca5222097c61ea68e->leave($__internal_5ebc43a10ae0cdf0d7ef36a9e529d36ebffd20356689288ca5222097c61ea68e_prof);

        
        $__internal_7f42a814b4c042bfc2db74ae837f88d557c446aef72caebae5d6fd3e83f775f7->leave($__internal_7f42a814b4c042bfc2db74ae837f88d557c446aef72caebae5d6fd3e83f775f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
