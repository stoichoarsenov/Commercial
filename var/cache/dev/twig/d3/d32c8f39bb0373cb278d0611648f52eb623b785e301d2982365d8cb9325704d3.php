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
        $__internal_a773f50ad9881720192e41b39d1d8731d757058e4ec4a348d35f1e50d446f9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a773f50ad9881720192e41b39d1d8731d757058e4ec4a348d35f1e50d446f9df->enter($__internal_a773f50ad9881720192e41b39d1d8731d757058e4ec4a348d35f1e50d446f9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a3860ca28ff5bcfb4ed90526c9690dca9d41d5627a3c71ed5dce998ce70c5d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3860ca28ff5bcfb4ed90526c9690dca9d41d5627a3c71ed5dce998ce70c5d3f->enter($__internal_a3860ca28ff5bcfb4ed90526c9690dca9d41d5627a3c71ed5dce998ce70c5d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a773f50ad9881720192e41b39d1d8731d757058e4ec4a348d35f1e50d446f9df->leave($__internal_a773f50ad9881720192e41b39d1d8731d757058e4ec4a348d35f1e50d446f9df_prof);

        
        $__internal_a3860ca28ff5bcfb4ed90526c9690dca9d41d5627a3c71ed5dce998ce70c5d3f->leave($__internal_a3860ca28ff5bcfb4ed90526c9690dca9d41d5627a3c71ed5dce998ce70c5d3f_prof);

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
