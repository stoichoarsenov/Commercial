<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_35b809075f173497f42240281e386cdd43d32018a4e3ddb308126f2b1406b133 extends Twig_Template
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
        $__internal_21a00e2762f68391ed9f26e5bc219e6a143aa06912823e9f782c1aba63b879d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a00e2762f68391ed9f26e5bc219e6a143aa06912823e9f782c1aba63b879d3->enter($__internal_21a00e2762f68391ed9f26e5bc219e6a143aa06912823e9f782c1aba63b879d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_590bd15719fac3cee0cd6a318f15ba4e7d234c1dfcd4d4335bb941c458ded017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590bd15719fac3cee0cd6a318f15ba4e7d234c1dfcd4d4335bb941c458ded017->enter($__internal_590bd15719fac3cee0cd6a318f15ba4e7d234c1dfcd4d4335bb941c458ded017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_21a00e2762f68391ed9f26e5bc219e6a143aa06912823e9f782c1aba63b879d3->leave($__internal_21a00e2762f68391ed9f26e5bc219e6a143aa06912823e9f782c1aba63b879d3_prof);

        
        $__internal_590bd15719fac3cee0cd6a318f15ba4e7d234c1dfcd4d4335bb941c458ded017->leave($__internal_590bd15719fac3cee0cd6a318f15ba4e7d234c1dfcd4d4335bb941c458ded017_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
