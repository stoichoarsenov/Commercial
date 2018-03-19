<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_77ded44bd628797c82fbdf7142ef857d8a919673007f9dff07f0226362164499 extends Twig_Template
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
        $__internal_96d022ec64c2997cba8fdc52878fcb6f4597d4c65a3989cecc78743d7ad352be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d022ec64c2997cba8fdc52878fcb6f4597d4c65a3989cecc78743d7ad352be->enter($__internal_96d022ec64c2997cba8fdc52878fcb6f4597d4c65a3989cecc78743d7ad352be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b9055d10767fb6768cdc894d86e067b36d77fdea9bd8feeeb09678063fd8aee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9055d10767fb6768cdc894d86e067b36d77fdea9bd8feeeb09678063fd8aee0->enter($__internal_b9055d10767fb6768cdc894d86e067b36d77fdea9bd8feeeb09678063fd8aee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_96d022ec64c2997cba8fdc52878fcb6f4597d4c65a3989cecc78743d7ad352be->leave($__internal_96d022ec64c2997cba8fdc52878fcb6f4597d4c65a3989cecc78743d7ad352be_prof);

        
        $__internal_b9055d10767fb6768cdc894d86e067b36d77fdea9bd8feeeb09678063fd8aee0->leave($__internal_b9055d10767fb6768cdc894d86e067b36d77fdea9bd8feeeb09678063fd8aee0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
