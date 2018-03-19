<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4033a441ae5c325de683a74dcc0894a725197ef26e679d37203a4a6cd6a64f9a extends Twig_Template
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
        $__internal_8822b45e6c7e67076fef0ffe34b71f376f1c5907dd7d9dc408018cfe73bb7ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8822b45e6c7e67076fef0ffe34b71f376f1c5907dd7d9dc408018cfe73bb7ba1->enter($__internal_8822b45e6c7e67076fef0ffe34b71f376f1c5907dd7d9dc408018cfe73bb7ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c9d23482877b0ea7b984dd274aa94807e9719e731e4300124b9f70ba82684744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d23482877b0ea7b984dd274aa94807e9719e731e4300124b9f70ba82684744->enter($__internal_c9d23482877b0ea7b984dd274aa94807e9719e731e4300124b9f70ba82684744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8822b45e6c7e67076fef0ffe34b71f376f1c5907dd7d9dc408018cfe73bb7ba1->leave($__internal_8822b45e6c7e67076fef0ffe34b71f376f1c5907dd7d9dc408018cfe73bb7ba1_prof);

        
        $__internal_c9d23482877b0ea7b984dd274aa94807e9719e731e4300124b9f70ba82684744->leave($__internal_c9d23482877b0ea7b984dd274aa94807e9719e731e4300124b9f70ba82684744_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
