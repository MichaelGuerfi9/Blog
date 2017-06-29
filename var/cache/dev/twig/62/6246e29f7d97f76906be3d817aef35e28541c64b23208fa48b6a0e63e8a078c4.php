<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_933f90843c3f6e32c01ffdd4736ef1d02c6b9498bf58a5f428e1e4889262d0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbbc980e85c8fc93e8a69d4d9b79ea99048ef7285a2124c13604966dd3a3ee36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbc980e85c8fc93e8a69d4d9b79ea99048ef7285a2124c13604966dd3a3ee36->enter($__internal_cbbc980e85c8fc93e8a69d4d9b79ea99048ef7285a2124c13604966dd3a3ee36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c1c5fe018cfe4b5febdfde48c3444eb5e82fb81882cb1496473a13aa7c4ee050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c5fe018cfe4b5febdfde48c3444eb5e82fb81882cb1496473a13aa7c4ee050->enter($__internal_c1c5fe018cfe4b5febdfde48c3444eb5e82fb81882cb1496473a13aa7c4ee050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbbc980e85c8fc93e8a69d4d9b79ea99048ef7285a2124c13604966dd3a3ee36->leave($__internal_cbbc980e85c8fc93e8a69d4d9b79ea99048ef7285a2124c13604966dd3a3ee36_prof);

        
        $__internal_c1c5fe018cfe4b5febdfde48c3444eb5e82fb81882cb1496473a13aa7c4ee050->leave($__internal_c1c5fe018cfe4b5febdfde48c3444eb5e82fb81882cb1496473a13aa7c4ee050_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11515e82c20efa678ff655170c1292c58792f124aeebacda074c07aa361860b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11515e82c20efa678ff655170c1292c58792f124aeebacda074c07aa361860b4->enter($__internal_11515e82c20efa678ff655170c1292c58792f124aeebacda074c07aa361860b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b6e211776b3351c35591b33c338ef633d6555a857ac815ba574158c6ba19ff12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e211776b3351c35591b33c338ef633d6555a857ac815ba574158c6ba19ff12->enter($__internal_b6e211776b3351c35591b33c338ef633d6555a857ac815ba574158c6ba19ff12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b6e211776b3351c35591b33c338ef633d6555a857ac815ba574158c6ba19ff12->leave($__internal_b6e211776b3351c35591b33c338ef633d6555a857ac815ba574158c6ba19ff12_prof);

        
        $__internal_11515e82c20efa678ff655170c1292c58792f124aeebacda074c07aa361860b4->leave($__internal_11515e82c20efa678ff655170c1292c58792f124aeebacda074c07aa361860b4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c96dce11655c9fb5507d026588e72fa289311f991d8aa4e2543f864fd95193d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96dce11655c9fb5507d026588e72fa289311f991d8aa4e2543f864fd95193d7->enter($__internal_c96dce11655c9fb5507d026588e72fa289311f991d8aa4e2543f864fd95193d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7953ddc1bf36f6093a0f106b5ddcaa7182b71156562dd83d0490a0a8620a8586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7953ddc1bf36f6093a0f106b5ddcaa7182b71156562dd83d0490a0a8620a8586->enter($__internal_7953ddc1bf36f6093a0f106b5ddcaa7182b71156562dd83d0490a0a8620a8586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7953ddc1bf36f6093a0f106b5ddcaa7182b71156562dd83d0490a0a8620a8586->leave($__internal_7953ddc1bf36f6093a0f106b5ddcaa7182b71156562dd83d0490a0a8620a8586_prof);

        
        $__internal_c96dce11655c9fb5507d026588e72fa289311f991d8aa4e2543f864fd95193d7->leave($__internal_c96dce11655c9fb5507d026588e72fa289311f991d8aa4e2543f864fd95193d7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eaa3317ff8bf3937dff9f3846e5a95a44c98a1a074993ca36f44550f0f686da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa3317ff8bf3937dff9f3846e5a95a44c98a1a074993ca36f44550f0f686da5->enter($__internal_eaa3317ff8bf3937dff9f3846e5a95a44c98a1a074993ca36f44550f0f686da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6686155d918ff699c781f4b5860a2a32ccb3bd0b84cada0f8946565c5029410c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6686155d918ff699c781f4b5860a2a32ccb3bd0b84cada0f8946565c5029410c->enter($__internal_6686155d918ff699c781f4b5860a2a32ccb3bd0b84cada0f8946565c5029410c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_6686155d918ff699c781f4b5860a2a32ccb3bd0b84cada0f8946565c5029410c->leave($__internal_6686155d918ff699c781f4b5860a2a32ccb3bd0b84cada0f8946565c5029410c_prof);

        
        $__internal_eaa3317ff8bf3937dff9f3846e5a95a44c98a1a074993ca36f44550f0f686da5->leave($__internal_eaa3317ff8bf3937dff9f3846e5a95a44c98a1a074993ca36f44550f0f686da5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
