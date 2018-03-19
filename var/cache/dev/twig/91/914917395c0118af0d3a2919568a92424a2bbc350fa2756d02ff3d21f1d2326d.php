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
        $__internal_aacdac527305a779b8df907fd87213f11950cd8fd2fd5a12f1a6a7e395ccdd45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacdac527305a779b8df907fd87213f11950cd8fd2fd5a12f1a6a7e395ccdd45->enter($__internal_aacdac527305a779b8df907fd87213f11950cd8fd2fd5a12f1a6a7e395ccdd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_48db4d347d875473e2b259f9879b3de24404e88dada0a5301388dbeb608d8e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48db4d347d875473e2b259f9879b3de24404e88dada0a5301388dbeb608d8e37->enter($__internal_48db4d347d875473e2b259f9879b3de24404e88dada0a5301388dbeb608d8e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_aacdac527305a779b8df907fd87213f11950cd8fd2fd5a12f1a6a7e395ccdd45->leave($__internal_aacdac527305a779b8df907fd87213f11950cd8fd2fd5a12f1a6a7e395ccdd45_prof);

        
        $__internal_48db4d347d875473e2b259f9879b3de24404e88dada0a5301388dbeb608d8e37->leave($__internal_48db4d347d875473e2b259f9879b3de24404e88dada0a5301388dbeb608d8e37_prof);

    }

    // line 164
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e8b50ed80ba305c1a4c8a01b695f34142e6b132e8c0381350d71eef390ab5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8b50ed80ba305c1a4c8a01b695f34142e6b132e8c0381350d71eef390ab5d5->enter($__internal_6e8b50ed80ba305c1a4c8a01b695f34142e6b132e8c0381350d71eef390ab5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8df2cf2b1fafb2ef4c4f1aef27d5dcef2d7a50dde6d8a2d1f8c0d947bf9ca336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df2cf2b1fafb2ef4c4f1aef27d5dcef2d7a50dde6d8a2d1f8c0d947bf9ca336->enter($__internal_8df2cf2b1fafb2ef4c4f1aef27d5dcef2d7a50dde6d8a2d1f8c0d947bf9ca336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 165
        echo "
    ";
        
        $__internal_8df2cf2b1fafb2ef4c4f1aef27d5dcef2d7a50dde6d8a2d1f8c0d947bf9ca336->leave($__internal_8df2cf2b1fafb2ef4c4f1aef27d5dcef2d7a50dde6d8a2d1f8c0d947bf9ca336_prof);

        
        $__internal_6e8b50ed80ba305c1a4c8a01b695f34142e6b132e8c0381350d71eef390ab5d5->leave($__internal_6e8b50ed80ba305c1a4c8a01b695f34142e6b132e8c0381350d71eef390ab5d5_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_585579a6b2871f8220ddcd8f1bc3f520d994a1319b66ae6ec31f3141d52304f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585579a6b2871f8220ddcd8f1bc3f520d994a1319b66ae6ec31f3141d52304f8->enter($__internal_585579a6b2871f8220ddcd8f1bc3f520d994a1319b66ae6ec31f3141d52304f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba559c5a0bfe24f5e40b66152f62b4060861459d971b8560c96e87b7adecead2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba559c5a0bfe24f5e40b66152f62b4060861459d971b8560c96e87b7adecead2->enter($__internal_ba559c5a0bfe24f5e40b66152f62b4060861459d971b8560c96e87b7adecead2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba559c5a0bfe24f5e40b66152f62b4060861459d971b8560c96e87b7adecead2->leave($__internal_ba559c5a0bfe24f5e40b66152f62b4060861459d971b8560c96e87b7adecead2_prof);

        
        $__internal_585579a6b2871f8220ddcd8f1bc3f520d994a1319b66ae6ec31f3141d52304f8->leave($__internal_585579a6b2871f8220ddcd8f1bc3f520d994a1319b66ae6ec31f3141d52304f8_prof);

    }

    // line 174
    public function block_body($context, array $blocks = array())
    {
        $__internal_f24f8599fa0b3bcf8df85b60db5e7a1713e36f06cdbeb91ce26c480ca819b0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24f8599fa0b3bcf8df85b60db5e7a1713e36f06cdbeb91ce26c480ca819b0ca->enter($__internal_f24f8599fa0b3bcf8df85b60db5e7a1713e36f06cdbeb91ce26c480ca819b0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed791a339e9643136141f9c13bec52b06afed67e63b2f0a3382ad78fa68a707d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed791a339e9643136141f9c13bec52b06afed67e63b2f0a3382ad78fa68a707d->enter($__internal_ed791a339e9643136141f9c13bec52b06afed67e63b2f0a3382ad78fa68a707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed791a339e9643136141f9c13bec52b06afed67e63b2f0a3382ad78fa68a707d->leave($__internal_ed791a339e9643136141f9c13bec52b06afed67e63b2f0a3382ad78fa68a707d_prof);

        
        $__internal_f24f8599fa0b3bcf8df85b60db5e7a1713e36f06cdbeb91ce26c480ca819b0ca->leave($__internal_f24f8599fa0b3bcf8df85b60db5e7a1713e36f06cdbeb91ce26c480ca819b0ca_prof);

    }

    // line 176
    public function block_header($context, array $blocks = array())
    {
        $__internal_15776e37ef46c1cb8e4e76c2c47f2aedcbde6f2077cffbec325bb4e71f68f345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15776e37ef46c1cb8e4e76c2c47f2aedcbde6f2077cffbec325bb4e71f68f345->enter($__internal_15776e37ef46c1cb8e4e76c2c47f2aedcbde6f2077cffbec325bb4e71f68f345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7dc55a29b6dedb56005cb256e58e2ff36ace7819f5efa5e5419ba15d715ae373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc55a29b6dedb56005cb256e58e2ff36ace7819f5efa5e5419ba15d715ae373->enter($__internal_7dc55a29b6dedb56005cb256e58e2ff36ace7819f5efa5e5419ba15d715ae373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 177
        echo "    ";
        
        $__internal_7dc55a29b6dedb56005cb256e58e2ff36ace7819f5efa5e5419ba15d715ae373->leave($__internal_7dc55a29b6dedb56005cb256e58e2ff36ace7819f5efa5e5419ba15d715ae373_prof);

        
        $__internal_15776e37ef46c1cb8e4e76c2c47f2aedcbde6f2077cffbec325bb4e71f68f345->leave($__internal_15776e37ef46c1cb8e4e76c2c47f2aedcbde6f2077cffbec325bb4e71f68f345_prof);

    }

    // line 179
    public function block_content($context, array $blocks = array())
    {
        $__internal_762e8184c1925f1f0d58066d34d8fb19e5a3fbe0b5c573f7693d9663cb8daeea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762e8184c1925f1f0d58066d34d8fb19e5a3fbe0b5c573f7693d9663cb8daeea->enter($__internal_762e8184c1925f1f0d58066d34d8fb19e5a3fbe0b5c573f7693d9663cb8daeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6ca5e5be6a40dd58a9f9ba2f42b1a9c61eb8f5dd75c43045d0309332c71f0f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca5e5be6a40dd58a9f9ba2f42b1a9c61eb8f5dd75c43045d0309332c71f0f8b->enter($__internal_6ca5e5be6a40dd58a9f9ba2f42b1a9c61eb8f5dd75c43045d0309332c71f0f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 180
        echo "    ";
        
        $__internal_6ca5e5be6a40dd58a9f9ba2f42b1a9c61eb8f5dd75c43045d0309332c71f0f8b->leave($__internal_6ca5e5be6a40dd58a9f9ba2f42b1a9c61eb8f5dd75c43045d0309332c71f0f8b_prof);

        
        $__internal_762e8184c1925f1f0d58066d34d8fb19e5a3fbe0b5c573f7693d9663cb8daeea->leave($__internal_762e8184c1925f1f0d58066d34d8fb19e5a3fbe0b5c573f7693d9663cb8daeea_prof);

    }

    // line 182
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6f8ce516177b298a9e88a44cc8fab8bfad783a73451cbb060f8220fa6c91afda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8ce516177b298a9e88a44cc8fab8bfad783a73451cbb060f8220fa6c91afda->enter($__internal_6f8ce516177b298a9e88a44cc8fab8bfad783a73451cbb060f8220fa6c91afda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fd4f0beef74392f6e464c1425c715f82aa139a34d64397bf0cb826fa905eefb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4f0beef74392f6e464c1425c715f82aa139a34d64397bf0cb826fa905eefb3->enter($__internal_fd4f0beef74392f6e464c1425c715f82aa139a34d64397bf0cb826fa905eefb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 183
        echo "    ";
        
        $__internal_fd4f0beef74392f6e464c1425c715f82aa139a34d64397bf0cb826fa905eefb3->leave($__internal_fd4f0beef74392f6e464c1425c715f82aa139a34d64397bf0cb826fa905eefb3_prof);

        
        $__internal_6f8ce516177b298a9e88a44cc8fab8bfad783a73451cbb060f8220fa6c91afda->leave($__internal_6f8ce516177b298a9e88a44cc8fab8bfad783a73451cbb060f8220fa6c91afda_prof);

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
