<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_423bcea3589ef400365e2d3afba7051a578f96c7da78e81b8b03ed83a2264785 extends Twig_Template
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
        $__internal_1da4ab99847320815e067bda41edb17de2d1eecb42bc4f2e50201e01d3405356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da4ab99847320815e067bda41edb17de2d1eecb42bc4f2e50201e01d3405356->enter($__internal_1da4ab99847320815e067bda41edb17de2d1eecb42bc4f2e50201e01d3405356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_393d917e92dd2d464f406fa408cc3fed6fc5ef7c5774e6c0dae3f35eb0c5628a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393d917e92dd2d464f406fa408cc3fed6fc5ef7c5774e6c0dae3f35eb0c5628a->enter($__internal_393d917e92dd2d464f406fa408cc3fed6fc5ef7c5774e6c0dae3f35eb0c5628a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_1da4ab99847320815e067bda41edb17de2d1eecb42bc4f2e50201e01d3405356->leave($__internal_1da4ab99847320815e067bda41edb17de2d1eecb42bc4f2e50201e01d3405356_prof);

        
        $__internal_393d917e92dd2d464f406fa408cc3fed6fc5ef7c5774e6c0dae3f35eb0c5628a->leave($__internal_393d917e92dd2d464f406fa408cc3fed6fc5ef7c5774e6c0dae3f35eb0c5628a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
