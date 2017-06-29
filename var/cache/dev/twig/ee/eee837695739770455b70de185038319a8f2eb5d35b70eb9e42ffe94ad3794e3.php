<?php

/* BlogBundle:Default:show.html.twig */
class __TwigTemplate_316ab3561d292f3785f9ba98d1f5c7c4778c3cddc9ec0ca9c35a9583f64ba23b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Default:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3edf52899bc93db1699ebc7c0b4df8f74fbefadd04ebf26390b810e9f9da0f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edf52899bc93db1699ebc7c0b4df8f74fbefadd04ebf26390b810e9f9da0f5d->enter($__internal_3edf52899bc93db1699ebc7c0b4df8f74fbefadd04ebf26390b810e9f9da0f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:show.html.twig"));

        $__internal_78d4cf3beb8d17cde0f4a2e8f928a7e529245620e69421fd0f4845ec8b581c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d4cf3beb8d17cde0f4a2e8f928a7e529245620e69421fd0f4845ec8b581c77->enter($__internal_78d4cf3beb8d17cde0f4a2e8f928a7e529245620e69421fd0f4845ec8b581c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3edf52899bc93db1699ebc7c0b4df8f74fbefadd04ebf26390b810e9f9da0f5d->leave($__internal_3edf52899bc93db1699ebc7c0b4df8f74fbefadd04ebf26390b810e9f9da0f5d_prof);

        
        $__internal_78d4cf3beb8d17cde0f4a2e8f928a7e529245620e69421fd0f4845ec8b581c77->leave($__internal_78d4cf3beb8d17cde0f4a2e8f928a7e529245620e69421fd0f4845ec8b581c77_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_01f3806b0f6106f7b3cd8c143eea7f04dcff416addf596336516484eadcfe50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f3806b0f6106f7b3cd8c143eea7f04dcff416addf596336516484eadcfe50e->enter($__internal_01f3806b0f6106f7b3cd8c143eea7f04dcff416addf596336516484eadcfe50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f85490558179f1357a29e1283838a7f4abc90f3c8b53de58b296ce6443be220f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85490558179f1357a29e1283838a7f4abc90f3c8b53de58b296ce6443be220f->enter($__internal_f85490558179f1357a29e1283838a7f4abc90f3c8b53de58b296ce6443be220f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Article</h1>
        <div class=\"row\">
            <div class=\"col\">
                <h4><u>Titre</u> : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 8, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h4>
                ";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array(), "any", true, true)) {
            // line 10
            echo "                    <h6><u>Categories</u> :
                        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 11, $this->getSourceContext()); })()), "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 12
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "name", array()), "html", null, true);
                echo " -
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                    </h6>
                ";
        }
        // line 16
        echo "                <h6><u>Auteur</u> : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 16, $this->getSourceContext()); })()), "author", array()), "username", array()), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 16, $this->getSourceContext()); })()), "pubdate", array()), "Y/m/d"), "html", null, true);
        echo "</h6>
                <h6><u>Contenu</u> : <br><br>\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 17, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "\"</h6>

            </div>
        </div>
        <h1>Commentaires</h1>
        <div class=\"row\">
            <div class=\"col\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Auteur</th>
                        <th>Date</th>
                        <th>Contenu</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 33, $this->getSourceContext()); })()), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 34
            echo "                        <tr>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "username", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "pubdate", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "content", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>
            </div>
        </div>
        ";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 45
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), 'form_start');
            echo "
            ";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), 'widget');
            echo "
            ";
            // line 47
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), 'form_end');
            echo "
        ";
        }
        // line 49
        echo "    </div>
";
        
        $__internal_f85490558179f1357a29e1283838a7f4abc90f3c8b53de58b296ce6443be220f->leave($__internal_f85490558179f1357a29e1283838a7f4abc90f3c8b53de58b296ce6443be220f_prof);

        
        $__internal_01f3806b0f6106f7b3cd8c143eea7f04dcff416addf596336516484eadcfe50e->leave($__internal_01f3806b0f6106f7b3cd8c143eea7f04dcff416addf596336516484eadcfe50e_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 49,  148 => 47,  144 => 46,  139 => 45,  137 => 44,  131 => 40,  122 => 37,  118 => 36,  114 => 35,  111 => 34,  107 => 33,  88 => 17,  81 => 16,  77 => 14,  68 => 12,  64 => 11,  61 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BlogBundle::layout.html.twig' %}

{% block content %}
    <div class=\"container\">
        <h1>Article</h1>
        <div class=\"row\">
            <div class=\"col\">
                <h4><u>Titre</u> : {{ post.title }}</h4>
                {% if post.categories is defined %}
                    <h6><u>Categories</u> :
                        {% for categorie in post.categories %}
                            {{ categorie.name }} -
                        {% endfor %}
                    </h6>
                {% endif %}
                <h6><u>Auteur</u> : {{ post.author.username }} le {{ post.pubdate|date(\"Y/m/d\") }}</h6>
                <h6><u>Contenu</u> : <br><br>\"{{ post.content }}\"</h6>

            </div>
        </div>
        <h1>Commentaires</h1>
        <div class=\"row\">
            <div class=\"col\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Auteur</th>
                        <th>Date</th>
                        <th>Contenu</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for comment in post.comments %}
                        <tr>
                            <td>{{ comment.author.username }}</td>
                            <td>{{ comment.pubdate|date(\"Y/m/d\") }}</td>
                            <td>{{ comment.content }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        {% if is_granted('ROLE_USER') %}
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        {% endif %}
    </div>
{% endblock %}
", "BlogBundle:Default:show.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/src/BlogBundle/Resources/views/Default/show.html.twig");
    }
}
