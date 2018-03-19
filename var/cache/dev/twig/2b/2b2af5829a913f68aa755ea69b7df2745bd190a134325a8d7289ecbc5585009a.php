<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9b06316700fba52bb8c223305e9b5a84cdbeaf2d43dbde225adb50602776dd8f extends Twig_Template
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
        $__internal_59f9f2514b5d32d637b6994ab7abc362cf3ed54a840b8c5a91c9830fbfd28f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f9f2514b5d32d637b6994ab7abc362cf3ed54a840b8c5a91c9830fbfd28f89->enter($__internal_59f9f2514b5d32d637b6994ab7abc362cf3ed54a840b8c5a91c9830fbfd28f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d6f986756c6c55f6bb231e811f6ddbc2db66eba94c7a80159099377e6f1b009f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f986756c6c55f6bb231e811f6ddbc2db66eba94c7a80159099377e6f1b009f->enter($__internal_d6f986756c6c55f6bb231e811f6ddbc2db66eba94c7a80159099377e6f1b009f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_59f9f2514b5d32d637b6994ab7abc362cf3ed54a840b8c5a91c9830fbfd28f89->leave($__internal_59f9f2514b5d32d637b6994ab7abc362cf3ed54a840b8c5a91c9830fbfd28f89_prof);

        
        $__internal_d6f986756c6c55f6bb231e811f6ddbc2db66eba94c7a80159099377e6f1b009f->leave($__internal_d6f986756c6c55f6bb231e811f6ddbc2db66eba94c7a80159099377e6f1b009f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
