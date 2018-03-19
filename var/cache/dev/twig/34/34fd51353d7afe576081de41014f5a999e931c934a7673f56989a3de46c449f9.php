<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_99de0478e49948b543fe6842e38988d7a3f945e0f7b233d4d1bdc5777684f067 extends Twig_Template
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
        $__internal_6e3c2fc02fa9206c0308d7615fb70e69d831b1445725db8b4449dccf18ae17af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3c2fc02fa9206c0308d7615fb70e69d831b1445725db8b4449dccf18ae17af->enter($__internal_6e3c2fc02fa9206c0308d7615fb70e69d831b1445725db8b4449dccf18ae17af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_416da919fac44e82335ad06d188be782ad45e15465331a0511b1632cf1e33658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416da919fac44e82335ad06d188be782ad45e15465331a0511b1632cf1e33658->enter($__internal_416da919fac44e82335ad06d188be782ad45e15465331a0511b1632cf1e33658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_6e3c2fc02fa9206c0308d7615fb70e69d831b1445725db8b4449dccf18ae17af->leave($__internal_6e3c2fc02fa9206c0308d7615fb70e69d831b1445725db8b4449dccf18ae17af_prof);

        
        $__internal_416da919fac44e82335ad06d188be782ad45e15465331a0511b1632cf1e33658->leave($__internal_416da919fac44e82335ad06d188be782ad45e15465331a0511b1632cf1e33658_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
