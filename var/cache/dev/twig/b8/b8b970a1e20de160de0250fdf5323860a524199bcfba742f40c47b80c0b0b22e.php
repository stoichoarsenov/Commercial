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
        $__internal_736b98d541940f63a9dc72f05028e41a51e9f15c3ee8c11a009c0e80ea2f4892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736b98d541940f63a9dc72f05028e41a51e9f15c3ee8c11a009c0e80ea2f4892->enter($__internal_736b98d541940f63a9dc72f05028e41a51e9f15c3ee8c11a009c0e80ea2f4892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0d10cb65b7b4f7e74db33996501e44d42e484eefa3af768468337317c1795177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d10cb65b7b4f7e74db33996501e44d42e484eefa3af768468337317c1795177->enter($__internal_0d10cb65b7b4f7e74db33996501e44d42e484eefa3af768468337317c1795177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_736b98d541940f63a9dc72f05028e41a51e9f15c3ee8c11a009c0e80ea2f4892->leave($__internal_736b98d541940f63a9dc72f05028e41a51e9f15c3ee8c11a009c0e80ea2f4892_prof);

        
        $__internal_0d10cb65b7b4f7e74db33996501e44d42e484eefa3af768468337317c1795177->leave($__internal_0d10cb65b7b4f7e74db33996501e44d42e484eefa3af768468337317c1795177_prof);

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
