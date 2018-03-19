<?php

/* base.html.twig */
class __TwigTemplate_d33e7fc71dd47efc2053c01eb0905582c9439522b68b018ce989270234f58ba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        $__internal_d8501c656de81f554a6bfc117eb4fd11a02a3919343ebf9e740bbf9bc1898604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8501c656de81f554a6bfc117eb4fd11a02a3919343ebf9e740bbf9bc1898604->enter($__internal_d8501c656de81f554a6bfc117eb4fd11a02a3919343ebf9e740bbf9bc1898604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_29fa288a01bcb8760be58b547f508bca8ef2cf08ac49a8ae23c469e7ea58b910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fa288a01bcb8760be58b547f508bca8ef2cf08ac49a8ae23c469e7ea58b910->enter($__internal_29fa288a01bcb8760be58b547f508bca8ef2cf08ac49a8ae23c469e7ea58b910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qj8kon1tfr06xa9wkmn5zbpz00twk16xp6156myjoqo665s1\"></script>
    <script type=\"text/javascript\">
        tinymce.init({
            branding: false,
            selector: 'textarea'
        });
    </script>

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

        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
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


    <title>
        ";
        // line 159
        if (array_key_exists("page_title", $context)) {
            // line 160
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new Twig_Error_Runtime('Variable "page_title" does not exist.', 160, $this->getSourceContext()); })()), "html", null, true);
            echo "
        ";
        }
        // line 162
        echo "    </title>

    ";
        // line 164
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 167
        echo "

</head>
<body>
";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('body', $context, $blocks);
        // line 186
        echo "
</body>
</html>
";
        
        $__internal_d8501c656de81f554a6bfc117eb4fd11a02a3919343ebf9e740bbf9bc1898604->leave($__internal_d8501c656de81f554a6bfc117eb4fd11a02a3919343ebf9e740bbf9bc1898604_prof);

        
        $__internal_29fa288a01bcb8760be58b547f508bca8ef2cf08ac49a8ae23c469e7ea58b910->leave($__internal_29fa288a01bcb8760be58b547f508bca8ef2cf08ac49a8ae23c469e7ea58b910_prof);

    }

    // line 164
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6c0b7f27b59294b3da6b2b91b6a3960af2568c6d1d3dcbb10058ed5728d74af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c0b7f27b59294b3da6b2b91b6a3960af2568c6d1d3dcbb10058ed5728d74af->enter($__internal_b6c0b7f27b59294b3da6b2b91b6a3960af2568c6d1d3dcbb10058ed5728d74af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ad66cfecc0b1067b7f1780c671ac7c9fc6beecaa1533bcf9235089cde7310d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad66cfecc0b1067b7f1780c671ac7c9fc6beecaa1533bcf9235089cde7310d7b->enter($__internal_ad66cfecc0b1067b7f1780c671ac7c9fc6beecaa1533bcf9235089cde7310d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 165
        echo "
    ";
        
        $__internal_ad66cfecc0b1067b7f1780c671ac7c9fc6beecaa1533bcf9235089cde7310d7b->leave($__internal_ad66cfecc0b1067b7f1780c671ac7c9fc6beecaa1533bcf9235089cde7310d7b_prof);

        
        $__internal_b6c0b7f27b59294b3da6b2b91b6a3960af2568c6d1d3dcbb10058ed5728d74af->leave($__internal_b6c0b7f27b59294b3da6b2b91b6a3960af2568c6d1d3dcbb10058ed5728d74af_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b39dab505db325c439a7a0ff4e81dcfe63d2db5c59c3c45a9f7166b8b79030e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b39dab505db325c439a7a0ff4e81dcfe63d2db5c59c3c45a9f7166b8b79030e->enter($__internal_3b39dab505db325c439a7a0ff4e81dcfe63d2db5c59c3c45a9f7166b8b79030e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e45bad19de40214a4a70f4a19220fc1765e921e318e562afb3b7379cf48d89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e45bad19de40214a4a70f4a19220fc1765e921e318e562afb3b7379cf48d89a->enter($__internal_6e45bad19de40214a4a70f4a19220fc1765e921e318e562afb3b7379cf48d89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e45bad19de40214a4a70f4a19220fc1765e921e318e562afb3b7379cf48d89a->leave($__internal_6e45bad19de40214a4a70f4a19220fc1765e921e318e562afb3b7379cf48d89a_prof);

        
        $__internal_3b39dab505db325c439a7a0ff4e81dcfe63d2db5c59c3c45a9f7166b8b79030e->leave($__internal_3b39dab505db325c439a7a0ff4e81dcfe63d2db5c59c3c45a9f7166b8b79030e_prof);

    }

    // line 174
    public function block_body($context, array $blocks = array())
    {
        $__internal_78c6e15fae6ae616adb3f4841dedb3ed02698b7256209003b40268c67c9a0564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c6e15fae6ae616adb3f4841dedb3ed02698b7256209003b40268c67c9a0564->enter($__internal_78c6e15fae6ae616adb3f4841dedb3ed02698b7256209003b40268c67c9a0564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f21adc42efcd41d1cc2fd64a2fce9a675cc74729cfb62f7822717d469c51bc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21adc42efcd41d1cc2fd64a2fce9a675cc74729cfb62f7822717d469c51bc4d->enter($__internal_f21adc42efcd41d1cc2fd64a2fce9a675cc74729cfb62f7822717d469c51bc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 175
        echo "
    ";
        // line 176
        $this->displayBlock('header', $context, $blocks);
        // line 178
        echo "
    ";
        // line 179
        $this->displayBlock('content', $context, $blocks);
        // line 181
        echo "
    ";
        // line 182
        $this->displayBlock('footer', $context, $blocks);
        // line 184
        echo "
";
        
        $__internal_f21adc42efcd41d1cc2fd64a2fce9a675cc74729cfb62f7822717d469c51bc4d->leave($__internal_f21adc42efcd41d1cc2fd64a2fce9a675cc74729cfb62f7822717d469c51bc4d_prof);

        
        $__internal_78c6e15fae6ae616adb3f4841dedb3ed02698b7256209003b40268c67c9a0564->leave($__internal_78c6e15fae6ae616adb3f4841dedb3ed02698b7256209003b40268c67c9a0564_prof);

    }

    // line 176
    public function block_header($context, array $blocks = array())
    {
        $__internal_c7209a76ad70ac3fbe096340a8134de3e41e328ee0b9904f4ec97907a942378f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7209a76ad70ac3fbe096340a8134de3e41e328ee0b9904f4ec97907a942378f->enter($__internal_c7209a76ad70ac3fbe096340a8134de3e41e328ee0b9904f4ec97907a942378f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1fb5fa3634fd36a573f5941d08f5067b287af7da0c4877a274dbd3c5b2884205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb5fa3634fd36a573f5941d08f5067b287af7da0c4877a274dbd3c5b2884205->enter($__internal_1fb5fa3634fd36a573f5941d08f5067b287af7da0c4877a274dbd3c5b2884205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 177
        echo "    ";
        
        $__internal_1fb5fa3634fd36a573f5941d08f5067b287af7da0c4877a274dbd3c5b2884205->leave($__internal_1fb5fa3634fd36a573f5941d08f5067b287af7da0c4877a274dbd3c5b2884205_prof);

        
        $__internal_c7209a76ad70ac3fbe096340a8134de3e41e328ee0b9904f4ec97907a942378f->leave($__internal_c7209a76ad70ac3fbe096340a8134de3e41e328ee0b9904f4ec97907a942378f_prof);

    }

    // line 179
    public function block_content($context, array $blocks = array())
    {
        $__internal_57a7257d3d3222a89a73b6a056921a3fa10d144c702309a258e9717560c6507d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a7257d3d3222a89a73b6a056921a3fa10d144c702309a258e9717560c6507d->enter($__internal_57a7257d3d3222a89a73b6a056921a3fa10d144c702309a258e9717560c6507d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2f89f2bfb65e5d06733fc09589598558f7743577f8991bfa32b9d27d73ec55dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f89f2bfb65e5d06733fc09589598558f7743577f8991bfa32b9d27d73ec55dd->enter($__internal_2f89f2bfb65e5d06733fc09589598558f7743577f8991bfa32b9d27d73ec55dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 180
        echo "    ";
        
        $__internal_2f89f2bfb65e5d06733fc09589598558f7743577f8991bfa32b9d27d73ec55dd->leave($__internal_2f89f2bfb65e5d06733fc09589598558f7743577f8991bfa32b9d27d73ec55dd_prof);

        
        $__internal_57a7257d3d3222a89a73b6a056921a3fa10d144c702309a258e9717560c6507d->leave($__internal_57a7257d3d3222a89a73b6a056921a3fa10d144c702309a258e9717560c6507d_prof);

    }

    // line 182
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e2fdceb4bc2090c049c9ec4ec08ecde53987cc34869df1c3e645b525621a4704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fdceb4bc2090c049c9ec4ec08ecde53987cc34869df1c3e645b525621a4704->enter($__internal_e2fdceb4bc2090c049c9ec4ec08ecde53987cc34869df1c3e645b525621a4704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_3db61de542ea909b574c7a2ac12c3c308e9814c97af9dd7e7a88170319dd1d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db61de542ea909b574c7a2ac12c3c308e9814c97af9dd7e7a88170319dd1d75->enter($__internal_3db61de542ea909b574c7a2ac12c3c308e9814c97af9dd7e7a88170319dd1d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 183
        echo "    ";
        
        $__internal_3db61de542ea909b574c7a2ac12c3c308e9814c97af9dd7e7a88170319dd1d75->leave($__internal_3db61de542ea909b574c7a2ac12c3c308e9814c97af9dd7e7a88170319dd1d75_prof);

        
        $__internal_e2fdceb4bc2090c049c9ec4ec08ecde53987cc34869df1c3e645b525621a4704->leave($__internal_e2fdceb4bc2090c049c9ec4ec08ecde53987cc34869df1c3e645b525621a4704_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 183,  341 => 182,  331 => 180,  322 => 179,  312 => 177,  303 => 176,  292 => 184,  290 => 182,  287 => 181,  285 => 179,  282 => 178,  280 => 176,  277 => 175,  268 => 174,  251 => 171,  240 => 165,  231 => 164,  218 => 186,  216 => 174,  213 => 173,  211 => 171,  205 => 167,  203 => 164,  199 => 162,  193 => 160,  191 => 159,  31 => 1,);
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
    <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qj8kon1tfr06xa9wkmn5zbpz00twk16xp6156myjoqo665s1\"></script>
    <script type=\"text/javascript\">
        tinymce.init({
            branding: false,
            selector: 'textarea'
        });
    </script>

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

        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
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


    <title>
        {% if page_title is defined %}
            {{ page_title }}
        {% endif %}
    </title>

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
