<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_137b4f11001ced47cb8f16acc0cfa8d882eee5e18983aa40a8bd85f23e11af8e extends Twig_Template
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
        $__internal_323c7a9f8c5ca01d62a65acf97a9be9860609e98aec36b40f6e63b9ff0bd183f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323c7a9f8c5ca01d62a65acf97a9be9860609e98aec36b40f6e63b9ff0bd183f->enter($__internal_323c7a9f8c5ca01d62a65acf97a9be9860609e98aec36b40f6e63b9ff0bd183f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sliding.html.twig"));

        $__internal_87135e6742ad6b04c98251eb0368552116fa44e5cb3604dc025e29bec6888ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87135e6742ad6b04c98251eb0368552116fa44e5cb3604dc025e29bec6888ccd->enter($__internal_87135e6742ad6b04c98251eb0368552116fa44e5cb3604dc025e29bec6888ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sliding.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 3, $this->getSourceContext()); })()) > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    ";
            // line 5
            if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 5, $this->getSourceContext()); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 5, $this->getSourceContext()); })())))) {
                // line 6
                echo "        <span class=\"first\">
            <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 7, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 7, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 7, $this->getSourceContext()); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 7, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 13, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 13, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 13, $this->getSourceContext()); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 13, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new Twig_Error_Runtime('Variable "pagesInRange" does not exist.', 17, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 18, $this->getSourceContext()); })()))) {
                    // line 19
                    echo "            <span class=\"page\">
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 20, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 20, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 20, $this->getSourceContext()); })()) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 30, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 30, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 30, $this->getSourceContext()); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 30, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 34, $this->getSourceContext()); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 34, $this->getSourceContext()); })())))) {
                // line 35
                echo "        <span class=\"last\">
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 36, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 36, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 36, $this->getSourceContext()); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 36, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
        
        $__internal_323c7a9f8c5ca01d62a65acf97a9be9860609e98aec36b40f6e63b9ff0bd183f->leave($__internal_323c7a9f8c5ca01d62a65acf97a9be9860609e98aec36b40f6e63b9ff0bd183f_prof);

        
        $__internal_87135e6742ad6b04c98251eb0368552116fa44e5cb3604dc025e29bec6888ccd->leave($__internal_87135e6742ad6b04c98251eb0368552116fa44e5cb3604dc025e29bec6888ccd_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  114 => 36,  111 => 35,  109 => 34,  106 => 33,  100 => 30,  97 => 29,  95 => 28,  92 => 27,  85 => 25,  79 => 23,  71 => 20,  68 => 19,  65 => 18,  61 => 17,  58 => 16,  52 => 13,  49 => 12,  47 => 11,  44 => 10,  38 => 7,  35 => 6,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# default Sliding pagination control implementation #}

{% if pageCount > 1 %}
<div class=\"pagination\">
    {% if first is defined and current != first %}
        <span class=\"first\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">&lt;&lt;</a>
        </span>
    {% endif %}

    {% if previous is defined %}
        <span class=\"previous\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
        </span>
    {% endif %}

    {% for page in pagesInRange %}
        {% if page != current %}
            <span class=\"page\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
            </span>
        {% else %}
            <span class=\"current\">{{ page }}</span>
        {% endif %}

    {% endfor %}

    {% if next is defined %}
        <span class=\"next\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
        </span>
    {% endif %}

    {% if last is defined and current != last %}
        <span class=\"last\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">&gt;&gt;</a>
        </span>
    {% endif %}
</div>
{% endif %}
", "KnpPaginatorBundle:Pagination:sliding.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sliding.html.twig");
    }
}
