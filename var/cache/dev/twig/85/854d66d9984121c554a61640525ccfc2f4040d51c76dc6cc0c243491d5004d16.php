<?php

/* ::header.html.twig */
class __TwigTemplate_cbba0e3cb9469d69ba56ecdd2d476036eecc5f380448dfd9a097e3a0c34419fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::header.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2da92813b393c9dafdeffe29afa345a6547f8c647bcc53f41eb79d93b6d0bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2da92813b393c9dafdeffe29afa345a6547f8c647bcc53f41eb79d93b6d0bd1->enter($__internal_c2da92813b393c9dafdeffe29afa345a6547f8c647bcc53f41eb79d93b6d0bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        $__internal_53ad107f094f39cbc099a04112e8c6a5d6afaae6ab9549e22a8b8bc08b763000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ad107f094f39cbc099a04112e8c6a5d6afaae6ab9549e22a8b8bc08b763000->enter($__internal_53ad107f094f39cbc099a04112e8c6a5d6afaae6ab9549e22a8b8bc08b763000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2da92813b393c9dafdeffe29afa345a6547f8c647bcc53f41eb79d93b6d0bd1->leave($__internal_c2da92813b393c9dafdeffe29afa345a6547f8c647bcc53f41eb79d93b6d0bd1_prof);

        
        $__internal_53ad107f094f39cbc099a04112e8c6a5d6afaae6ab9549e22a8b8bc08b763000->leave($__internal_53ad107f094f39cbc099a04112e8c6a5d6afaae6ab9549e22a8b8bc08b763000_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_c3d0b55d2cec6ddbb93bc6fc658907b6258b1f7cf051f169f04a7ac69c7e38e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d0b55d2cec6ddbb93bc6fc658907b6258b1f7cf051f169f04a7ac69c7e38e1->enter($__internal_c3d0b55d2cec6ddbb93bc6fc658907b6258b1f7cf051f169f04a7ac69c7e38e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_210f9fc8317ff35c2d15b745467fa2037ae9f8168bee0a51cb213b15e3475ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210f9fc8317ff35c2d15b745467fa2037ae9f8168bee0a51cb213b15e3475ff5->enter($__internal_210f9fc8317ff35c2d15b745467fa2037ae9f8168bee0a51cb213b15e3475ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "
    ";
        // line 4
        $context["currentPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 6
        echo "

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div style=\"padding-left: 15px; padding-right: 15px;\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                <ul class=\"nav navbar-nav\">
                    ";
        // line 20
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new Twig_Error_Runtime('Variable "currentPath" does not exist.', 20, $this->getSourceContext()); })()) == "/")) {
            // line 21
            echo "                    <li class=\"active\"><a href=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.home", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    ";
        } else {
            // line 23
            echo "                    <li><a href=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.home", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    ";
        }
        // line 25
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                        ";
            if (twig_in_filter("admin", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method"))) {
                // line 27
                echo "                            <li class=\"active\">
                                <a href=\"";
                // line 28
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\">
                                    <span class=\"glyphicon glyphicon-wrench\"></span> Admin Panel</a>
                            </li>
                        ";
            } else {
                // line 32
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\">
                                    <span class=\"glyphicon glyphicon-wrench\"></span> Admin Panel</a></li>
                        ";
            }
            // line 35
            echo "                    ";
        }
        // line 36
        echo "                </ul>


                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 41
            echo "                        <li class=\"active\">
                            <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">
                                <span class=\"glyphicon glyphicon-user\"></span> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                <span class=\"glyphicon glyphicon-user\"></span>
                                ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        </li>
                    ";
        } else {
            // line 51
            echo "

                        ";
            // line 53
            if (twig_in_filter("login", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "uri", array()))) {
                // line 54
                echo "                            <li class=\"active\">
                                <a href=\"";
                // line 55
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">
                                    <span class=\"glyphicon glyphicon-log-in\"></span>
                                    ";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            } else {
                // line 61
                echo "                            <li>
                                <a href=\"";
                // line 62
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">
                                    <span class=\"glyphicon glyphicon-log-in\"></span>
                                    ";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 68
            echo "
                        ";
            // line 69
            if (twig_in_filter("register", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 69, $this->getSourceContext()); })()), "request", array()), "uri", array()))) {
                // line 70
                echo "                            <li class=\"active\">
                                <a href=\"";
                // line 71
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
                echo "\">
                                    <span class=\"glyphicon glyphicon-plus-sign\"></span>
                                    ";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            } else {
                // line 77
                echo "                            <li>
                                <a href=\"";
                // line 78
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
                echo "\">
                                    <span class=\"glyphicon glyphicon-plus-sign\"></span>
                                    ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 84
            echo "                    ";
        }
        // line 85
        echo "
                </ul>
            </div>
        </div>
    </nav>

";
        
        $__internal_210f9fc8317ff35c2d15b745467fa2037ae9f8168bee0a51cb213b15e3475ff5->leave($__internal_210f9fc8317ff35c2d15b745467fa2037ae9f8168bee0a51cb213b15e3475ff5_prof);

        
        $__internal_c3d0b55d2cec6ddbb93bc6fc658907b6258b1f7cf051f169f04a7ac69c7e38e1->leave($__internal_c3d0b55d2cec6ddbb93bc6fc658907b6258b1f7cf051f169f04a7ac69c7e38e1_prof);

    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9297318bec02a71ac7f14e20b3e48c255f5db686021900e689be3214f9b436ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9297318bec02a71ac7f14e20b3e48c255f5db686021900e689be3214f9b436ee->enter($__internal_9297318bec02a71ac7f14e20b3e48c255f5db686021900e689be3214f9b436ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_dca09dcc27e1ebc0bef24ba3894fe6eb73abf018f34e1b07761049082307333e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca09dcc27e1ebc0bef24ba3894fe6eb73abf018f34e1b07761049082307333e->enter($__internal_dca09dcc27e1ebc0bef24ba3894fe6eb73abf018f34e1b07761049082307333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 93
        echo "    <div class=\"footer\">
    <footer class=\"fixed-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 footer-col\">
                    <div class=\"logofooter\"> Logo</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley.</p>
                    <p><i class=\"fa fa-map-pin\"></i> #228, Tiruvannamalai, Tamilnadu, India</p>
                    <p><i class=\"fa fa-phone\"></i> Phone (India) : +91 9999 999 999</p>
                    <p><i class=\"fa fa-envelope\"></i> E-mail : info@prabuuideveloper.com</p>

                </div>
                <div class=\"col-md-3 col-sm-6 footer-col\">
                    <h6 class=\"heading7\">GENERAL LINKS</h6>
                    <ul class=\"footer-ul\">
                        <li><a href=\"#\"> Career</a></li>
                        <li><a href=\"#\"> Privacy Policy</a></li>
                        <li><a href=\"#\"> Terms & Conditions</a></li>
                        <li><a href=\"#\"> Client Gateway</a></li>
                        <li><a href=\"#\"> Ranking</a></li>
                        <li><a href=\"#\"> Case Studies</a></li>
                        <li><a href=\"#\"> Frequently Ask Questions</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6 footer-col\">
                    <h6 class=\"heading7\">LATEST POST</h6>
                    <div class=\"post\">
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span>
                        </p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span>
                        </p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span>
                        </p>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 footer-col\">
                    <h6 class=\"heading7\">Social Media</h6>
                    <ul class=\"footer-social\">
                        <li><i class=\"fa fa-linkedin social-icon linked-in\" aria-hidden=\"true\"></i></li>
                        <li><i class=\"fa fa-facebook social-icon facebook\" aria-hidden=\"true\"></i></li>
                        <li><i class=\"fa fa-twitter social-icon twitter\" aria-hidden=\"true\"></i></li>
                        <li><i class=\"fa fa-google-plus social-icon google\" aria-hidden=\"true\"></i></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"col-md-3\">
                    <p>© 2017- All Rights Reserved</p>
                </div>
                <div class=\"col-md-8\">
                    <ul class=\"bottom_ul\">
                        <li><a href=\"#\">prabuuideveloper.com</a></li>
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">Blog</a></li>
                        <li><a href=\"#\">Faq's</a></li>
                        <li><a href=\"#\">Contact us</a></li>
                        <li><a href=\"#\">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!--footer start from here-->

";
        
        $__internal_dca09dcc27e1ebc0bef24ba3894fe6eb73abf018f34e1b07761049082307333e->leave($__internal_dca09dcc27e1ebc0bef24ba3894fe6eb73abf018f34e1b07761049082307333e_prof);

        
        $__internal_9297318bec02a71ac7f14e20b3e48c255f5db686021900e689be3214f9b436ee->leave($__internal_9297318bec02a71ac7f14e20b3e48c255f5db686021900e689be3214f9b436ee_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 93,  234 => 92,  218 => 85,  215 => 84,  208 => 80,  203 => 78,  200 => 77,  193 => 73,  188 => 71,  185 => 70,  183 => 69,  180 => 68,  173 => 64,  168 => 62,  165 => 61,  158 => 57,  153 => 55,  150 => 54,  148 => 53,  144 => 51,  138 => 48,  133 => 46,  127 => 43,  123 => 42,  120 => 41,  118 => 40,  112 => 36,  109 => 35,  102 => 32,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  80 => 23,  74 => 21,  72 => 20,  56 => 6,  54 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block header %}

    {% set currentPath = path(app.request.attributes.get('_route'),
    app.request.attributes.get('_route_params')) %}


    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div style=\"padding-left: 15px; padding-right: 15px;\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                <ul class=\"nav navbar-nav\">
                    {% if currentPath == '/' %}
                    <li class=\"active\"><a href=\"/\">{{ \"layout.home\"| trans({}, 'FOSUserBundle') }}</a></li>
                    {% else %}
                    <li><a href=\"/\">{{ \"layout.home\"| trans({}, 'FOSUserBundle') }}</a></li>
                    {% endif %}
                    {% if is_granted(\"ROLE_ADMIN\") %}
                        {% if 'admin' in app.request.get('_route') %}
                            <li class=\"active\">
                                <a href=\"{{ path('admin') }}\">
                                    <span class=\"glyphicon glyphicon-wrench\"></span> Admin Panel</a>
                            </li>
                        {% else %}
                            <li><a href=\"{{ path('admin') }}\">
                                    <span class=\"glyphicon glyphicon-wrench\"></span> Admin Panel</a></li>
                        {% endif %}
                    {% endif %}
                </ul>


                <ul class=\"nav navbar-nav navbar-right\">
                    {% if is_granted(\"ROLE_USER\") %}
                        <li class=\"active\">
                            <a href=\"{{ path('fos_user_profile_show') }}\">
                                <span class=\"glyphicon glyphicon-user\"></span> {{ app.user.username }}</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                <span class=\"glyphicon glyphicon-user\"></span>
                                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>
                        </li>
                    {% else %}


                        {% if 'login' in app.request.uri %}
                            <li class=\"active\">
                                <a href=\"{{ path('fos_user_security_login') }}\">
                                    <span class=\"glyphicon glyphicon-log-in\"></span>
                                    {{ 'layout.login'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('fos_user_security_login') }}\">
                                    <span class=\"glyphicon glyphicon-log-in\"></span>
                                    {{ 'layout.login'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                        {% endif %}

                        {% if 'register' in app.request.uri %}
                            <li class=\"active\">
                                <a href=\"{{ path('fos_user_registration_register') }}\">
                                    <span class=\"glyphicon glyphicon-plus-sign\"></span>
                                    {{ 'layout.register'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('fos_user_registration_register') }}\">
                                    <span class=\"glyphicon glyphicon-plus-sign\"></span>
                                    {{ 'layout.register'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                        {% endif %}
                    {% endif %}

                </ul>
            </div>
        </div>
    </nav>

{% endblock %}
{% block footer %}
    <div class=\"footer\">
    <footer class=\"fixed-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 footer-col\">
                    <div class=\"logofooter\"> Logo</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley.</p>
                    <p><i class=\"fa fa-map-pin\"></i> #228, Tiruvannamalai, Tamilnadu, India</p>
                    <p><i class=\"fa fa-phone\"></i> Phone (India) : +91 9999 999 999</p>
                    <p><i class=\"fa fa-envelope\"></i> E-mail : info@prabuuideveloper.com</p>

                </div>
                <div class=\"col-md-3 col-sm-6 footer-col\">
                    <h6 class=\"heading7\">GENERAL LINKS</h6>
                    <ul class=\"footer-ul\">
                        <li><a href=\"#\"> Career</a></li>
                        <li><a href=\"#\"> Privacy Policy</a></li>
                        <li><a href=\"#\"> Terms & Conditions</a></li>
                        <li><a href=\"#\"> Client Gateway</a></li>
                        <li><a href=\"#\"> Ranking</a></li>
                        <li><a href=\"#\"> Case Studies</a></li>
                        <li><a href=\"#\"> Frequently Ask Questions</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6 footer-col\">
                    <h6 class=\"heading7\">LATEST POST</h6>
                    <div class=\"post\">
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span>
                        </p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span>
                        </p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span>
                        </p>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 footer-col\">
                    <h6 class=\"heading7\">Social Media</h6>
                    <ul class=\"footer-social\">
                        <li><i class=\"fa fa-linkedin social-icon linked-in\" aria-hidden=\"true\"></i></li>
                        <li><i class=\"fa fa-facebook social-icon facebook\" aria-hidden=\"true\"></i></li>
                        <li><i class=\"fa fa-twitter social-icon twitter\" aria-hidden=\"true\"></i></li>
                        <li><i class=\"fa fa-google-plus social-icon google\" aria-hidden=\"true\"></i></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"col-md-3\">
                    <p>© 2017- All Rights Reserved</p>
                </div>
                <div class=\"col-md-8\">
                    <ul class=\"bottom_ul\">
                        <li><a href=\"#\">prabuuideveloper.com</a></li>
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">Blog</a></li>
                        <li><a href=\"#\">Faq's</a></li>
                        <li><a href=\"#\">Contact us</a></li>
                        <li><a href=\"#\">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!--footer start from here-->

{% endblock %}", "::header.html.twig", "/var/www/html/Commercial/app/Resources/views/header.html.twig");
    }
}
