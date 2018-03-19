<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_03cf286751ddd4f4d61d105a84b41a3511ab0fac5abe71ad05e2b02de633bca6 extends Twig_Template
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
        $__internal_6f5982921672d5e9e68a1e6550f968b65602869d974748aa7b4d1bc93ebf82ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5982921672d5e9e68a1e6550f968b65602869d974748aa7b4d1bc93ebf82ba->enter($__internal_6f5982921672d5e9e68a1e6550f968b65602869d974748aa7b4d1bc93ebf82ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_04e5d6209b746f05cb8546490d88c0dd4fdd8e4a4e746f95a44c8f52cdf12458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e5d6209b746f05cb8546490d88c0dd4fdd8e4a4e746f95a44c8f52cdf12458->enter($__internal_04e5d6209b746f05cb8546490d88c0dd4fdd8e4a4e746f95a44c8f52cdf12458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6f5982921672d5e9e68a1e6550f968b65602869d974748aa7b4d1bc93ebf82ba->leave($__internal_6f5982921672d5e9e68a1e6550f968b65602869d974748aa7b4d1bc93ebf82ba_prof);

        
        $__internal_04e5d6209b746f05cb8546490d88c0dd4fdd8e4a4e746f95a44c8f52cdf12458->leave($__internal_04e5d6209b746f05cb8546490d88c0dd4fdd8e4a4e746f95a44c8f52cdf12458_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
