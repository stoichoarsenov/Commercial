<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_148509d75e2f47fbbb1cadfa3120731a49753aa583b4bdb77d02b9c9b12b2c0e extends Twig_Template
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
        $__internal_e753fd3026b0d5cadf11b89f45610c903e073dba15ec1826104acf361c56e7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e753fd3026b0d5cadf11b89f45610c903e073dba15ec1826104acf361c56e7cc->enter($__internal_e753fd3026b0d5cadf11b89f45610c903e073dba15ec1826104acf361c56e7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_008ca49b26440d354d21708465fc52a468aad2f094e62579565dda6e6eed7103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008ca49b26440d354d21708465fc52a468aad2f094e62579565dda6e6eed7103->enter($__internal_008ca49b26440d354d21708465fc52a468aad2f094e62579565dda6e6eed7103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e753fd3026b0d5cadf11b89f45610c903e073dba15ec1826104acf361c56e7cc->leave($__internal_e753fd3026b0d5cadf11b89f45610c903e073dba15ec1826104acf361c56e7cc_prof);

        
        $__internal_008ca49b26440d354d21708465fc52a468aad2f094e62579565dda6e6eed7103->leave($__internal_008ca49b26440d354d21708465fc52a468aad2f094e62579565dda6e6eed7103_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
