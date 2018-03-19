<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ca0a4e79305822030802528d70071fbc9d08eaff443c41979268b17c7ba798b extends Twig_Template
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
        $__internal_b1e02a7ea72f5c772c1bd11f83c565dab678a13afcb349432b76dbe7b3bd1af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e02a7ea72f5c772c1bd11f83c565dab678a13afcb349432b76dbe7b3bd1af4->enter($__internal_b1e02a7ea72f5c772c1bd11f83c565dab678a13afcb349432b76dbe7b3bd1af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_db304ed2933d2542e3096c1dbdd2b2dc53ef1d296b0efba7dcf174bad7f55247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db304ed2933d2542e3096c1dbdd2b2dc53ef1d296b0efba7dcf174bad7f55247->enter($__internal_db304ed2933d2542e3096c1dbdd2b2dc53ef1d296b0efba7dcf174bad7f55247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b1e02a7ea72f5c772c1bd11f83c565dab678a13afcb349432b76dbe7b3bd1af4->leave($__internal_b1e02a7ea72f5c772c1bd11f83c565dab678a13afcb349432b76dbe7b3bd1af4_prof);

        
        $__internal_db304ed2933d2542e3096c1dbdd2b2dc53ef1d296b0efba7dcf174bad7f55247->leave($__internal_db304ed2933d2542e3096c1dbdd2b2dc53ef1d296b0efba7dcf174bad7f55247_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
