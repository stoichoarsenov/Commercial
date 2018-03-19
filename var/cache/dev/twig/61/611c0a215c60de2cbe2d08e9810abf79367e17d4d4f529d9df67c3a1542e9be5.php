<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d2ef06f27dc62e62f3e617b54dd145a93a420fe46197368c93923ddf8e87b4a2 extends Twig_Template
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
        $__internal_0c05f767d747fb02f03d1b0fa04ed20e5bc91dfeaca05d2cb9db6d4e91cece40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c05f767d747fb02f03d1b0fa04ed20e5bc91dfeaca05d2cb9db6d4e91cece40->enter($__internal_0c05f767d747fb02f03d1b0fa04ed20e5bc91dfeaca05d2cb9db6d4e91cece40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c080e0354d962546ab18ee63fd6919e084d8d0921323dc3361fd2f9df88f4702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c080e0354d962546ab18ee63fd6919e084d8d0921323dc3361fd2f9df88f4702->enter($__internal_c080e0354d962546ab18ee63fd6919e084d8d0921323dc3361fd2f9df88f4702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0c05f767d747fb02f03d1b0fa04ed20e5bc91dfeaca05d2cb9db6d4e91cece40->leave($__internal_0c05f767d747fb02f03d1b0fa04ed20e5bc91dfeaca05d2cb9db6d4e91cece40_prof);

        
        $__internal_c080e0354d962546ab18ee63fd6919e084d8d0921323dc3361fd2f9df88f4702->leave($__internal_c080e0354d962546ab18ee63fd6919e084d8d0921323dc3361fd2f9df88f4702_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
