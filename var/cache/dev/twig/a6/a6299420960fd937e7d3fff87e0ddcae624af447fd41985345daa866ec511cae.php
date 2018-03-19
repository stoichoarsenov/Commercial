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
        $__internal_8965047e27a736528a9477339b883e8722009ea265d73c5184c46f62a4caa471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8965047e27a736528a9477339b883e8722009ea265d73c5184c46f62a4caa471->enter($__internal_8965047e27a736528a9477339b883e8722009ea265d73c5184c46f62a4caa471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_107982ac4f7e99eb9bfeab56eca799aee2afea5821a966371a3bbc518c60571a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107982ac4f7e99eb9bfeab56eca799aee2afea5821a966371a3bbc518c60571a->enter($__internal_107982ac4f7e99eb9bfeab56eca799aee2afea5821a966371a3bbc518c60571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8965047e27a736528a9477339b883e8722009ea265d73c5184c46f62a4caa471->leave($__internal_8965047e27a736528a9477339b883e8722009ea265d73c5184c46f62a4caa471_prof);

        
        $__internal_107982ac4f7e99eb9bfeab56eca799aee2afea5821a966371a3bbc518c60571a->leave($__internal_107982ac4f7e99eb9bfeab56eca799aee2afea5821a966371a3bbc518c60571a_prof);

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
