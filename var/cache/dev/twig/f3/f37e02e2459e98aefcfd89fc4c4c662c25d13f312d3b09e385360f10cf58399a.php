<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5ac8a9a1f4cb67436bfd21b5a01af0ef26db3638f2389b817dd5535fe5504c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fe78672f427a478e97111ccb6b3ac504513e86d2898320ed2d01cbddab544d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe78672f427a478e97111ccb6b3ac504513e86d2898320ed2d01cbddab544d9->enter($__internal_2fe78672f427a478e97111ccb6b3ac504513e86d2898320ed2d01cbddab544d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_81806fbfa8022f1ded35c97b2bd0d58acb20f2e2d873c89c1c614cdac13d4e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81806fbfa8022f1ded35c97b2bd0d58acb20f2e2d873c89c1c614cdac13d4e1b->enter($__internal_81806fbfa8022f1ded35c97b2bd0d58acb20f2e2d873c89c1c614cdac13d4e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe78672f427a478e97111ccb6b3ac504513e86d2898320ed2d01cbddab544d9->leave($__internal_2fe78672f427a478e97111ccb6b3ac504513e86d2898320ed2d01cbddab544d9_prof);

        
        $__internal_81806fbfa8022f1ded35c97b2bd0d58acb20f2e2d873c89c1c614cdac13d4e1b->leave($__internal_81806fbfa8022f1ded35c97b2bd0d58acb20f2e2d873c89c1c614cdac13d4e1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0da30d1c45944b8e61f6f6b8c13d811b37f9aed1048d4df54ea4dc8e475982c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da30d1c45944b8e61f6f6b8c13d811b37f9aed1048d4df54ea4dc8e475982c9->enter($__internal_0da30d1c45944b8e61f6f6b8c13d811b37f9aed1048d4df54ea4dc8e475982c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1ba227b6560acf9ae2df635e51bbb697e9ac81ce6370d89761361fc8318df88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ba227b6560acf9ae2df635e51bbb697e9ac81ce6370d89761361fc8318df88->enter($__internal_b1ba227b6560acf9ae2df635e51bbb697e9ac81ce6370d89761361fc8318df88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b1ba227b6560acf9ae2df635e51bbb697e9ac81ce6370d89761361fc8318df88->leave($__internal_b1ba227b6560acf9ae2df635e51bbb697e9ac81ce6370d89761361fc8318df88_prof);

        
        $__internal_0da30d1c45944b8e61f6f6b8c13d811b37f9aed1048d4df54ea4dc8e475982c9->leave($__internal_0da30d1c45944b8e61f6f6b8c13d811b37f9aed1048d4df54ea4dc8e475982c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
