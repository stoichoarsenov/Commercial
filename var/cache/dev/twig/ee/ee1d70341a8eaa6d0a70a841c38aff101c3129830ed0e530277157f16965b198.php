<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_50c8e35d78210b7338e483787b45f7d4d6250e3294f0a8b52e2bb743ae54680c extends Twig_Template
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
        $__internal_65d0ebdbeae07040eb6180c2cd436d298f8094129fdffa93747787b108cc91ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d0ebdbeae07040eb6180c2cd436d298f8094129fdffa93747787b108cc91ce->enter($__internal_65d0ebdbeae07040eb6180c2cd436d298f8094129fdffa93747787b108cc91ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_743a8972bbd8479cc9db445bb43415fc5388768eb6c1a430613cd798eb7b4566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743a8972bbd8479cc9db445bb43415fc5388768eb6c1a430613cd798eb7b4566->enter($__internal_743a8972bbd8479cc9db445bb43415fc5388768eb6c1a430613cd798eb7b4566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_65d0ebdbeae07040eb6180c2cd436d298f8094129fdffa93747787b108cc91ce->leave($__internal_65d0ebdbeae07040eb6180c2cd436d298f8094129fdffa93747787b108cc91ce_prof);

        
        $__internal_743a8972bbd8479cc9db445bb43415fc5388768eb6c1a430613cd798eb7b4566->leave($__internal_743a8972bbd8479cc9db445bb43415fc5388768eb6c1a430613cd798eb7b4566_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
