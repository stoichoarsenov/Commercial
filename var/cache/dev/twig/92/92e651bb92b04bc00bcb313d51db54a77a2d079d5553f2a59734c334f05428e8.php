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
        $__internal_a4a7863f7190badde9818e8212267240024f0c5750a7fc8c2580bcabe77bbca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a7863f7190badde9818e8212267240024f0c5750a7fc8c2580bcabe77bbca7->enter($__internal_a4a7863f7190badde9818e8212267240024f0c5750a7fc8c2580bcabe77bbca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c9ea036d99d4f9a49f422616dec35283794044bc7c0e97a72b4622c9ebdf8a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ea036d99d4f9a49f422616dec35283794044bc7c0e97a72b4622c9ebdf8a7b->enter($__internal_c9ea036d99d4f9a49f422616dec35283794044bc7c0e97a72b4622c9ebdf8a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a4a7863f7190badde9818e8212267240024f0c5750a7fc8c2580bcabe77bbca7->leave($__internal_a4a7863f7190badde9818e8212267240024f0c5750a7fc8c2580bcabe77bbca7_prof);

        
        $__internal_c9ea036d99d4f9a49f422616dec35283794044bc7c0e97a72b4622c9ebdf8a7b->leave($__internal_c9ea036d99d4f9a49f422616dec35283794044bc7c0e97a72b4622c9ebdf8a7b_prof);

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
