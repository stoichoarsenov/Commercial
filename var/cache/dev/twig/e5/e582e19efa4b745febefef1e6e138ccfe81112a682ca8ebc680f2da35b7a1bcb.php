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
        $__internal_2f430964c616a8d70a1ca0409688d8670de93f0bd459bbcf1634c7c0366f68e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f430964c616a8d70a1ca0409688d8670de93f0bd459bbcf1634c7c0366f68e0->enter($__internal_2f430964c616a8d70a1ca0409688d8670de93f0bd459bbcf1634c7c0366f68e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4e1c058488561c48caa0f889cbd9e969847a6687f8f53fb529df9b76641179fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1c058488561c48caa0f889cbd9e969847a6687f8f53fb529df9b76641179fe->enter($__internal_4e1c058488561c48caa0f889cbd9e969847a6687f8f53fb529df9b76641179fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2f430964c616a8d70a1ca0409688d8670de93f0bd459bbcf1634c7c0366f68e0->leave($__internal_2f430964c616a8d70a1ca0409688d8670de93f0bd459bbcf1634c7c0366f68e0_prof);

        
        $__internal_4e1c058488561c48caa0f889cbd9e969847a6687f8f53fb529df9b76641179fe->leave($__internal_4e1c058488561c48caa0f889cbd9e969847a6687f8f53fb529df9b76641179fe_prof);

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
