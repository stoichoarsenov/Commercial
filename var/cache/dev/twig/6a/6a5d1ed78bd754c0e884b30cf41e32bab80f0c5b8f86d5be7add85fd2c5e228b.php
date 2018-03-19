<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bf525c5162edb3ad5523f2e03e6664bd231cf47cceebd2274d338b8b479cc909 extends Twig_Template
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
        $__internal_6cdd05d4f5668d43aca2660ed54be38681e1d5cfcc3db55c45c4989d15635dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdd05d4f5668d43aca2660ed54be38681e1d5cfcc3db55c45c4989d15635dab->enter($__internal_6cdd05d4f5668d43aca2660ed54be38681e1d5cfcc3db55c45c4989d15635dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_7c9433d6876a75da376caa06b35b7011fce58a4ee9563e24954e5dfa829a570d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9433d6876a75da376caa06b35b7011fce58a4ee9563e24954e5dfa829a570d->enter($__internal_7c9433d6876a75da376caa06b35b7011fce58a4ee9563e24954e5dfa829a570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6cdd05d4f5668d43aca2660ed54be38681e1d5cfcc3db55c45c4989d15635dab->leave($__internal_6cdd05d4f5668d43aca2660ed54be38681e1d5cfcc3db55c45c4989d15635dab_prof);

        
        $__internal_7c9433d6876a75da376caa06b35b7011fce58a4ee9563e24954e5dfa829a570d->leave($__internal_7c9433d6876a75da376caa06b35b7011fce58a4ee9563e24954e5dfa829a570d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
