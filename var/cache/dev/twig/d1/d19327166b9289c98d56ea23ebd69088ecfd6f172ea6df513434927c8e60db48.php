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
        $__internal_99b5b2f3e985201e39a24a3fe0f81cc3c723b2e863acab57c3b94348bf05a753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b5b2f3e985201e39a24a3fe0f81cc3c723b2e863acab57c3b94348bf05a753->enter($__internal_99b5b2f3e985201e39a24a3fe0f81cc3c723b2e863acab57c3b94348bf05a753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_146b14b67fb8300ced59ea272ec465fe5ad4254abe5bd7dd51ee67e755d84eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146b14b67fb8300ced59ea272ec465fe5ad4254abe5bd7dd51ee67e755d84eeb->enter($__internal_146b14b67fb8300ced59ea272ec465fe5ad4254abe5bd7dd51ee67e755d84eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_99b5b2f3e985201e39a24a3fe0f81cc3c723b2e863acab57c3b94348bf05a753->leave($__internal_99b5b2f3e985201e39a24a3fe0f81cc3c723b2e863acab57c3b94348bf05a753_prof);

        
        $__internal_146b14b67fb8300ced59ea272ec465fe5ad4254abe5bd7dd51ee67e755d84eeb->leave($__internal_146b14b67fb8300ced59ea272ec465fe5ad4254abe5bd7dd51ee67e755d84eeb_prof);

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
