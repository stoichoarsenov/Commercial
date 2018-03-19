<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_601730e464628424cbe0564a0223d764bde652b656f7222aaae056d1055073d9 extends Twig_Template
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
        $__internal_207869d914e27363bf0613ddd417e2a972f2c9def8c6b5649ae3981ab3096344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207869d914e27363bf0613ddd417e2a972f2c9def8c6b5649ae3981ab3096344->enter($__internal_207869d914e27363bf0613ddd417e2a972f2c9def8c6b5649ae3981ab3096344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c36bdfdc3622c63dc18a379c70431b451080e1eccda3b0df8505e2511050712b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36bdfdc3622c63dc18a379c70431b451080e1eccda3b0df8505e2511050712b->enter($__internal_c36bdfdc3622c63dc18a379c70431b451080e1eccda3b0df8505e2511050712b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_207869d914e27363bf0613ddd417e2a972f2c9def8c6b5649ae3981ab3096344->leave($__internal_207869d914e27363bf0613ddd417e2a972f2c9def8c6b5649ae3981ab3096344_prof);

        
        $__internal_c36bdfdc3622c63dc18a379c70431b451080e1eccda3b0df8505e2511050712b->leave($__internal_c36bdfdc3622c63dc18a379c70431b451080e1eccda3b0df8505e2511050712b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
