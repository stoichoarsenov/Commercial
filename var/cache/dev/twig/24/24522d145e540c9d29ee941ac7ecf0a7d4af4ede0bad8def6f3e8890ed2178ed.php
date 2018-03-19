<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_dcdff94841d64b2ec956cb16b5fe6de6af5a21546b478d7b3f7b43bbc5a126a3 extends Twig_Template
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
        $__internal_e523efcbc1cb05b41f3cd240ae08b461ce90d426a90da01110f15fc35b3b87bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e523efcbc1cb05b41f3cd240ae08b461ce90d426a90da01110f15fc35b3b87bb->enter($__internal_e523efcbc1cb05b41f3cd240ae08b461ce90d426a90da01110f15fc35b3b87bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5f1cb89acd79b4ef851e1e14db7c1eed56e6bf2deca7b471387dcfcd8ca03ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1cb89acd79b4ef851e1e14db7c1eed56e6bf2deca7b471387dcfcd8ca03ff1->enter($__internal_5f1cb89acd79b4ef851e1e14db7c1eed56e6bf2deca7b471387dcfcd8ca03ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e523efcbc1cb05b41f3cd240ae08b461ce90d426a90da01110f15fc35b3b87bb->leave($__internal_e523efcbc1cb05b41f3cd240ae08b461ce90d426a90da01110f15fc35b3b87bb_prof);

        
        $__internal_5f1cb89acd79b4ef851e1e14db7c1eed56e6bf2deca7b471387dcfcd8ca03ff1->leave($__internal_5f1cb89acd79b4ef851e1e14db7c1eed56e6bf2deca7b471387dcfcd8ca03ff1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
