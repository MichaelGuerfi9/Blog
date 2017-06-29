<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_ab3e8d9149462262fbd66f9f4d7f9002a6a258a88b509adf228dd14d5b9f443f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd9373c99de9eb627564670c3b052b145942bdeebf3cda8c8952b81d4c5e02b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9373c99de9eb627564670c3b052b145942bdeebf3cda8c8952b81d4c5e02b5->enter($__internal_bd9373c99de9eb627564670c3b052b145942bdeebf3cda8c8952b81d4c5e02b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $__internal_bf250144d9085093219e6031a1305cedd8db69a5fd366361ab4412b4069d5cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf250144d9085093219e6031a1305cedd8db69a5fd366361ab4412b4069d5cdf->enter($__internal_bf250144d9085093219e6031a1305cedd8db69a5fd366361ab4412b4069d5cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Yet Another Blog..</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\"
          integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\"
            integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\"
            integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\"
            integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\"
            crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/blog/style.css"), "html", null, true);
        echo "\">
</head>

<body>
<nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
            data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\"
            aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Yet Another Blog</a>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto right\">
            <li class=\"nav-item\">
                <div class=\"dropdown    \">
                    <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\"
                       aria-haspopup=\"false\" aria-expanded=\"false\">
                        Categories
                    </a>

                    ";
        // line 37
        if (array_key_exists("categories", $context)) {
            // line 38
            echo "                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 39, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 40
                echo "                                <a class=\"dropdown-item\"
                                   href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_by_category", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "name", array()), "html", null, true);
                echo "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                        </div>
                    ";
        }
        // line 45
        echo "                </div>
            </li>
        </ul>
        ";
        // line 48
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
            echo "\">Admin</a>
            </span>
            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Log out</a>
            </span>
        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 56
            echo "            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Log out</a>
            </span>
        ";
        } else {
            // line 60
            echo "            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a>
            </span>
            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Log in</a>
            </span>
        ";
        }
        // line 67
        echo "    </div>
</nav>

";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "
<footer></footer>
</body>
</html>
";
        
        $__internal_bd9373c99de9eb627564670c3b052b145942bdeebf3cda8c8952b81d4c5e02b5->leave($__internal_bd9373c99de9eb627564670c3b052b145942bdeebf3cda8c8952b81d4c5e02b5_prof);

        
        $__internal_bf250144d9085093219e6031a1305cedd8db69a5fd366361ab4412b4069d5cdf->leave($__internal_bf250144d9085093219e6031a1305cedd8db69a5fd366361ab4412b4069d5cdf_prof);

    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        $__internal_9073ec4208077ab476ad4a43a4951fcbb88db57a3c42c12d0beda569f2d2dec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9073ec4208077ab476ad4a43a4951fcbb88db57a3c42c12d0beda569f2d2dec6->enter($__internal_9073ec4208077ab476ad4a43a4951fcbb88db57a3c42c12d0beda569f2d2dec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8dbc5749d5fa1d399b5361f3f428e35a1c5d4fe2593ff1712bd8fdb2e98225ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbc5749d5fa1d399b5361f3f428e35a1c5d4fe2593ff1712bd8fdb2e98225ef->enter($__internal_8dbc5749d5fa1d399b5361f3f428e35a1c5d4fe2593ff1712bd8fdb2e98225ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8dbc5749d5fa1d399b5361f3f428e35a1c5d4fe2593ff1712bd8fdb2e98225ef->leave($__internal_8dbc5749d5fa1d399b5361f3f428e35a1c5d4fe2593ff1712bd8fdb2e98225ef_prof);

        
        $__internal_9073ec4208077ab476ad4a43a4951fcbb88db57a3c42c12d0beda569f2d2dec6->leave($__internal_9073ec4208077ab476ad4a43a4951fcbb88db57a3c42c12d0beda569f2d2dec6_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 70,  149 => 71,  147 => 70,  142 => 67,  136 => 64,  130 => 61,  127 => 60,  121 => 57,  118 => 56,  112 => 53,  106 => 50,  103 => 49,  101 => 48,  96 => 45,  92 => 43,  82 => 41,  79 => 40,  75 => 39,  72 => 38,  70 => 37,  57 => 27,  44 => 17,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Yet Another Blog..</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\"
          integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\"
            integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\"
            integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\"
            integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\"
            crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/blog/style.css') }}\">
</head>

<body>
<nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
            data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\"
            aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Yet Another Blog</a>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto right\">
            <li class=\"nav-item\">
                <div class=\"dropdown    \">
                    <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\"
                       aria-haspopup=\"false\" aria-expanded=\"false\">
                        Categories
                    </a>

                    {% if categories is defined %}
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                            {% for categorie in categories %}
                                <a class=\"dropdown-item\"
                                   href=\"{{ path('get_by_category', {slug: categorie.slug}) }}\">{{ categorie.name }}</a>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </li>
        </ul>
        {% if is_granted('ROLE_ADMIN') %}
            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"{{ path('sonata_admin_dashboard') }}\">Admin</a>
            </span>
            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"{{ path('fos_user_security_logout') }}\">Log out</a>
            </span>
        {% elseif is_granted('ROLE_USER') %}
            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"{{ path('fos_user_security_logout') }}\">Log out</a>
            </span>
        {% else %}
            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"{{ path('fos_user_registration_register') }}\">Register</a>
            </span>
            <span class=\"right\">
                <a class=\"nav-link\" id=\"dropdownMenuLink\" href=\"{{ path('fos_user_security_login') }}\">Log in</a>
            </span>
        {% endif %}
    </div>
</nav>

{% block content %}{% endblock %}

<footer></footer>
</body>
</html>
", "BlogBundle::layout.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/src/BlogBundle/Resources/views/layout.html.twig");
    }
}
