<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1c4ec9e959045115e597935c373536368eeb9c5cf7cd7a5549ad9a15376b6dad extends Twig_Template
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
        $__internal_863a8de93d6f759e4037a0eabe82c447064b4a08fc747bc0fc28ada1ce1cbc29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863a8de93d6f759e4037a0eabe82c447064b4a08fc747bc0fc28ada1ce1cbc29->enter($__internal_863a8de93d6f759e4037a0eabe82c447064b4a08fc747bc0fc28ada1ce1cbc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_49238ee6d067e49da4187eb4008c6f20be87e649f13aa05a52d9edf42f6824bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49238ee6d067e49da4187eb4008c6f20be87e649f13aa05a52d9edf42f6824bf->enter($__internal_49238ee6d067e49da4187eb4008c6f20be87e649f13aa05a52d9edf42f6824bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_863a8de93d6f759e4037a0eabe82c447064b4a08fc747bc0fc28ada1ce1cbc29->leave($__internal_863a8de93d6f759e4037a0eabe82c447064b4a08fc747bc0fc28ada1ce1cbc29_prof);

        
        $__internal_49238ee6d067e49da4187eb4008c6f20be87e649f13aa05a52d9edf42f6824bf->leave($__internal_49238ee6d067e49da4187eb4008c6f20be87e649f13aa05a52d9edf42f6824bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
