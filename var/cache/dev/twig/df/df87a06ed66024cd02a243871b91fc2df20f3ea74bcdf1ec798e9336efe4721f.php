<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_71fd11aef30a5e5b943e76397b5500416261ac2be31bae136c6a13e139a7017e extends Twig_Template
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
        $__internal_8f7e0b6d0c495f95c031a635c9811df4bf0f3af139d38359243849bfa22bae43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7e0b6d0c495f95c031a635c9811df4bf0f3af139d38359243849bfa22bae43->enter($__internal_8f7e0b6d0c495f95c031a635c9811df4bf0f3af139d38359243849bfa22bae43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_17267081745f2db0fd7756757fa3783128a2967f352af40c054e6c51a79697f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17267081745f2db0fd7756757fa3783128a2967f352af40c054e6c51a79697f2->enter($__internal_17267081745f2db0fd7756757fa3783128a2967f352af40c054e6c51a79697f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8f7e0b6d0c495f95c031a635c9811df4bf0f3af139d38359243849bfa22bae43->leave($__internal_8f7e0b6d0c495f95c031a635c9811df4bf0f3af139d38359243849bfa22bae43_prof);

        
        $__internal_17267081745f2db0fd7756757fa3783128a2967f352af40c054e6c51a79697f2->leave($__internal_17267081745f2db0fd7756757fa3783128a2967f352af40c054e6c51a79697f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
