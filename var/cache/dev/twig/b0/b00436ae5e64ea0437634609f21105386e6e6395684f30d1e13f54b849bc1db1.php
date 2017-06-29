<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4de5299c8bc29f8741769efd6c09bbf5f77c9f606356666c524f3a82ae111ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a7655f0e1b60b44f804a4959bf02d43ae5d5589b6c07c018187f9916a486c101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7655f0e1b60b44f804a4959bf02d43ae5d5589b6c07c018187f9916a486c101->enter($__internal_a7655f0e1b60b44f804a4959bf02d43ae5d5589b6c07c018187f9916a486c101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3781607b4f7fb0d706f413ccab8aab1a0b40968e2e2f0da5e2639efb8fd8da0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3781607b4f7fb0d706f413ccab8aab1a0b40968e2e2f0da5e2639efb8fd8da0d->enter($__internal_3781607b4f7fb0d706f413ccab8aab1a0b40968e2e2f0da5e2639efb8fd8da0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7655f0e1b60b44f804a4959bf02d43ae5d5589b6c07c018187f9916a486c101->leave($__internal_a7655f0e1b60b44f804a4959bf02d43ae5d5589b6c07c018187f9916a486c101_prof);

        
        $__internal_3781607b4f7fb0d706f413ccab8aab1a0b40968e2e2f0da5e2639efb8fd8da0d->leave($__internal_3781607b4f7fb0d706f413ccab8aab1a0b40968e2e2f0da5e2639efb8fd8da0d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_435dd149562764a9c57d03135cf07258a39775ac947029b728364124e75259dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435dd149562764a9c57d03135cf07258a39775ac947029b728364124e75259dc->enter($__internal_435dd149562764a9c57d03135cf07258a39775ac947029b728364124e75259dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c16f28ac9f19ebcc9ac92bf04455817071856371ef6db6f77c6c85ec6dfc43df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16f28ac9f19ebcc9ac92bf04455817071856371ef6db6f77c6c85ec6dfc43df->enter($__internal_c16f28ac9f19ebcc9ac92bf04455817071856371ef6db6f77c6c85ec6dfc43df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c16f28ac9f19ebcc9ac92bf04455817071856371ef6db6f77c6c85ec6dfc43df->leave($__internal_c16f28ac9f19ebcc9ac92bf04455817071856371ef6db6f77c6c85ec6dfc43df_prof);

        
        $__internal_435dd149562764a9c57d03135cf07258a39775ac947029b728364124e75259dc->leave($__internal_435dd149562764a9c57d03135cf07258a39775ac947029b728364124e75259dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29c7392d14e33e5ee895cd44b59201eaff1bb9b9e9f920635e206a4551067b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c7392d14e33e5ee895cd44b59201eaff1bb9b9e9f920635e206a4551067b99->enter($__internal_29c7392d14e33e5ee895cd44b59201eaff1bb9b9e9f920635e206a4551067b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bd5a4d5bb172d5ef1c6783f6b7ddcf4e92ae6aacd93573e0ea66e4f0a10a1c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5a4d5bb172d5ef1c6783f6b7ddcf4e92ae6aacd93573e0ea66e4f0a10a1c6a->enter($__internal_bd5a4d5bb172d5ef1c6783f6b7ddcf4e92ae6aacd93573e0ea66e4f0a10a1c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd5a4d5bb172d5ef1c6783f6b7ddcf4e92ae6aacd93573e0ea66e4f0a10a1c6a->leave($__internal_bd5a4d5bb172d5ef1c6783f6b7ddcf4e92ae6aacd93573e0ea66e4f0a10a1c6a_prof);

        
        $__internal_29c7392d14e33e5ee895cd44b59201eaff1bb9b9e9f920635e206a4551067b99->leave($__internal_29c7392d14e33e5ee895cd44b59201eaff1bb9b9e9f920635e206a4551067b99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc2d9b06632c058481f024a525cbdaf27f67752ad96400ff066a9a60a01bc88c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2d9b06632c058481f024a525cbdaf27f67752ad96400ff066a9a60a01bc88c->enter($__internal_fc2d9b06632c058481f024a525cbdaf27f67752ad96400ff066a9a60a01bc88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_47ee1fde673c805dc348c89bada9de4762804416fe673a5d4616c283a00e4b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ee1fde673c805dc348c89bada9de4762804416fe673a5d4616c283a00e4b22->enter($__internal_47ee1fde673c805dc348c89bada9de4762804416fe673a5d4616c283a00e4b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_47ee1fde673c805dc348c89bada9de4762804416fe673a5d4616c283a00e4b22->leave($__internal_47ee1fde673c805dc348c89bada9de4762804416fe673a5d4616c283a00e4b22_prof);

        
        $__internal_fc2d9b06632c058481f024a525cbdaf27f67752ad96400ff066a9a60a01bc88c->leave($__internal_fc2d9b06632c058481f024a525cbdaf27f67752ad96400ff066a9a60a01bc88c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
