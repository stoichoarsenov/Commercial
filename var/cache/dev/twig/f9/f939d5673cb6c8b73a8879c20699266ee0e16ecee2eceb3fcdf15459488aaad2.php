<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2f17743b2a3e0166ed20bd5ab6a03d1332f7467a2c5a0d278b1d7da907b8a1c6 extends Twig_Template
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
        $__internal_c25810023511bdf285be14832dd21977951bf825c9a5a4db87bf717de979a3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25810023511bdf285be14832dd21977951bf825c9a5a4db87bf717de979a3bb->enter($__internal_c25810023511bdf285be14832dd21977951bf825c9a5a4db87bf717de979a3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e97999435ff57619c4c0f7d1b8c5a2fc45848a704f712f4ab76f9ed2637d0a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97999435ff57619c4c0f7d1b8c5a2fc45848a704f712f4ab76f9ed2637d0a08->enter($__internal_e97999435ff57619c4c0f7d1b8c5a2fc45848a704f712f4ab76f9ed2637d0a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c25810023511bdf285be14832dd21977951bf825c9a5a4db87bf717de979a3bb->leave($__internal_c25810023511bdf285be14832dd21977951bf825c9a5a4db87bf717de979a3bb_prof);

        
        $__internal_e97999435ff57619c4c0f7d1b8c5a2fc45848a704f712f4ab76f9ed2637d0a08->leave($__internal_e97999435ff57619c4c0f7d1b8c5a2fc45848a704f712f4ab76f9ed2637d0a08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
