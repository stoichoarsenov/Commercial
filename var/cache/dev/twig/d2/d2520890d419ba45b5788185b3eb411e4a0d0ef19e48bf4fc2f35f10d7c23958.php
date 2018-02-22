<?php

/* base.html.twig */
class __TwigTemplate_92abf9560674e40aef1e29658cf924a828b898452d531ce9ea30d4016c742316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ca81a58dafe3c6050c0709104c0dfecca3e6ce481c133cd01649b8953bb5482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca81a58dafe3c6050c0709104c0dfecca3e6ce481c133cd01649b8953bb5482->enter($__internal_5ca81a58dafe3c6050c0709104c0dfecca3e6ce481c133cd01649b8953bb5482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8bce55a562f610d89b466ff83f0f270045f9f4bf262449258316e5e6cd2547d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bce55a562f610d89b466ff83f0f270045f9f4bf262449258316e5e6cd2547d6->enter($__internal_8bce55a562f610d89b466ff83f0f270045f9f4bf262449258316e5e6cd2547d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    <style>

        @import url(https://fonts.googleapis.com/css?family=Lato:300,400);
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);

        html {
            height: 100%;
        }


        body {
            position: relative;
            margin: 0;
            padding-bottom: 1rem;
            min-height: 100%;
            font-family: \"Helvetica Neue\", Arial, sans-serif;
        }


        footer {
            background-color:#0c1a1e;
            min-height:350px;
            font-family: 'Open Sans', sans-serif;
            position: absolute;
            right: 0;
            /*bottom: 0;*/
            left: 0;
            margin-top: 15rem; /* space between content and footer */
            /*padding: 1rem;*/
            text-align: center;
        }



        .buttonLogin {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        @media screen and (max-width: 699px) {
            .checkbox {
                margin-top: 15%;
            }
        }

        .copyright {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
        }

        fixed-bottom{
            margin-top: 20px; /* space between content and footer */
            padding-top: 20px;
        }

        .footer-col { margin-top:50px; }
        .logofooter { margin-bottom:10px; font-size:25px; color:#fff; font-weight:700;}

        .footer-col p { color:#fff; font-size:12px; font-family: 'Open Sans', sans-serif; margin-bottom:15px;}
        .footer-col p i { width:20px; color:#999;}

        .footer-ul { list-style-type:none;  padding-left:0; margin-left:2px;}
        .footer-ul li { line-height:29px; font-size:12px;}
        .footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
        .footer-ul i { margin-right:10px;}
        .footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }

        .copyright { min-height:40px; background-color:#000000;}
        .copyright p { text-align:left; color:#FFF; padding:10px 0; margin-bottom:0;}
        .heading7 { font-size:21px; font-weight:700; color:#d9d6d6; margin-bottom:22px;}
        .post p { font-size:12px; color:#FFF; line-height:20px;}
        .post p span { display:block; color:#8f8f8f;}
        .bottom_ul { list-style-type:none; float:right; margin-bottom:0;}
        .bottom_ul li { float:left; line-height:40px;}
        .bottom_ul li:after { content:\"/\"; color:#FFF; margin-right:8px; margin-left:8px;}
        .bottom_ul li a { color:#FFF;  font-size:12px;}
        .social-icon {
            width: 30px;
            height: 30px;
            font-size: 15px;
            background-color: blue;
            color: #fff;
            text-align: center;
            margin-right: 10px;
            padding-top: 7px;
            border-radius: 50%;
        }
        .footer-social {
            list-style-type: none;
        }
        .footer-social li{
            float: left;
        }
        .linked-in{
            background-color:#007bb6;
        }
        .facebook{
            background-color:#3b5998;
        }
        .twitter{
            background-color:#1da1f2;
        }
        .google{
            background-color:#f63e28;
        }



    </style>


    <title>";
        // line 131
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 132
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 135
        echo "

</head>
<body>
";
        // line 139
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('body', $context, $blocks);
        // line 154
        echo "
</body>
</html>
";
        
        $__internal_5ca81a58dafe3c6050c0709104c0dfecca3e6ce481c133cd01649b8953bb5482->leave($__internal_5ca81a58dafe3c6050c0709104c0dfecca3e6ce481c133cd01649b8953bb5482_prof);

        
        $__internal_8bce55a562f610d89b466ff83f0f270045f9f4bf262449258316e5e6cd2547d6->leave($__internal_8bce55a562f610d89b466ff83f0f270045f9f4bf262449258316e5e6cd2547d6_prof);

    }

    // line 131
    public function block_title($context, array $blocks = array())
    {
        $__internal_6afa9093b9f825b5bb98dd9b1b44683d453a43f6b99a8474341a83589be0094d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afa9093b9f825b5bb98dd9b1b44683d453a43f6b99a8474341a83589be0094d->enter($__internal_6afa9093b9f825b5bb98dd9b1b44683d453a43f6b99a8474341a83589be0094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6cc074f7733df80c76a8a05803f4568308bc00dc13c8bae43a4195079407fb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc074f7733df80c76a8a05803f4568308bc00dc13c8bae43a4195079407fb53->enter($__internal_6cc074f7733df80c76a8a05803f4568308bc00dc13c8bae43a4195079407fb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6cc074f7733df80c76a8a05803f4568308bc00dc13c8bae43a4195079407fb53->leave($__internal_6cc074f7733df80c76a8a05803f4568308bc00dc13c8bae43a4195079407fb53_prof);

        
        $__internal_6afa9093b9f825b5bb98dd9b1b44683d453a43f6b99a8474341a83589be0094d->leave($__internal_6afa9093b9f825b5bb98dd9b1b44683d453a43f6b99a8474341a83589be0094d_prof);

    }

    // line 132
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6eaa3e5639f36e17f4d99f84401603a017685bbe5604795d4eadf45b7164a187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eaa3e5639f36e17f4d99f84401603a017685bbe5604795d4eadf45b7164a187->enter($__internal_6eaa3e5639f36e17f4d99f84401603a017685bbe5604795d4eadf45b7164a187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9800a462728279fe6b7444a2b507ddd6b3c2598540f603ae3c009012031adf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9800a462728279fe6b7444a2b507ddd6b3c2598540f603ae3c009012031adf82->enter($__internal_9800a462728279fe6b7444a2b507ddd6b3c2598540f603ae3c009012031adf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 133
        echo "
    ";
        
        $__internal_9800a462728279fe6b7444a2b507ddd6b3c2598540f603ae3c009012031adf82->leave($__internal_9800a462728279fe6b7444a2b507ddd6b3c2598540f603ae3c009012031adf82_prof);

        
        $__internal_6eaa3e5639f36e17f4d99f84401603a017685bbe5604795d4eadf45b7164a187->leave($__internal_6eaa3e5639f36e17f4d99f84401603a017685bbe5604795d4eadf45b7164a187_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fb62c787d31cc5d5288208b7fc98173a8aad56688bb716b316388afbc932fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb62c787d31cc5d5288208b7fc98173a8aad56688bb716b316388afbc932fe1->enter($__internal_9fb62c787d31cc5d5288208b7fc98173a8aad56688bb716b316388afbc932fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e31b640edd7f77034b17a52d2dc3f17e8c47699f7441c911e8932ff3bc5d9aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31b640edd7f77034b17a52d2dc3f17e8c47699f7441c911e8932ff3bc5d9aa8->enter($__internal_e31b640edd7f77034b17a52d2dc3f17e8c47699f7441c911e8932ff3bc5d9aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e31b640edd7f77034b17a52d2dc3f17e8c47699f7441c911e8932ff3bc5d9aa8->leave($__internal_e31b640edd7f77034b17a52d2dc3f17e8c47699f7441c911e8932ff3bc5d9aa8_prof);

        
        $__internal_9fb62c787d31cc5d5288208b7fc98173a8aad56688bb716b316388afbc932fe1->leave($__internal_9fb62c787d31cc5d5288208b7fc98173a8aad56688bb716b316388afbc932fe1_prof);

    }

    // line 142
    public function block_body($context, array $blocks = array())
    {
        $__internal_79770e684569fd88c46298feef74e03d7cc522214ab40b152074e8fa286bf897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79770e684569fd88c46298feef74e03d7cc522214ab40b152074e8fa286bf897->enter($__internal_79770e684569fd88c46298feef74e03d7cc522214ab40b152074e8fa286bf897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_474fe2b393a15d8aebd580a665fa1aaac5bfd9c0764c075323dc99cc3f5bf35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474fe2b393a15d8aebd580a665fa1aaac5bfd9c0764c075323dc99cc3f5bf35a->enter($__internal_474fe2b393a15d8aebd580a665fa1aaac5bfd9c0764c075323dc99cc3f5bf35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 143
        echo "
    ";
        // line 144
        $this->displayBlock('header', $context, $blocks);
        // line 146
        echo "
    ";
        // line 147
        $this->displayBlock('content', $context, $blocks);
        // line 149
        echo "
    ";
        // line 150
        $this->displayBlock('footer', $context, $blocks);
        // line 152
        echo "
";
        
        $__internal_474fe2b393a15d8aebd580a665fa1aaac5bfd9c0764c075323dc99cc3f5bf35a->leave($__internal_474fe2b393a15d8aebd580a665fa1aaac5bfd9c0764c075323dc99cc3f5bf35a_prof);

        
        $__internal_79770e684569fd88c46298feef74e03d7cc522214ab40b152074e8fa286bf897->leave($__internal_79770e684569fd88c46298feef74e03d7cc522214ab40b152074e8fa286bf897_prof);

    }

    // line 144
    public function block_header($context, array $blocks = array())
    {
        $__internal_b6da6009f64b5dff834c86c24fdedde3f2092b9897a6fd3435882eeb15fa0531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6da6009f64b5dff834c86c24fdedde3f2092b9897a6fd3435882eeb15fa0531->enter($__internal_b6da6009f64b5dff834c86c24fdedde3f2092b9897a6fd3435882eeb15fa0531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c2760261af02cc51b28b6d47ef594b459841157ff9508e6b56d40e73cf3c4c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2760261af02cc51b28b6d47ef594b459841157ff9508e6b56d40e73cf3c4c62->enter($__internal_c2760261af02cc51b28b6d47ef594b459841157ff9508e6b56d40e73cf3c4c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 145
        echo "    ";
        
        $__internal_c2760261af02cc51b28b6d47ef594b459841157ff9508e6b56d40e73cf3c4c62->leave($__internal_c2760261af02cc51b28b6d47ef594b459841157ff9508e6b56d40e73cf3c4c62_prof);

        
        $__internal_b6da6009f64b5dff834c86c24fdedde3f2092b9897a6fd3435882eeb15fa0531->leave($__internal_b6da6009f64b5dff834c86c24fdedde3f2092b9897a6fd3435882eeb15fa0531_prof);

    }

    // line 147
    public function block_content($context, array $blocks = array())
    {
        $__internal_a8dd3338c91eddf8c7c52bacb71099d9c4a425e95b54f00ee29323082267a6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8dd3338c91eddf8c7c52bacb71099d9c4a425e95b54f00ee29323082267a6e2->enter($__internal_a8dd3338c91eddf8c7c52bacb71099d9c4a425e95b54f00ee29323082267a6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_675670d792983b0fc1d3f4875e4d18cf37f78d2407c2f616252f416056b4c5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675670d792983b0fc1d3f4875e4d18cf37f78d2407c2f616252f416056b4c5c9->enter($__internal_675670d792983b0fc1d3f4875e4d18cf37f78d2407c2f616252f416056b4c5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 148
        echo "    ";
        
        $__internal_675670d792983b0fc1d3f4875e4d18cf37f78d2407c2f616252f416056b4c5c9->leave($__internal_675670d792983b0fc1d3f4875e4d18cf37f78d2407c2f616252f416056b4c5c9_prof);

        
        $__internal_a8dd3338c91eddf8c7c52bacb71099d9c4a425e95b54f00ee29323082267a6e2->leave($__internal_a8dd3338c91eddf8c7c52bacb71099d9c4a425e95b54f00ee29323082267a6e2_prof);

    }

    // line 150
    public function block_footer($context, array $blocks = array())
    {
        $__internal_faf509047cd26718c3c2eb6c91ba76d4d3d82726421d82197ae7bd38999a2060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf509047cd26718c3c2eb6c91ba76d4d3d82726421d82197ae7bd38999a2060->enter($__internal_faf509047cd26718c3c2eb6c91ba76d4d3d82726421d82197ae7bd38999a2060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e1be7adc021b7b175c058624d27dcf5310eebef78351616a7bea3847c31fe905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1be7adc021b7b175c058624d27dcf5310eebef78351616a7bea3847c31fe905->enter($__internal_e1be7adc021b7b175c058624d27dcf5310eebef78351616a7bea3847c31fe905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 151
        echo "    ";
        
        $__internal_e1be7adc021b7b175c058624d27dcf5310eebef78351616a7bea3847c31fe905->leave($__internal_e1be7adc021b7b175c058624d27dcf5310eebef78351616a7bea3847c31fe905_prof);

        
        $__internal_faf509047cd26718c3c2eb6c91ba76d4d3d82726421d82197ae7bd38999a2060->leave($__internal_faf509047cd26718c3c2eb6c91ba76d4d3d82726421d82197ae7bd38999a2060_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  333 => 151,  324 => 150,  314 => 148,  305 => 147,  295 => 145,  286 => 144,  275 => 152,  273 => 150,  270 => 149,  268 => 147,  265 => 146,  263 => 144,  260 => 143,  251 => 142,  234 => 139,  223 => 133,  214 => 132,  196 => 131,  183 => 154,  181 => 142,  178 => 141,  176 => 139,  170 => 135,  168 => 132,  164 => 131,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    <style>

        @import url(https://fonts.googleapis.com/css?family=Lato:300,400);
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);

        html {
            height: 100%;
        }


        body {
            position: relative;
            margin: 0;
            padding-bottom: 1rem;
            min-height: 100%;
            font-family: \"Helvetica Neue\", Arial, sans-serif;
        }


        footer {
            background-color:#0c1a1e;
            min-height:350px;
            font-family: 'Open Sans', sans-serif;
            position: absolute;
            right: 0;
            /*bottom: 0;*/
            left: 0;
            margin-top: 15rem; /* space between content and footer */
            /*padding: 1rem;*/
            text-align: center;
        }



        .buttonLogin {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        @media screen and (max-width: 699px) {
            .checkbox {
                margin-top: 15%;
            }
        }

        .copyright {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
        }

        fixed-bottom{
            margin-top: 20px; /* space between content and footer */
            padding-top: 20px;
        }

        .footer-col { margin-top:50px; }
        .logofooter { margin-bottom:10px; font-size:25px; color:#fff; font-weight:700;}

        .footer-col p { color:#fff; font-size:12px; font-family: 'Open Sans', sans-serif; margin-bottom:15px;}
        .footer-col p i { width:20px; color:#999;}

        .footer-ul { list-style-type:none;  padding-left:0; margin-left:2px;}
        .footer-ul li { line-height:29px; font-size:12px;}
        .footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
        .footer-ul i { margin-right:10px;}
        .footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }

        .copyright { min-height:40px; background-color:#000000;}
        .copyright p { text-align:left; color:#FFF; padding:10px 0; margin-bottom:0;}
        .heading7 { font-size:21px; font-weight:700; color:#d9d6d6; margin-bottom:22px;}
        .post p { font-size:12px; color:#FFF; line-height:20px;}
        .post p span { display:block; color:#8f8f8f;}
        .bottom_ul { list-style-type:none; float:right; margin-bottom:0;}
        .bottom_ul li { float:left; line-height:40px;}
        .bottom_ul li:after { content:\"/\"; color:#FFF; margin-right:8px; margin-left:8px;}
        .bottom_ul li a { color:#FFF;  font-size:12px;}
        .social-icon {
            width: 30px;
            height: 30px;
            font-size: 15px;
            background-color: blue;
            color: #fff;
            text-align: center;
            margin-right: 10px;
            padding-top: 7px;
            border-radius: 50%;
        }
        .footer-social {
            list-style-type: none;
        }
        .footer-social li{
            float: left;
        }
        .linked-in{
            background-color:#007bb6;
        }
        .facebook{
            background-color:#3b5998;
        }
        .twitter{
            background-color:#1da1f2;
        }
        .google{
            background-color:#f63e28;
        }



    </style>


    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}

    {% endblock %}


</head>
<body>
{% block javascripts %}
{% endblock %}

{% block body %}

    {% block header %}
    {% endblock %}

    {% block content %}
    {% endblock %}

    {% block footer %}
    {% endblock %}

{% endblock %}

</body>
</html>
", "base.html.twig", "/var/www/html/Commercial/app/Resources/views/base.html.twig");
    }
}
