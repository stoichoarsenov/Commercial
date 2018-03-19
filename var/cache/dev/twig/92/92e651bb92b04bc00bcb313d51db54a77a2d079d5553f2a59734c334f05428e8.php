<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4554c4fa45c0698c65857409949693957f317f8a63d025f96e1dc92e12f37d5f extends Twig_Template
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
        $__internal_aaaf5c526ede8828858beebb7d466789e6496acfe4f2ba2ff93348f8d6ac4fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaaf5c526ede8828858beebb7d466789e6496acfe4f2ba2ff93348f8d6ac4fb2->enter($__internal_aaaf5c526ede8828858beebb7d466789e6496acfe4f2ba2ff93348f8d6ac4fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f61c1a2853f897a84d5d56ed43cc3db9879d49197e2cef34a2bb2439f72e4086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61c1a2853f897a84d5d56ed43cc3db9879d49197e2cef34a2bb2439f72e4086->enter($__internal_f61c1a2853f897a84d5d56ed43cc3db9879d49197e2cef34a2bb2439f72e4086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_aaaf5c526ede8828858beebb7d466789e6496acfe4f2ba2ff93348f8d6ac4fb2->leave($__internal_aaaf5c526ede8828858beebb7d466789e6496acfe4f2ba2ff93348f8d6ac4fb2_prof);

        
        $__internal_f61c1a2853f897a84d5d56ed43cc3db9879d49197e2cef34a2bb2439f72e4086->leave($__internal_f61c1a2853f897a84d5d56ed43cc3db9879d49197e2cef34a2bb2439f72e4086_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
