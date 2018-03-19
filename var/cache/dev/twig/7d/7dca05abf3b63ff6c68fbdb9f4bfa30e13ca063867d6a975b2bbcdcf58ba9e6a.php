<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6b6b1e65d1b4935e4697121662e73f0a2ab209b07d5b5e7dd19a098b03e629f2 extends Twig_Template
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
        $__internal_a525884f3afa0ded6812c5d99961e3a85ff3f072018c70410ecd45742ae6eb55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a525884f3afa0ded6812c5d99961e3a85ff3f072018c70410ecd45742ae6eb55->enter($__internal_a525884f3afa0ded6812c5d99961e3a85ff3f072018c70410ecd45742ae6eb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c936752a17218173d7d42f61f30d079a87ab187d21ffcd765ec7bd9e20280292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c936752a17218173d7d42f61f30d079a87ab187d21ffcd765ec7bd9e20280292->enter($__internal_c936752a17218173d7d42f61f30d079a87ab187d21ffcd765ec7bd9e20280292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a525884f3afa0ded6812c5d99961e3a85ff3f072018c70410ecd45742ae6eb55->leave($__internal_a525884f3afa0ded6812c5d99961e3a85ff3f072018c70410ecd45742ae6eb55_prof);

        
        $__internal_c936752a17218173d7d42f61f30d079a87ab187d21ffcd765ec7bd9e20280292->leave($__internal_c936752a17218173d7d42f61f30d079a87ab187d21ffcd765ec7bd9e20280292_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
