<?php

/* BlogBundle::standard_layout.html.twig */
class __TwigTemplate_0e084c65106a1d61c777388f9ddfac7a8162081fc8667ef5f94586489812378b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "BlogBundle::standard_layout.html.twig", 1);
        $this->blocks = array(
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e78a9a90ae28d55d557dd30f6c6a12d5dde100c3ea4e23c219c5552d63dcf22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78a9a90ae28d55d557dd30f6c6a12d5dde100c3ea4e23c219c5552d63dcf22d->enter($__internal_e78a9a90ae28d55d557dd30f6c6a12d5dde100c3ea4e23c219c5552d63dcf22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::standard_layout.html.twig"));

        $__internal_c4a3d9fe079a369474552f6949fe20ba93d068727cd861745018c4b133360b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a3d9fe079a369474552f6949fe20ba93d068727cd861745018c4b133360b28->enter($__internal_c4a3d9fe079a369474552f6949fe20ba93d068727cd861745018c4b133360b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78a9a90ae28d55d557dd30f6c6a12d5dde100c3ea4e23c219c5552d63dcf22d->leave($__internal_e78a9a90ae28d55d557dd30f6c6a12d5dde100c3ea4e23c219c5552d63dcf22d_prof);

        
        $__internal_c4a3d9fe079a369474552f6949fe20ba93d068727cd861745018c4b133360b28->leave($__internal_c4a3d9fe079a369474552f6949fe20ba93d068727cd861745018c4b133360b28_prof);

    }

    // line 3
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_f6ddb5d0b04e272f8e19427954b0e96617be52291b1eaa979d287a30204d6e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ddb5d0b04e272f8e19427954b0e96617be52291b1eaa979d287a30204d6e9e->enter($__internal_f6ddb5d0b04e272f8e19427954b0e96617be52291b1eaa979d287a30204d6e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_83d0e7c1af8332fc9e17bae08397bb142a7f8dba6c18690a8824637933c88375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d0e7c1af8332fc9e17bae08397bb142a7f8dba6c18690a8824637933c88375->enter($__internal_83d0e7c1af8332fc9e17bae08397bb142a7f8dba6c18690a8824637933c88375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        
        $__internal_83d0e7c1af8332fc9e17bae08397bb142a7f8dba6c18690a8824637933c88375->leave($__internal_83d0e7c1af8332fc9e17bae08397bb142a7f8dba6c18690a8824637933c88375_prof);

        
        $__internal_f6ddb5d0b04e272f8e19427954b0e96617be52291b1eaa979d287a30204d6e9e->leave($__internal_f6ddb5d0b04e272f8e19427954b0e96617be52291b1eaa979d287a30204d6e9e_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_2a64c49ca2b0133a9e2cc49b9fa6d39e2024c6292d734dc9626d931f44f4bea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a64c49ca2b0133a9e2cc49b9fa6d39e2024c6292d734dc9626d931f44f4bea0->enter($__internal_2a64c49ca2b0133a9e2cc49b9fa6d39e2024c6292d734dc9626d931f44f4bea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_94f62636adbd2f18726a91e853caf9182f75cc970f43214916746838e3d8b936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f62636adbd2f18726a91e853caf9182f75cc970f43214916746838e3d8b936->enter($__internal_94f62636adbd2f18726a91e853caf9182f75cc970f43214916746838e3d8b936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 7
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"logo\">
        <span>Espace Admin</span>
    </a>
";
        
        $__internal_94f62636adbd2f18726a91e853caf9182f75cc970f43214916746838e3d8b936->leave($__internal_94f62636adbd2f18726a91e853caf9182f75cc970f43214916746838e3d8b936_prof);

        
        $__internal_2a64c49ca2b0133a9e2cc49b9fa6d39e2024c6292d734dc9626d931f44f4bea0->leave($__internal_2a64c49ca2b0133a9e2cc49b9fa6d39e2024c6292d734dc9626d931f44f4bea0_prof);

    }

    // line 12
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_cb7f6b329600806023c3b4f50c6256f6a22d1ae2e62a21e06c8cbc5d1b59aaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7f6b329600806023c3b4f50c6256f6a22d1ae2e62a21e06c8cbc5d1b59aaa7->enter($__internal_cb7f6b329600806023c3b4f50c6256f6a22d1ae2e62a21e06c8cbc5d1b59aaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_b42ef6ff92e205929739bd549f2069a96d3069447f30007d39973447fe13a2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42ef6ff92e205929739bd549f2069a96d3069447f30007d39973447fe13a2ea->enter($__internal_b42ef6ff92e205929739bd549f2069a96d3069447f30007d39973447fe13a2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 13
        echo "    <li>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">
            Retourner sur le blog
        </a>
    </li>
    ";
        // line 18
        $this->displayParentBlock("sonata_top_nav_menu_add_block", $context, $blocks);
        echo "
";
        
        $__internal_b42ef6ff92e205929739bd549f2069a96d3069447f30007d39973447fe13a2ea->leave($__internal_b42ef6ff92e205929739bd549f2069a96d3069447f30007d39973447fe13a2ea_prof);

        
        $__internal_cb7f6b329600806023c3b4f50c6256f6a22d1ae2e62a21e06c8cbc5d1b59aaa7->leave($__internal_cb7f6b329600806023c3b4f50c6256f6a22d1ae2e62a21e06c8cbc5d1b59aaa7_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  95 => 14,  92 => 13,  83 => 12,  68 => 7,  59 => 6,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle::standard_layout.html.twig' %}

{% block side_bar_after_nav %}
{% endblock %}

{% block logo %}
    <a href=\"{{ url('sonata_admin_dashboard') }}\" class=\"logo\">
        <span>Espace Admin</span>
    </a>
{% endblock %}

{% block sonata_top_nav_menu_add_block %}
    <li>
        <a href=\"{{ path('home') }}\">
            Retourner sur le blog
        </a>
    </li>
    {{ parent() }}
{% endblock %}", "BlogBundle::standard_layout.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/src/BlogBundle/Resources/views/standard_layout.html.twig");
    }
}
