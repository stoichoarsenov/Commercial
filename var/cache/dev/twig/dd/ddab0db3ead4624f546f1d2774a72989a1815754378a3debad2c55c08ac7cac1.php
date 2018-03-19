<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a5ca2eae3b5a542097fecbff8243c32e2c19a00991ff12826193fe62d5ffae26 extends Twig_Template
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
        $__internal_883d49d36cdd422428709dff8204058a2559822c2843d3b1061fee5807a2734b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883d49d36cdd422428709dff8204058a2559822c2843d3b1061fee5807a2734b->enter($__internal_883d49d36cdd422428709dff8204058a2559822c2843d3b1061fee5807a2734b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9fd10a6c260cdde865765e4669af85c97f4aa5266d9239e5ec482300f0dfea88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd10a6c260cdde865765e4669af85c97f4aa5266d9239e5ec482300f0dfea88->enter($__internal_9fd10a6c260cdde865765e4669af85c97f4aa5266d9239e5ec482300f0dfea88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_883d49d36cdd422428709dff8204058a2559822c2843d3b1061fee5807a2734b->leave($__internal_883d49d36cdd422428709dff8204058a2559822c2843d3b1061fee5807a2734b_prof);

        
        $__internal_9fd10a6c260cdde865765e4669af85c97f4aa5266d9239e5ec482300f0dfea88->leave($__internal_9fd10a6c260cdde865765e4669af85c97f4aa5266d9239e5ec482300f0dfea88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
