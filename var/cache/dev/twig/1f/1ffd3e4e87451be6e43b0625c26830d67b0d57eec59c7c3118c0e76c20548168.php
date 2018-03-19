<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_1da17542b57ed7cc1eb83e9641adaec9d0e1ae8a25aa7a25fafbd54fbcc67a91 extends Twig_Template
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
        $__internal_ac90d2fc351890e6f322c24844495aa0a56d967c8a02a7302f83bb0af4f36319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac90d2fc351890e6f322c24844495aa0a56d967c8a02a7302f83bb0af4f36319->enter($__internal_ac90d2fc351890e6f322c24844495aa0a56d967c8a02a7302f83bb0af4f36319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_368a1b3a1fc2b99cf5e0f2b7845061f17754141574b164151c5b4546dca59cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368a1b3a1fc2b99cf5e0f2b7845061f17754141574b164151c5b4546dca59cce->enter($__internal_368a1b3a1fc2b99cf5e0f2b7845061f17754141574b164151c5b4546dca59cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ac90d2fc351890e6f322c24844495aa0a56d967c8a02a7302f83bb0af4f36319->leave($__internal_ac90d2fc351890e6f322c24844495aa0a56d967c8a02a7302f83bb0af4f36319_prof);

        
        $__internal_368a1b3a1fc2b99cf5e0f2b7845061f17754141574b164151c5b4546dca59cce->leave($__internal_368a1b3a1fc2b99cf5e0f2b7845061f17754141574b164151c5b4546dca59cce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
