<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b1512bfc99a1fb59b2df504a5e1f855b9d3ad4365d4b0a14d8cea2b78a96852c extends Twig_Template
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
        $__internal_b93ec2b251c052ebd3292d66713c138ea45e6e270a864e7f794c6398aaf9b262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93ec2b251c052ebd3292d66713c138ea45e6e270a864e7f794c6398aaf9b262->enter($__internal_b93ec2b251c052ebd3292d66713c138ea45e6e270a864e7f794c6398aaf9b262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bece801ff8d208ed9c07cf829db4e8403efca298334e7e9b66b385d441afbce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bece801ff8d208ed9c07cf829db4e8403efca298334e7e9b66b385d441afbce5->enter($__internal_bece801ff8d208ed9c07cf829db4e8403efca298334e7e9b66b385d441afbce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b93ec2b251c052ebd3292d66713c138ea45e6e270a864e7f794c6398aaf9b262->leave($__internal_b93ec2b251c052ebd3292d66713c138ea45e6e270a864e7f794c6398aaf9b262_prof);

        
        $__internal_bece801ff8d208ed9c07cf829db4e8403efca298334e7e9b66b385d441afbce5->leave($__internal_bece801ff8d208ed9c07cf829db4e8403efca298334e7e9b66b385d441afbce5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
