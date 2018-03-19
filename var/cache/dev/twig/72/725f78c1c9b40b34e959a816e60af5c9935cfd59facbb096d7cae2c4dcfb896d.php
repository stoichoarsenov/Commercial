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
        $__internal_3bed9c4e84286b6c7c473b9a3fd8dfd4db3c8ccbcae8406e9c34797fc9f5b07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bed9c4e84286b6c7c473b9a3fd8dfd4db3c8ccbcae8406e9c34797fc9f5b07e->enter($__internal_3bed9c4e84286b6c7c473b9a3fd8dfd4db3c8ccbcae8406e9c34797fc9f5b07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_08765a48b9f5b4bf60016bf426dcab80526a340cba04c60f30fbf8a451e50ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08765a48b9f5b4bf60016bf426dcab80526a340cba04c60f30fbf8a451e50ca1->enter($__internal_08765a48b9f5b4bf60016bf426dcab80526a340cba04c60f30fbf8a451e50ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_3bed9c4e84286b6c7c473b9a3fd8dfd4db3c8ccbcae8406e9c34797fc9f5b07e->leave($__internal_3bed9c4e84286b6c7c473b9a3fd8dfd4db3c8ccbcae8406e9c34797fc9f5b07e_prof);

        
        $__internal_08765a48b9f5b4bf60016bf426dcab80526a340cba04c60f30fbf8a451e50ca1->leave($__internal_08765a48b9f5b4bf60016bf426dcab80526a340cba04c60f30fbf8a451e50ca1_prof);

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
