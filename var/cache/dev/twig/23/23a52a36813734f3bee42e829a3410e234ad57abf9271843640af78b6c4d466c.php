<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_8030035a24dfd490b464683b27b8e0e25bddf64deebb6cecabab73c2d21a437f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'logo' => [$this, 'block_logo'],
            'header_links' => [$this, 'block_header_links'],
            'navbar_links' => [$this, 'block_navbar_links'],
            'layout' => [$this, 'block_layout'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>


<body id=\"home\" data-spy=\"scroll\" data-target=\"#navbar-wd\" data-offset=\"98\">

<!-- End header -->
<header class=\"top-header fixed-top\">
    <div class=\"header_top\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"logo_section\">
                    ";
        // line 27
        $this->displayBlock('logo', $context, $blocks);
        // line 31
        echo "                </div>

                ";
        // line 33
        $this->displayBlock('header_links', $context, $blocks);
        // line 44
        echo "            </div>
        </div>

    </div>
    <div class=\"header_bottom\">
        <div class=\"container\">
            <div class=\"col-sm-12 orange\">
                <div class=\"menu_orange_section\">
                    <nav class=\"navbar header-nav navbar-expand-lg\">
                        <div class=\"menu_section\">
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-wd\"
                                    aria-controls=\"navbar-wd\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbar-wd\">
                                <ul class=\"navbar-nav\">
                                    ";
        // line 62
        $this->displayBlock('navbar_links', $context, $blocks);
        // line 70
        echo "                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

<!-- Start header -->
<div class=\"section first\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 86
        $this->displayBlock('layout', $context, $blocks);
        // line 87
        echo "            </div>
        </div>
    </div>
</div>

<a href=\"#\" id=\"scroll-to-top\" class=\"hvr-radial-out\"><i class=\"fa fa-angle-up\"></i></a>

";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "</body>

</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        // line 28
        echo "                        <a class=\"navbar-brand\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"
                                                                            alt=\"image\"></a>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_header_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_links"));

        // line 34
        echo "                    <div class=\"site_information\">
                        <ul>
                            <li><a href=\"mailto:exchang@gmail.com\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mail_icon.png"), "html", null, true);
        echo "\" alt=\"#\"/>exchang@gmail.com</a>
                            </li>
                            <li><a href=\"tel:exchang@gmail.com\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/phone_icon.png"), "html", null, true);
        echo "\" alt=\"#\"/>+7123569847</a>
                            </li>
                            <li><a class=\"join_bt\" href=\"#\">Join us</a></li>
                        </ul>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_navbar_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_links"));

        // line 63
        echo "                                        <li><a class=\"nav-link active\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a></li>
                                        <li><a class=\"nav-link\" href=\"about.html\">About</a></li>
                                        <li><a class=\"nav-link\" href=\"exchange.html\">Exchange</a></li>
                                        <li><a class=\"nav-link\" href=\"services.html\">Services</a></li>
                                        <li><a class=\"nav-link\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">News</a></li>
                                        <li><a class=\"nav-link\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        echo "\">Contact</a></li>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  277 => 95,  270 => 94,  258 => 86,  249 => 68,  245 => 67,  237 => 63,  230 => 62,  217 => 38,  212 => 36,  208 => 34,  201 => 33,  188 => 28,  181 => 27,  171 => 8,  164 => 7,  151 => 5,  140 => 97,  138 => 94,  129 => 87,  127 => 86,  109 => 70,  107 => 62,  87 => 44,  85 => 33,  81 => 31,  79 => 27,  60 => 10,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>


<body id=\"home\" data-spy=\"scroll\" data-target=\"#navbar-wd\" data-offset=\"98\">

<!-- End header -->
<header class=\"top-header fixed-top\">
    <div class=\"header_top\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"logo_section\">
                    {% block logo %}
                        <a class=\"navbar-brand\" href=\"{{ path('index') }}\"><img src=\"{{ asset('images/logo.png') }}\"
                                                                            alt=\"image\"></a>
                    {% endblock %}
                </div>

                {% block header_links %}
                    <div class=\"site_information\">
                        <ul>
                            <li><a href=\"mailto:exchang@gmail.com\"><img src=\"{{ asset('images/mail_icon.png') }}\" alt=\"#\"/>exchang@gmail.com</a>
                            </li>
                            <li><a href=\"tel:exchang@gmail.com\"><img src=\"{{ asset('images/phone_icon.png') }}\" alt=\"#\"/>+7123569847</a>
                            </li>
                            <li><a class=\"join_bt\" href=\"#\">Join us</a></li>
                        </ul>
                    </div>
                {% endblock %}
            </div>
        </div>

    </div>
    <div class=\"header_bottom\">
        <div class=\"container\">
            <div class=\"col-sm-12 orange\">
                <div class=\"menu_orange_section\">
                    <nav class=\"navbar header-nav navbar-expand-lg\">
                        <div class=\"menu_section\">
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-wd\"
                                    aria-controls=\"navbar-wd\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbar-wd\">
                                <ul class=\"navbar-nav\">
                                    {% block navbar_links %}
                                        <li><a class=\"nav-link active\" href=\"{{ path('index') }}\">Home</a></li>
                                        <li><a class=\"nav-link\" href=\"about.html\">About</a></li>
                                        <li><a class=\"nav-link\" href=\"exchange.html\">Exchange</a></li>
                                        <li><a class=\"nav-link\" href=\"services.html\">Services</a></li>
                                        <li><a class=\"nav-link\" href=\"{{ path('article_index') }}\">News</a></li>
                                        <li><a class=\"nav-link\" href=\"{{ path('contact_new') }}\">Contact</a></li>
                                    {% endblock %}
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

<!-- Start header -->
<div class=\"section first\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% block layout %}{% endblock %}
            </div>
        </div>
    </div>
</div>

<a href=\"#\" id=\"scroll-to-top\" class=\"hvr-radial-out\"><i class=\"fa fa-angle-up\"></i></a>

{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
{% endblock %}
</body>

</html>

", "base.html.twig", "/opt/lampp/htdocs/Symfony-L3/templates/base.html.twig");
    }
}
