<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_fb52e10c943d87923d5aef19b26374095a3cfc1b7be7f9e7421cbeb9d8909c7c extends Twig_Template
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
        $__internal_c7928fb744e2dfb59540c14861196610fb112843269dfd44da2782bc70ac17f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7928fb744e2dfb59540c14861196610fb112843269dfd44da2782bc70ac17f7->enter($__internal_c7928fb744e2dfb59540c14861196610fb112843269dfd44da2782bc70ac17f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a6c2359fe89b4dd5a5807b5ca5486ec1e889ac107d4cdc553ac067f2dd06dac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c2359fe89b4dd5a5807b5ca5486ec1e889ac107d4cdc553ac067f2dd06dac5->enter($__internal_a6c2359fe89b4dd5a5807b5ca5486ec1e889ac107d4cdc553ac067f2dd06dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c7928fb744e2dfb59540c14861196610fb112843269dfd44da2782bc70ac17f7->leave($__internal_c7928fb744e2dfb59540c14861196610fb112843269dfd44da2782bc70ac17f7_prof);

        
        $__internal_a6c2359fe89b4dd5a5807b5ca5486ec1e889ac107d4cdc553ac067f2dd06dac5->leave($__internal_a6c2359fe89b4dd5a5807b5ca5486ec1e889ac107d4cdc553ac067f2dd06dac5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
