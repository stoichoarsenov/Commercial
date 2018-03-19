<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_78bdd51d739c96eac0db3b30c2b998ff02b755326f10de30ace2c989d4ca14d5 extends Twig_Template
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
        $__internal_b975c39e66a3f2520438f4c8878522f5e349eba3785db589b93ceb585b03d58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b975c39e66a3f2520438f4c8878522f5e349eba3785db589b93ceb585b03d58d->enter($__internal_b975c39e66a3f2520438f4c8878522f5e349eba3785db589b93ceb585b03d58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5e43c246a8eec4a6b7ee15ec4e79779a4934db95b0a02c24a95025a6e46f76d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e43c246a8eec4a6b7ee15ec4e79779a4934db95b0a02c24a95025a6e46f76d6->enter($__internal_5e43c246a8eec4a6b7ee15ec4e79779a4934db95b0a02c24a95025a6e46f76d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b975c39e66a3f2520438f4c8878522f5e349eba3785db589b93ceb585b03d58d->leave($__internal_b975c39e66a3f2520438f4c8878522f5e349eba3785db589b93ceb585b03d58d_prof);

        
        $__internal_5e43c246a8eec4a6b7ee15ec4e79779a4934db95b0a02c24a95025a6e46f76d6->leave($__internal_5e43c246a8eec4a6b7ee15ec4e79779a4934db95b0a02c24a95025a6e46f76d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
