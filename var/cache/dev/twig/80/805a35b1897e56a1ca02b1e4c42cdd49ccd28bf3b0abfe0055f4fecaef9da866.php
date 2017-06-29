<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_94df508d3d74b3ad633794035209fd57b12d49b5a866a8236f54ab508b63e5ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e12bd1ed2b32cce90d3a71325c4073e6f675ac6caea780b54fd3aaa6ee17576a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12bd1ed2b32cce90d3a71325c4073e6f675ac6caea780b54fd3aaa6ee17576a->enter($__internal_e12bd1ed2b32cce90d3a71325c4073e6f675ac6caea780b54fd3aaa6ee17576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_109993704ced7e6ef47cdadccc7851641b7547a0b5830608d5a7c05359af4416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109993704ced7e6ef47cdadccc7851641b7547a0b5830608d5a7c05359af4416->enter($__internal_109993704ced7e6ef47cdadccc7851641b7547a0b5830608d5a7c05359af4416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e12bd1ed2b32cce90d3a71325c4073e6f675ac6caea780b54fd3aaa6ee17576a->leave($__internal_e12bd1ed2b32cce90d3a71325c4073e6f675ac6caea780b54fd3aaa6ee17576a_prof);

        
        $__internal_109993704ced7e6ef47cdadccc7851641b7547a0b5830608d5a7c05359af4416->leave($__internal_109993704ced7e6ef47cdadccc7851641b7547a0b5830608d5a7c05359af4416_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_077d75876de7ac405559377c6abf1dd7768f083ed8c009e1e792af71e6bd992b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077d75876de7ac405559377c6abf1dd7768f083ed8c009e1e792af71e6bd992b->enter($__internal_077d75876de7ac405559377c6abf1dd7768f083ed8c009e1e792af71e6bd992b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab03974b2e343b099bbd7111e20d2fe11b19eb3d8d73fdfd04d17ef0213cd65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab03974b2e343b099bbd7111e20d2fe11b19eb3d8d73fdfd04d17ef0213cd65f->enter($__internal_ab03974b2e343b099bbd7111e20d2fe11b19eb3d8d73fdfd04d17ef0213cd65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ab03974b2e343b099bbd7111e20d2fe11b19eb3d8d73fdfd04d17ef0213cd65f->leave($__internal_ab03974b2e343b099bbd7111e20d2fe11b19eb3d8d73fdfd04d17ef0213cd65f_prof);

        
        $__internal_077d75876de7ac405559377c6abf1dd7768f083ed8c009e1e792af71e6bd992b->leave($__internal_077d75876de7ac405559377c6abf1dd7768f083ed8c009e1e792af71e6bd992b_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_1ab4be6b26a395742e8137816adbc875baedd35a31af4133922dc7981d58a53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab4be6b26a395742e8137816adbc875baedd35a31af4133922dc7981d58a53d->enter($__internal_1ab4be6b26a395742e8137816adbc875baedd35a31af4133922dc7981d58a53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_e9ba7c066134c85e1b95a10feb1781aab7ef60c45cf5cc0dc022cfa17ba4594b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ba7c066134c85e1b95a10feb1781aab7ef60c45cf5cc0dc022cfa17ba4594b->enter($__internal_e9ba7c066134c85e1b95a10feb1781aab7ef60c45cf5cc0dc022cfa17ba4594b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e9ba7c066134c85e1b95a10feb1781aab7ef60c45cf5cc0dc022cfa17ba4594b->leave($__internal_e9ba7c066134c85e1b95a10feb1781aab7ef60c45cf5cc0dc022cfa17ba4594b_prof);

        
        $__internal_1ab4be6b26a395742e8137816adbc875baedd35a31af4133922dc7981d58a53d->leave($__internal_1ab4be6b26a395742e8137816adbc875baedd35a31af4133922dc7981d58a53d_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_934949903a3a0e4a8a009b7560b99096c9b5e39e349006c7d73d877a740976e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934949903a3a0e4a8a009b7560b99096c9b5e39e349006c7d73d877a740976e2->enter($__internal_934949903a3a0e4a8a009b7560b99096c9b5e39e349006c7d73d877a740976e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_fc085e758281507d64b3c303e9ee02ac4f01d2a56a430dd875db710bfdf744fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc085e758281507d64b3c303e9ee02ac4f01d2a56a430dd875db710bfdf744fc->enter($__internal_fc085e758281507d64b3c303e9ee02ac4f01d2a56a430dd875db710bfdf744fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_fc085e758281507d64b3c303e9ee02ac4f01d2a56a430dd875db710bfdf744fc->leave($__internal_fc085e758281507d64b3c303e9ee02ac4f01d2a56a430dd875db710bfdf744fc_prof);

        
        $__internal_934949903a3a0e4a8a009b7560b99096c9b5e39e349006c7d73d877a740976e2->leave($__internal_934949903a3a0e4a8a009b7560b99096c9b5e39e349006c7d73d877a740976e2_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_1183c5b4a6d1a9cf6192d8dec471bc75cd4b6bfcbe356ce33a3efc1c20d65541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1183c5b4a6d1a9cf6192d8dec471bc75cd4b6bfcbe356ce33a3efc1c20d65541->enter($__internal_1183c5b4a6d1a9cf6192d8dec471bc75cd4b6bfcbe356ce33a3efc1c20d65541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_05fa5cee3c44e10bd8d9caedbfc5cc37a7b87c0a1828135503439bd8c36b1d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fa5cee3c44e10bd8d9caedbfc5cc37a7b87c0a1828135503439bd8c36b1d36->enter($__internal_05fa5cee3c44e10bd8d9caedbfc5cc37a7b87c0a1828135503439bd8c36b1d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 30, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 30, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_05fa5cee3c44e10bd8d9caedbfc5cc37a7b87c0a1828135503439bd8c36b1d36->leave($__internal_05fa5cee3c44e10bd8d9caedbfc5cc37a7b87c0a1828135503439bd8c36b1d36_prof);

        
        $__internal_1183c5b4a6d1a9cf6192d8dec471bc75cd4b6bfcbe356ce33a3efc1c20d65541->leave($__internal_1183c5b4a6d1a9cf6192d8dec471bc75cd4b6bfcbe356ce33a3efc1c20d65541_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_dcee80fef09b454d648eb47efdd2deebab850c4062cb89ef59ec81f566b6fe93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcee80fef09b454d648eb47efdd2deebab850c4062cb89ef59ec81f566b6fe93->enter($__internal_dcee80fef09b454d648eb47efdd2deebab850c4062cb89ef59ec81f566b6fe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_21aa7b8591e85b357931c4b941883e45eabcc51ed95b5d576102fe406ec5f1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21aa7b8591e85b357931c4b941883e45eabcc51ed95b5d576102fe406ec5f1cb->enter($__internal_21aa7b8591e85b357931c4b941883e45eabcc51ed95b5d576102fe406ec5f1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_21aa7b8591e85b357931c4b941883e45eabcc51ed95b5d576102fe406ec5f1cb->leave($__internal_21aa7b8591e85b357931c4b941883e45eabcc51ed95b5d576102fe406ec5f1cb_prof);

        
        $__internal_dcee80fef09b454d648eb47efdd2deebab850c4062cb89ef59ec81f566b6fe93->leave($__internal_dcee80fef09b454d648eb47efdd2deebab850c4062cb89ef59ec81f566b6fe93_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  152 => 34,  134 => 30,  124 => 27,  115 => 26,  102 => 23,  93 => 22,  79 => 18,  73 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 32,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
