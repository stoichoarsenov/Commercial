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
        $__internal_78ba405cbaa6095df9006d659cad2df67b76cc9dbb60a619b0e8d93c55127c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ba405cbaa6095df9006d659cad2df67b76cc9dbb60a619b0e8d93c55127c9b->enter($__internal_78ba405cbaa6095df9006d659cad2df67b76cc9dbb60a619b0e8d93c55127c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_35b332a1f5f512bcd1c92c0de7ae905e7a3ca290f2c1db64233b3932d23d76ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b332a1f5f512bcd1c92c0de7ae905e7a3ca290f2c1db64233b3932d23d76ff->enter($__internal_35b332a1f5f512bcd1c92c0de7ae905e7a3ca290f2c1db64233b3932d23d76ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_78ba405cbaa6095df9006d659cad2df67b76cc9dbb60a619b0e8d93c55127c9b->leave($__internal_78ba405cbaa6095df9006d659cad2df67b76cc9dbb60a619b0e8d93c55127c9b_prof);

        
        $__internal_35b332a1f5f512bcd1c92c0de7ae905e7a3ca290f2c1db64233b3932d23d76ff->leave($__internal_35b332a1f5f512bcd1c92c0de7ae905e7a3ca290f2c1db64233b3932d23d76ff_prof);

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
