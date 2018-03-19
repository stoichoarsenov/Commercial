<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_523cf969842af601d4fc409af0f5ba343e02e4352b1bcd1b0f4e91e1e0cde034 extends Twig_Template
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
        $__internal_df1e8158e473b76369c5405a7516571d5215d81e6b7d163ba7511c8d2726a307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1e8158e473b76369c5405a7516571d5215d81e6b7d163ba7511c8d2726a307->enter($__internal_df1e8158e473b76369c5405a7516571d5215d81e6b7d163ba7511c8d2726a307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_21b91b5b5cc2ece9a9ccc8e110bcbfcf8dba9bce5d119534cba8c5c27f2ea06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b91b5b5cc2ece9a9ccc8e110bcbfcf8dba9bce5d119534cba8c5c27f2ea06b->enter($__internal_21b91b5b5cc2ece9a9ccc8e110bcbfcf8dba9bce5d119534cba8c5c27f2ea06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_df1e8158e473b76369c5405a7516571d5215d81e6b7d163ba7511c8d2726a307->leave($__internal_df1e8158e473b76369c5405a7516571d5215d81e6b7d163ba7511c8d2726a307_prof);

        
        $__internal_21b91b5b5cc2ece9a9ccc8e110bcbfcf8dba9bce5d119534cba8c5c27f2ea06b->leave($__internal_21b91b5b5cc2ece9a9ccc8e110bcbfcf8dba9bce5d119534cba8c5c27f2ea06b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
