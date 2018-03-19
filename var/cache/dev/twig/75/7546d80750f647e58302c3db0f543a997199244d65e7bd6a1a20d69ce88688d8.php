<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4b8fef7cf96e7da8559cfec462c2bb47e818ed60a5e9144fe01cbeb186827319 extends Twig_Template
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
        $__internal_8a74b9e056491f95acd4c6e31980a38034ae633c1aaf3fd4ae544c73ed529fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a74b9e056491f95acd4c6e31980a38034ae633c1aaf3fd4ae544c73ed529fdd->enter($__internal_8a74b9e056491f95acd4c6e31980a38034ae633c1aaf3fd4ae544c73ed529fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_21323b8f3ae21062fe698b062c4fe4bdb4ef3ae5c1556bb0130818003b3e68a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21323b8f3ae21062fe698b062c4fe4bdb4ef3ae5c1556bb0130818003b3e68a8->enter($__internal_21323b8f3ae21062fe698b062c4fe4bdb4ef3ae5c1556bb0130818003b3e68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8a74b9e056491f95acd4c6e31980a38034ae633c1aaf3fd4ae544c73ed529fdd->leave($__internal_8a74b9e056491f95acd4c6e31980a38034ae633c1aaf3fd4ae544c73ed529fdd_prof);

        
        $__internal_21323b8f3ae21062fe698b062c4fe4bdb4ef3ae5c1556bb0130818003b3e68a8->leave($__internal_21323b8f3ae21062fe698b062c4fe4bdb4ef3ae5c1556bb0130818003b3e68a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
