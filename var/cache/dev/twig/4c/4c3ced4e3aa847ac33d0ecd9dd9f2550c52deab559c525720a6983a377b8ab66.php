<?php

/* ::header.html.twig */
class __TwigTemplate_1ecefab59333169dc3220546b88e1ef5b7a244d9f75e6090b96c3b0a427c5b78 extends Twig_Template
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
        $__internal_1092caaeb3576412b2f5cd76b7f594a66efedf4f7e5206a542a7222d3add9ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1092caaeb3576412b2f5cd76b7f594a66efedf4f7e5206a542a7222d3add9ae1->enter($__internal_1092caaeb3576412b2f5cd76b7f594a66efedf4f7e5206a542a7222d3add9ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        $__internal_08597dab33b00b30aad63dbcd22201e2f81d4942d2927cad0a1e77b4ae91083b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08597dab33b00b30aad63dbcd22201e2f81d4942d2927cad0a1e77b4ae91083b->enter($__internal_08597dab33b00b30aad63dbcd22201e2f81d4942d2927cad0a1e77b4ae91083b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1092caaeb3576412b2f5cd76b7f594a66efedf4f7e5206a542a7222d3add9ae1->leave($__internal_1092caaeb3576412b2f5cd76b7f594a66efedf4f7e5206a542a7222d3add9ae1_prof);

        
        $__internal_08597dab33b00b30aad63dbcd22201e2f81d4942d2927cad0a1e77b4ae91083b->leave($__internal_08597dab33b00b30aad63dbcd22201e2f81d4942d2927cad0a1e77b4ae91083b_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_463f5472c6f06fcab005f1e6dda2855a8d145d410b66605e5793f4adefb56092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463f5472c6f06fcab005f1e6dda2855a8d145d410b66605e5793f4adefb56092->enter($__internal_463f5472c6f06fcab005f1e6dda2855a8d145d410b66605e5793f4adefb56092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ca0338ba234d19f361c386a1e3b0090583c2d6f84c0b3d7c2fea3f0f65358d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0338ba234d19f361c386a1e3b0090583c2d6f84c0b3d7c2fea3f0f65358d5e->enter($__internal_ca0338ba234d19f361c386a1e3b0090583c2d6f84c0b3d7c2fea3f0f65358d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
            echo "                        <li class=\"active\"><a href=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.home", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    ";
        } else {
            // line 23
            echo "                        <li><a href=\"/\">";
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
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "                        ";
            if (twig_in_filter("newProduct", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method"))) {
                // line 38
                echo "                            <li class=\"active\">
                                <a href=\"\" data-toggle=\"dropdown\">Product</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=";
                // line 41
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newProduct");
                echo ">New Product</a></li>
                                    <li><a href=\"#\">Edit product</a></li>
                                    <li><a href=\"#\">Show product</a></li>
                                </ul>
                            </li>
                        ";
            } else {
                // line 47
                echo "                            <li>
                                <a href=\"\" data-toggle=\"dropdown\">Product</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=";
                // line 50
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newProduct");
                echo ">New Product</a></li>
                                    <li><a href=\"#\">Edit product</a></li>
                                    <li><a href=\"#\">Show product</a></li>
                                </ul>
                            </li>
                        ";
            }
        }
        // line 56
        echo "                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 58
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 59
            echo "                        <li class=\"active\">
                            <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">
                                <span class=\"glyphicon glyphicon-user\"></span> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                <span class=\"glyphicon glyphicon-user\"></span>
                                ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        </li>
                    ";
        } else {
            // line 69
            echo "

                        ";
            // line 71
            if (twig_in_filter("login", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->getSourceContext()); })()), "request", array()), "uri", array()))) {
                // line 72
                echo "                            <li class=\"active\">
                                <a href=\"";
                // line 73
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">
                                    <span class=\"glyphicon glyphicon-log-in\"></span>
                                    ";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            } else {
                // line 79
                echo "                            <li>
                                <a href=\"";
                // line 80
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">
                                    <span class=\"glyphicon glyphicon-log-in\"></span>
                                    ";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 86
            echo "
                        ";
            // line 87
            if (twig_in_filter("register", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->getSourceContext()); })()), "request", array()), "uri", array()))) {
                // line 88
                echo "                            <li class=\"active\">
                                <a href=\"";
                // line 89
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
                echo "\">
                                    <span class=\"glyphicon glyphicon-plus-sign\"></span>
                                    ";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            } else {
                // line 95
                echo "                            <li>
                                <a href=\"";
                // line 96
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
                echo "\">
                                    <span class=\"glyphicon glyphicon-plus-sign\"></span>
                                    ";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 102
            echo "                    ";
        }
        // line 103
        echo "
                </ul>
            </div>
        </div>
    </nav>

";
        
        $__internal_ca0338ba234d19f361c386a1e3b0090583c2d6f84c0b3d7c2fea3f0f65358d5e->leave($__internal_ca0338ba234d19f361c386a1e3b0090583c2d6f84c0b3d7c2fea3f0f65358d5e_prof);

        
        $__internal_463f5472c6f06fcab005f1e6dda2855a8d145d410b66605e5793f4adefb56092->leave($__internal_463f5472c6f06fcab005f1e6dda2855a8d145d410b66605e5793f4adefb56092_prof);

    }

    // line 110
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f3172828d8c19dac6b3ab04596f299723fb6cb09043b380c5052b86f78d2e5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3172828d8c19dac6b3ab04596f299723fb6cb09043b380c5052b86f78d2e5a7->enter($__internal_f3172828d8c19dac6b3ab04596f299723fb6cb09043b380c5052b86f78d2e5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b6028542c27e4d0f1f844d39b0bcbfc86c5cbea91ea9fa1219e2e5c95fc2880f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6028542c27e4d0f1f844d39b0bcbfc86c5cbea91ea9fa1219e2e5c95fc2880f->enter($__internal_b6028542c27e4d0f1f844d39b0bcbfc86c5cbea91ea9fa1219e2e5c95fc2880f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 111
        echo "    <div class=\"footer\">
        <footer class=\"fixed-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-6 footer-col\">
                        <div class=\"logofooter\"> Logo</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
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
                            <p>facebook crack the movie advertisment code:what it means for you
                                <span>August 3,2015</span>
                            </p>
                            <p>facebook crack the movie advertisment code:what it means for you
                                <span>August 3,2015</span>
                            </p>
                            <p>facebook crack the movie advertisment code:what it means for you
                                <span>August 3,2015</span>
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
        
        $__internal_b6028542c27e4d0f1f844d39b0bcbfc86c5cbea91ea9fa1219e2e5c95fc2880f->leave($__internal_b6028542c27e4d0f1f844d39b0bcbfc86c5cbea91ea9fa1219e2e5c95fc2880f_prof);

        
        $__internal_f3172828d8c19dac6b3ab04596f299723fb6cb09043b380c5052b86f78d2e5a7->leave($__internal_f3172828d8c19dac6b3ab04596f299723fb6cb09043b380c5052b86f78d2e5a7_prof);

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
        return array (  276 => 111,  267 => 110,  251 => 103,  248 => 102,  241 => 98,  236 => 96,  233 => 95,  226 => 91,  221 => 89,  218 => 88,  216 => 87,  213 => 86,  206 => 82,  201 => 80,  198 => 79,  191 => 75,  186 => 73,  183 => 72,  181 => 71,  177 => 69,  171 => 66,  166 => 64,  160 => 61,  156 => 60,  153 => 59,  151 => 58,  147 => 56,  137 => 50,  132 => 47,  123 => 41,  118 => 38,  115 => 37,  112 => 36,  109 => 35,  102 => 32,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  80 => 23,  74 => 21,  72 => 20,  56 => 6,  54 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
                    {% if is_granted(\"ROLE_ADMIN\") %}
                        {% if 'newProduct' in app.request.get('_route') %}
                            <li class=\"active\">
                                <a href=\"\" data-toggle=\"dropdown\">Product</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href={{ path('newProduct') }}>New Product</a></li>
                                    <li><a href=\"#\">Edit product</a></li>
                                    <li><a href=\"#\">Show product</a></li>
                                </ul>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"\" data-toggle=\"dropdown\">Product</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href={{ path('newProduct') }}>New Product</a></li>
                                    <li><a href=\"#\">Edit product</a></li>
                                    <li><a href=\"#\">Show product</a></li>
                                </ul>
                            </li>
                        {% endif %}{% endif %}
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
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
                            <p>facebook crack the movie advertisment code:what it means for you
                                <span>August 3,2015</span>
                            </p>
                            <p>facebook crack the movie advertisment code:what it means for you
                                <span>August 3,2015</span>
                            </p>
                            <p>facebook crack the movie advertisment code:what it means for you
                                <span>August 3,2015</span>
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
