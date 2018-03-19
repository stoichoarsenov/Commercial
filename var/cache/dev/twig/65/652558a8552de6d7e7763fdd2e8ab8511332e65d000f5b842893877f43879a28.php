<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5c3c55564acc5ec448e9c88975c2c977f9c90f787614c3c52dd7bf1e5186ec10 extends Twig_Template
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
        $__internal_ab705f4a44e319260da50f9687609213ede8e4f80208b493ad4b813f7938e9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab705f4a44e319260da50f9687609213ede8e4f80208b493ad4b813f7938e9f8->enter($__internal_ab705f4a44e319260da50f9687609213ede8e4f80208b493ad4b813f7938e9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_625638b434ac38c273709b311712b2c58d83dde217757d8929c4bd078ebd7827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625638b434ac38c273709b311712b2c58d83dde217757d8929c4bd078ebd7827->enter($__internal_625638b434ac38c273709b311712b2c58d83dde217757d8929c4bd078ebd7827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_ab705f4a44e319260da50f9687609213ede8e4f80208b493ad4b813f7938e9f8->leave($__internal_ab705f4a44e319260da50f9687609213ede8e4f80208b493ad4b813f7938e9f8_prof);

        
        $__internal_625638b434ac38c273709b311712b2c58d83dde217757d8929c4bd078ebd7827->leave($__internal_625638b434ac38c273709b311712b2c58d83dde217757d8929c4bd078ebd7827_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
