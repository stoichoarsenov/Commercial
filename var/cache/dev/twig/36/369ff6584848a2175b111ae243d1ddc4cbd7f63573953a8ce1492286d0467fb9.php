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
        $__internal_c7f37db814b34cf4295f54af11dd17a10dfdcf84e24a11f343e1bb04ccdab95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f37db814b34cf4295f54af11dd17a10dfdcf84e24a11f343e1bb04ccdab95c->enter($__internal_c7f37db814b34cf4295f54af11dd17a10dfdcf84e24a11f343e1bb04ccdab95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b49ac4b80153b32bde44ce75497696bead7dc4a5af93177f83f7af123aacef33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49ac4b80153b32bde44ce75497696bead7dc4a5af93177f83f7af123aacef33->enter($__internal_b49ac4b80153b32bde44ce75497696bead7dc4a5af93177f83f7af123aacef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c7f37db814b34cf4295f54af11dd17a10dfdcf84e24a11f343e1bb04ccdab95c->leave($__internal_c7f37db814b34cf4295f54af11dd17a10dfdcf84e24a11f343e1bb04ccdab95c_prof);

        
        $__internal_b49ac4b80153b32bde44ce75497696bead7dc4a5af93177f83f7af123aacef33->leave($__internal_b49ac4b80153b32bde44ce75497696bead7dc4a5af93177f83f7af123aacef33_prof);

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
