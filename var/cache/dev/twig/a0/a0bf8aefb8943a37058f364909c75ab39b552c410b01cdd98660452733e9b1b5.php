<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ca0a4e79305822030802528d70071fbc9d08eaff443c41979268b17c7ba798b extends Twig_Template
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
        $__internal_d890b25978e085fc4fba153a70219019b15303392d14d4b3339e944ad6cc5b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d890b25978e085fc4fba153a70219019b15303392d14d4b3339e944ad6cc5b7a->enter($__internal_d890b25978e085fc4fba153a70219019b15303392d14d4b3339e944ad6cc5b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d8392047780b846e559c58a63f7d8d09fb07b6a8e1684f593144a957e337c2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8392047780b846e559c58a63f7d8d09fb07b6a8e1684f593144a957e337c2b1->enter($__internal_d8392047780b846e559c58a63f7d8d09fb07b6a8e1684f593144a957e337c2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d890b25978e085fc4fba153a70219019b15303392d14d4b3339e944ad6cc5b7a->leave($__internal_d890b25978e085fc4fba153a70219019b15303392d14d4b3339e944ad6cc5b7a_prof);

        
        $__internal_d8392047780b846e559c58a63f7d8d09fb07b6a8e1684f593144a957e337c2b1->leave($__internal_d8392047780b846e559c58a63f7d8d09fb07b6a8e1684f593144a957e337c2b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
