<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6b6b1e65d1b4935e4697121662e73f0a2ab209b07d5b5e7dd19a098b03e629f2 extends Twig_Template
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
        $__internal_6c46db476f9f1c61b665c3dbdc1e8b3059c6f35a20ca65e7df32cbd6b6f79fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c46db476f9f1c61b665c3dbdc1e8b3059c6f35a20ca65e7df32cbd6b6f79fee->enter($__internal_6c46db476f9f1c61b665c3dbdc1e8b3059c6f35a20ca65e7df32cbd6b6f79fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b332e185d933a1221d6d183b4e95b9eb1b86d014cbe9ed759443011ef912f595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b332e185d933a1221d6d183b4e95b9eb1b86d014cbe9ed759443011ef912f595->enter($__internal_b332e185d933a1221d6d183b4e95b9eb1b86d014cbe9ed759443011ef912f595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6c46db476f9f1c61b665c3dbdc1e8b3059c6f35a20ca65e7df32cbd6b6f79fee->leave($__internal_6c46db476f9f1c61b665c3dbdc1e8b3059c6f35a20ca65e7df32cbd6b6f79fee_prof);

        
        $__internal_b332e185d933a1221d6d183b4e95b9eb1b86d014cbe9ed759443011ef912f595->leave($__internal_b332e185d933a1221d6d183b4e95b9eb1b86d014cbe9ed759443011ef912f595_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
