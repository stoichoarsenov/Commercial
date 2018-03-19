<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_647befb609b9ca82e7d8a288250095fed32afd505fe9e082189a890e8cb52ef5 extends Twig_Template
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
        $__internal_50525a9f5437d1a62ba354a69797a0631147c75335af08d7b3c21f780d90c60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50525a9f5437d1a62ba354a69797a0631147c75335af08d7b3c21f780d90c60f->enter($__internal_50525a9f5437d1a62ba354a69797a0631147c75335af08d7b3c21f780d90c60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_9b3c4f31aab5486327102b76f9c85e3d16a763d39731e4da0298b232858c7fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3c4f31aab5486327102b76f9c85e3d16a763d39731e4da0298b232858c7fc7->enter($__internal_9b3c4f31aab5486327102b76f9c85e3d16a763d39731e4da0298b232858c7fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "<div class=\"container\" style=\"padding: 80px; padding-bottom: 120px;\">
    ";
        // line 4
        echo "        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                <div class=\"text-center\">
                    <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.sign_up", array(), "FOSUserBundle"), "html", null, true);
        echo "</h3>
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })())) {
            // line 12
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 14
        echo "            </div>
            <div class=\"form-group\">
                <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 17
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
                    ";
        }
        // line 20
        echo "

                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input style=\"float: right; margin-right: 20px; width: 80%\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
                               required=\"required\" />
                    </div>

                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input  style=\"float: right; margin-right: 20px; width: 80%\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                            <div class=\"checkbox\" align=\"center\">
                                <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                <label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            </div>
                        </div>

                        <div class=\"panel-footer\">
                            <div class=\"text-center\">
                                <input class=\"buttonLogin\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                                       value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    ";
        // line 48
        echo "</div>



";
        
        $__internal_50525a9f5437d1a62ba354a69797a0631147c75335af08d7b3c21f780d90c60f->leave($__internal_50525a9f5437d1a62ba354a69797a0631147c75335af08d7b3c21f780d90c60f_prof);

        
        $__internal_9b3c4f31aab5486327102b76f9c85e3d16a763d39731e4da0298b232858c7fc7->leave($__internal_9b3c4f31aab5486327102b76f9c85e3d16a763d39731e4da0298b232858c7fc7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  98 => 40,  88 => 33,  81 => 29,  73 => 24,  69 => 23,  64 => 20,  58 => 18,  56 => 17,  52 => 16,  48 => 14,  42 => 12,  40 => 11,  33 => 7,  28 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"container\" style=\"padding: 80px; padding-bottom: 120px;\">
    {#<div class=\"col-md-4 col-md-offset-4\">#}
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                <div class=\"text-center\">
                    <h3>{{ 'security.login.sign_up'|trans }}</h3>
                </div>
            </div>
            <div class=\"form-group\">
                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
            </div>
            <div class=\"form-group\">
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                    {% endif %}


                    <div class=\"form-group\">
                        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                        <input style=\"float: right; margin-right: 20px; width: 80%\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
                               required=\"required\" />
                    </div>

                        <div class=\"form-group\">
                            <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                            <input  style=\"float: right; margin-right: 20px; width: 80%\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                            <div class=\"checkbox\" align=\"center\">
                                <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                            </div>
                        </div>

                        <div class=\"panel-footer\">
                            <div class=\"text-center\">
                                <input class=\"buttonLogin\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                                       value=\"{{ 'security.login.submit'|trans }}\"/>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    {#</div>#}
</div>



", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
