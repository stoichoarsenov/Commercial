<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ad5aa21744d5c1cdf8d04256163bf084eb0e2495c07e12cb66d48b5ad701cb44 extends Twig_Template
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
        $__internal_f7e263d958d0e8dccfa15ae68957fe615fb2577d69296379ba7d7d621479c624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e263d958d0e8dccfa15ae68957fe615fb2577d69296379ba7d7d621479c624->enter($__internal_f7e263d958d0e8dccfa15ae68957fe615fb2577d69296379ba7d7d621479c624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e393de0a0e2c404a844a08f66c5c4027bb267a5719711994265c78d35b2ad1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e393de0a0e2c404a844a08f66c5c4027bb267a5719711994265c78d35b2ad1ed->enter($__internal_e393de0a0e2c404a844a08f66c5c4027bb267a5719711994265c78d35b2ad1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f7e263d958d0e8dccfa15ae68957fe615fb2577d69296379ba7d7d621479c624->leave($__internal_f7e263d958d0e8dccfa15ae68957fe615fb2577d69296379ba7d7d621479c624_prof);

        
        $__internal_e393de0a0e2c404a844a08f66c5c4027bb267a5719711994265c78d35b2ad1ed->leave($__internal_e393de0a0e2c404a844a08f66c5c4027bb267a5719711994265c78d35b2ad1ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
