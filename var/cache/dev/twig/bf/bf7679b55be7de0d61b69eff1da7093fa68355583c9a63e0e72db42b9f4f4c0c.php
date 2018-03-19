<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_78bdd51d739c96eac0db3b30c2b998ff02b755326f10de30ace2c989d4ca14d5 extends Twig_Template
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
        $__internal_41df07eec86f63ea04ca3bed134d08e7f9eb9a5f439b03e107a6d282f81cf0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41df07eec86f63ea04ca3bed134d08e7f9eb9a5f439b03e107a6d282f81cf0d5->enter($__internal_41df07eec86f63ea04ca3bed134d08e7f9eb9a5f439b03e107a6d282f81cf0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9c8eaf051b721dc52bf4e84b4e0ca215c8d70138007110d56b1e6f3659f04f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8eaf051b721dc52bf4e84b4e0ca215c8d70138007110d56b1e6f3659f04f64->enter($__internal_9c8eaf051b721dc52bf4e84b4e0ca215c8d70138007110d56b1e6f3659f04f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_41df07eec86f63ea04ca3bed134d08e7f9eb9a5f439b03e107a6d282f81cf0d5->leave($__internal_41df07eec86f63ea04ca3bed134d08e7f9eb9a5f439b03e107a6d282f81cf0d5_prof);

        
        $__internal_9c8eaf051b721dc52bf4e84b4e0ca215c8d70138007110d56b1e6f3659f04f64->leave($__internal_9c8eaf051b721dc52bf4e84b4e0ca215c8d70138007110d56b1e6f3659f04f64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
