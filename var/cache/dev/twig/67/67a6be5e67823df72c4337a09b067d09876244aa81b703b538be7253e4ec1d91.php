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
        $__internal_ac1b98d8e57384800f3b34756ff174045c0e070e0b212c4f32785cfdaed5cc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1b98d8e57384800f3b34756ff174045c0e070e0b212c4f32785cfdaed5cc13->enter($__internal_ac1b98d8e57384800f3b34756ff174045c0e070e0b212c4f32785cfdaed5cc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_633a79d29e3e5e7c02368fc1fbb205b01aad178c8ac880870b9061024fb5308b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633a79d29e3e5e7c02368fc1fbb205b01aad178c8ac880870b9061024fb5308b->enter($__internal_633a79d29e3e5e7c02368fc1fbb205b01aad178c8ac880870b9061024fb5308b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ac1b98d8e57384800f3b34756ff174045c0e070e0b212c4f32785cfdaed5cc13->leave($__internal_ac1b98d8e57384800f3b34756ff174045c0e070e0b212c4f32785cfdaed5cc13_prof);

        
        $__internal_633a79d29e3e5e7c02368fc1fbb205b01aad178c8ac880870b9061024fb5308b->leave($__internal_633a79d29e3e5e7c02368fc1fbb205b01aad178c8ac880870b9061024fb5308b_prof);

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
