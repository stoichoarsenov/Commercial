<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1c2f988b462bfa0417485dcc8f813075a28c14e71149817c686f019d6e93194d extends Twig_Template
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
        $__internal_00913c204948b87200497016c55eb4a6f106da74239ed63445eaf49ac63a123e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00913c204948b87200497016c55eb4a6f106da74239ed63445eaf49ac63a123e->enter($__internal_00913c204948b87200497016c55eb4a6f106da74239ed63445eaf49ac63a123e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2c705e6cedf326603590e1d483d332d522d3fb1da48d91bdca726ab990d4034c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c705e6cedf326603590e1d483d332d522d3fb1da48d91bdca726ab990d4034c->enter($__internal_2c705e6cedf326603590e1d483d332d522d3fb1da48d91bdca726ab990d4034c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_00913c204948b87200497016c55eb4a6f106da74239ed63445eaf49ac63a123e->leave($__internal_00913c204948b87200497016c55eb4a6f106da74239ed63445eaf49ac63a123e_prof);

        
        $__internal_2c705e6cedf326603590e1d483d332d522d3fb1da48d91bdca726ab990d4034c->leave($__internal_2c705e6cedf326603590e1d483d332d522d3fb1da48d91bdca726ab990d4034c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
