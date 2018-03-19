<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_dcdff94841d64b2ec956cb16b5fe6de6af5a21546b478d7b3f7b43bbc5a126a3 extends Twig_Template
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
        $__internal_2bdb27a42eb6ebc3da51f67ac98384e7f3b5658ba82dcde51273db9a13acd3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdb27a42eb6ebc3da51f67ac98384e7f3b5658ba82dcde51273db9a13acd3d4->enter($__internal_2bdb27a42eb6ebc3da51f67ac98384e7f3b5658ba82dcde51273db9a13acd3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_35a2bfb54ab4de55c4a6243632d5453ddb308df2ff5b0ed7304b207de406619e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a2bfb54ab4de55c4a6243632d5453ddb308df2ff5b0ed7304b207de406619e->enter($__internal_35a2bfb54ab4de55c4a6243632d5453ddb308df2ff5b0ed7304b207de406619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2bdb27a42eb6ebc3da51f67ac98384e7f3b5658ba82dcde51273db9a13acd3d4->leave($__internal_2bdb27a42eb6ebc3da51f67ac98384e7f3b5658ba82dcde51273db9a13acd3d4_prof);

        
        $__internal_35a2bfb54ab4de55c4a6243632d5453ddb308df2ff5b0ed7304b207de406619e->leave($__internal_35a2bfb54ab4de55c4a6243632d5453ddb308df2ff5b0ed7304b207de406619e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
