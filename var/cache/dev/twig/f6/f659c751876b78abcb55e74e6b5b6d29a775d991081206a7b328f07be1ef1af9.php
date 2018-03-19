<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4b1592bc213becb43cd32f3e9b224bd7e08ec882b7fc32ae808300e2a8618ec4 extends Twig_Template
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
        $__internal_ed9bcb2d02138839ac775a0eb2091f86a21dba833b0fbc1ef55ffe34c908370c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9bcb2d02138839ac775a0eb2091f86a21dba833b0fbc1ef55ffe34c908370c->enter($__internal_ed9bcb2d02138839ac775a0eb2091f86a21dba833b0fbc1ef55ffe34c908370c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_b48d043eadaaaa1ea85ad7756f0ef2ac5e698a45824f60eb85ea893139887147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48d043eadaaaa1ea85ad7756f0ef2ac5e698a45824f60eb85ea893139887147->enter($__internal_b48d043eadaaaa1ea85ad7756f0ef2ac5e698a45824f60eb85ea893139887147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ed9bcb2d02138839ac775a0eb2091f86a21dba833b0fbc1ef55ffe34c908370c->leave($__internal_ed9bcb2d02138839ac775a0eb2091f86a21dba833b0fbc1ef55ffe34c908370c_prof);

        
        $__internal_b48d043eadaaaa1ea85ad7756f0ef2ac5e698a45824f60eb85ea893139887147->leave($__internal_b48d043eadaaaa1ea85ad7756f0ef2ac5e698a45824f60eb85ea893139887147_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
