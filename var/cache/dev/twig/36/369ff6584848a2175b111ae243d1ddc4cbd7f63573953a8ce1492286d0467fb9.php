<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0bf788f741b841b7313dbb313c29645902b7bbbedcd0afbe2d176df7ad80cf29 extends Twig_Template
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
        $__internal_e39956470cb7a3095b4f00907471e6315ba7fb5a7df256d3c21f27073f389519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39956470cb7a3095b4f00907471e6315ba7fb5a7df256d3c21f27073f389519->enter($__internal_e39956470cb7a3095b4f00907471e6315ba7fb5a7df256d3c21f27073f389519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_586d1a5336221b42852de09d41eb8357cce6b52bf686409e60dc7ecebb625c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586d1a5336221b42852de09d41eb8357cce6b52bf686409e60dc7ecebb625c0a->enter($__internal_586d1a5336221b42852de09d41eb8357cce6b52bf686409e60dc7ecebb625c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e39956470cb7a3095b4f00907471e6315ba7fb5a7df256d3c21f27073f389519->leave($__internal_e39956470cb7a3095b4f00907471e6315ba7fb5a7df256d3c21f27073f389519_prof);

        
        $__internal_586d1a5336221b42852de09d41eb8357cce6b52bf686409e60dc7ecebb625c0a->leave($__internal_586d1a5336221b42852de09d41eb8357cce6b52bf686409e60dc7ecebb625c0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
