<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fe98e0567ef975fa171db7eb60d8bb92db38e7d2d62ab5858ecbdb12657f3685 extends Twig_Template
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
        $__internal_1566b5255b5bf55afb6fe866d4435d2b7e0c46bebebe218c992ebf4332eb54a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1566b5255b5bf55afb6fe866d4435d2b7e0c46bebebe218c992ebf4332eb54a0->enter($__internal_1566b5255b5bf55afb6fe866d4435d2b7e0c46bebebe218c992ebf4332eb54a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d8b08aaa9ba1dd20ccc873e569605ce9ae849e61f82253fbaceebe71535df67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b08aaa9ba1dd20ccc873e569605ce9ae849e61f82253fbaceebe71535df67e->enter($__internal_d8b08aaa9ba1dd20ccc873e569605ce9ae849e61f82253fbaceebe71535df67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1566b5255b5bf55afb6fe866d4435d2b7e0c46bebebe218c992ebf4332eb54a0->leave($__internal_1566b5255b5bf55afb6fe866d4435d2b7e0c46bebebe218c992ebf4332eb54a0_prof);

        
        $__internal_d8b08aaa9ba1dd20ccc873e569605ce9ae849e61f82253fbaceebe71535df67e->leave($__internal_d8b08aaa9ba1dd20ccc873e569605ce9ae849e61f82253fbaceebe71535df67e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
