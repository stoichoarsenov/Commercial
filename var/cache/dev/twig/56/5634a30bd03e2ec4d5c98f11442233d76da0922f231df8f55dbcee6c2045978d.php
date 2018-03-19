<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_b880ea8b1246ce025a47b5b455a8eb404f318e0cadd5147bba3b68b99e6062f9 extends Twig_Template
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
        $__internal_a10a5d116d7ac9d1f23ff6ff69ef555f6046bcfec1f21a2901375c91ed39e9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10a5d116d7ac9d1f23ff6ff69ef555f6046bcfec1f21a2901375c91ed39e9af->enter($__internal_a10a5d116d7ac9d1f23ff6ff69ef555f6046bcfec1f21a2901375c91ed39e9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e484820d18134a338da4eb9ff7f49de727d9caf504e91a51a9f4650691af60a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e484820d18134a338da4eb9ff7f49de727d9caf504e91a51a9f4650691af60a1->enter($__internal_e484820d18134a338da4eb9ff7f49de727d9caf504e91a51a9f4650691af60a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a10a5d116d7ac9d1f23ff6ff69ef555f6046bcfec1f21a2901375c91ed39e9af->leave($__internal_a10a5d116d7ac9d1f23ff6ff69ef555f6046bcfec1f21a2901375c91ed39e9af_prof);

        
        $__internal_e484820d18134a338da4eb9ff7f49de727d9caf504e91a51a9f4650691af60a1->leave($__internal_e484820d18134a338da4eb9ff7f49de727d9caf504e91a51a9f4650691af60a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
