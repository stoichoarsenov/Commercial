<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3ed7ae334a1756956c5a646f875ecf5717845424d7c1c4e4274820703e364661 extends Twig_Template
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
        $__internal_b5fa6f1ace0027b638b81973181183b03ba1793b67908f41a380130c9dd72fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fa6f1ace0027b638b81973181183b03ba1793b67908f41a380130c9dd72fb6->enter($__internal_b5fa6f1ace0027b638b81973181183b03ba1793b67908f41a380130c9dd72fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_58983ddc453e5e53a9e2c01786fe50a71a3a1660a85b674ac03543af02cdd3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58983ddc453e5e53a9e2c01786fe50a71a3a1660a85b674ac03543af02cdd3e8->enter($__internal_58983ddc453e5e53a9e2c01786fe50a71a3a1660a85b674ac03543af02cdd3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b5fa6f1ace0027b638b81973181183b03ba1793b67908f41a380130c9dd72fb6->leave($__internal_b5fa6f1ace0027b638b81973181183b03ba1793b67908f41a380130c9dd72fb6_prof);

        
        $__internal_58983ddc453e5e53a9e2c01786fe50a71a3a1660a85b674ac03543af02cdd3e8->leave($__internal_58983ddc453e5e53a9e2c01786fe50a71a3a1660a85b674ac03543af02cdd3e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
