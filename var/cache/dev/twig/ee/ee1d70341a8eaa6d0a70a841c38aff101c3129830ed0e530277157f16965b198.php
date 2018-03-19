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
        $__internal_4bf2f3341afa780bb223f007cfd1c2c6bb60bfdf8a19164b7155575ac710bfc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf2f3341afa780bb223f007cfd1c2c6bb60bfdf8a19164b7155575ac710bfc5->enter($__internal_4bf2f3341afa780bb223f007cfd1c2c6bb60bfdf8a19164b7155575ac710bfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_dd905a641701fdc43ea418e8c2eb0d14e53385b9e0eb1ea1b0eb5be0321958b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd905a641701fdc43ea418e8c2eb0d14e53385b9e0eb1ea1b0eb5be0321958b5->enter($__internal_dd905a641701fdc43ea418e8c2eb0d14e53385b9e0eb1ea1b0eb5be0321958b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4bf2f3341afa780bb223f007cfd1c2c6bb60bfdf8a19164b7155575ac710bfc5->leave($__internal_4bf2f3341afa780bb223f007cfd1c2c6bb60bfdf8a19164b7155575ac710bfc5_prof);

        
        $__internal_dd905a641701fdc43ea418e8c2eb0d14e53385b9e0eb1ea1b0eb5be0321958b5->leave($__internal_dd905a641701fdc43ea418e8c2eb0d14e53385b9e0eb1ea1b0eb5be0321958b5_prof);

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
