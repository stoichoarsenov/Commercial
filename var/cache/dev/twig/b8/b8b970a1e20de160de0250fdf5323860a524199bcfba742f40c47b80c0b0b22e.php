<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c276bb08d570f642a4e81833a49dd4d3a3c80bf347ea408c42f21b6186bf2e1a extends Twig_Template
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
        $__internal_c696c3f321e782455d534e2e7c340c5c9769cb33e0e5c471f112c89798644094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c696c3f321e782455d534e2e7c340c5c9769cb33e0e5c471f112c89798644094->enter($__internal_c696c3f321e782455d534e2e7c340c5c9769cb33e0e5c471f112c89798644094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_000332df66f1d6dd3fa49f8e91d4bbf5efc120d93fa0f1018ed562b6b9ca7200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000332df66f1d6dd3fa49f8e91d4bbf5efc120d93fa0f1018ed562b6b9ca7200->enter($__internal_000332df66f1d6dd3fa49f8e91d4bbf5efc120d93fa0f1018ed562b6b9ca7200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c696c3f321e782455d534e2e7c340c5c9769cb33e0e5c471f112c89798644094->leave($__internal_c696c3f321e782455d534e2e7c340c5c9769cb33e0e5c471f112c89798644094_prof);

        
        $__internal_000332df66f1d6dd3fa49f8e91d4bbf5efc120d93fa0f1018ed562b6b9ca7200->leave($__internal_000332df66f1d6dd3fa49f8e91d4bbf5efc120d93fa0f1018ed562b6b9ca7200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
