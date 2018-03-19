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
        $__internal_5189eddc7a51a0ba49affc92f3042346755033c81f5945066de359a1fcde8af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5189eddc7a51a0ba49affc92f3042346755033c81f5945066de359a1fcde8af3->enter($__internal_5189eddc7a51a0ba49affc92f3042346755033c81f5945066de359a1fcde8af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9ad93b7f9ce9808410f2bfcf96a3a7edaf2a5e0cc7502f17ee3b01ab9cc7c47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad93b7f9ce9808410f2bfcf96a3a7edaf2a5e0cc7502f17ee3b01ab9cc7c47e->enter($__internal_9ad93b7f9ce9808410f2bfcf96a3a7edaf2a5e0cc7502f17ee3b01ab9cc7c47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5189eddc7a51a0ba49affc92f3042346755033c81f5945066de359a1fcde8af3->leave($__internal_5189eddc7a51a0ba49affc92f3042346755033c81f5945066de359a1fcde8af3_prof);

        
        $__internal_9ad93b7f9ce9808410f2bfcf96a3a7edaf2a5e0cc7502f17ee3b01ab9cc7c47e->leave($__internal_9ad93b7f9ce9808410f2bfcf96a3a7edaf2a5e0cc7502f17ee3b01ab9cc7c47e_prof);

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
