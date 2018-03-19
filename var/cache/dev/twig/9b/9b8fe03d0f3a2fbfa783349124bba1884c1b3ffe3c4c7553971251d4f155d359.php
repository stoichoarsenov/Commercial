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
        $__internal_3727e98e8e88164c1674266a80f9d4549f28b17b8aa015ab76a35cbb11a80aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3727e98e8e88164c1674266a80f9d4549f28b17b8aa015ab76a35cbb11a80aed->enter($__internal_3727e98e8e88164c1674266a80f9d4549f28b17b8aa015ab76a35cbb11a80aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e0d11cae943349638dac1d526f85f15d162cb5a38ab39a6c6ba47b1576338d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d11cae943349638dac1d526f85f15d162cb5a38ab39a6c6ba47b1576338d2a->enter($__internal_e0d11cae943349638dac1d526f85f15d162cb5a38ab39a6c6ba47b1576338d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3727e98e8e88164c1674266a80f9d4549f28b17b8aa015ab76a35cbb11a80aed->leave($__internal_3727e98e8e88164c1674266a80f9d4549f28b17b8aa015ab76a35cbb11a80aed_prof);

        
        $__internal_e0d11cae943349638dac1d526f85f15d162cb5a38ab39a6c6ba47b1576338d2a->leave($__internal_e0d11cae943349638dac1d526f85f15d162cb5a38ab39a6c6ba47b1576338d2a_prof);

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
