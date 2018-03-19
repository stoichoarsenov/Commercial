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
        $__internal_08224178c4f62665dd5e1000731d4139e2ef9b73a67a384741ab6e032a7beca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08224178c4f62665dd5e1000731d4139e2ef9b73a67a384741ab6e032a7beca5->enter($__internal_08224178c4f62665dd5e1000731d4139e2ef9b73a67a384741ab6e032a7beca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0550c5a4b3439b06dc8c5dde35366befe88f8f7f4bd8c17c3fd675c41aff3b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0550c5a4b3439b06dc8c5dde35366befe88f8f7f4bd8c17c3fd675c41aff3b20->enter($__internal_0550c5a4b3439b06dc8c5dde35366befe88f8f7f4bd8c17c3fd675c41aff3b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_08224178c4f62665dd5e1000731d4139e2ef9b73a67a384741ab6e032a7beca5->leave($__internal_08224178c4f62665dd5e1000731d4139e2ef9b73a67a384741ab6e032a7beca5_prof);

        
        $__internal_0550c5a4b3439b06dc8c5dde35366befe88f8f7f4bd8c17c3fd675c41aff3b20->leave($__internal_0550c5a4b3439b06dc8c5dde35366befe88f8f7f4bd8c17c3fd675c41aff3b20_prof);

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
