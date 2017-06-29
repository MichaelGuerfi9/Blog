<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_d2a56a324ab91fac4923b902128935b547d7939f7bbcf99e0b9bfeb79dbdb159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Default:index.html.twig", 1);
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
        $__internal_426d09c872c8fc5126a541190b60d8535cd711635ced3b6c52d4a4fe135778f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426d09c872c8fc5126a541190b60d8535cd711635ced3b6c52d4a4fe135778f4->enter($__internal_426d09c872c8fc5126a541190b60d8535cd711635ced3b6c52d4a4fe135778f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $__internal_70625593b19584872a3247b490ec4d05962ddbc480e6cc73f9520da4cc19d43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70625593b19584872a3247b490ec4d05962ddbc480e6cc73f9520da4cc19d43d->enter($__internal_70625593b19584872a3247b490ec4d05962ddbc480e6cc73f9520da4cc19d43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_426d09c872c8fc5126a541190b60d8535cd711635ced3b6c52d4a4fe135778f4->leave($__internal_426d09c872c8fc5126a541190b60d8535cd711635ced3b6c52d4a4fe135778f4_prof);

        
        $__internal_70625593b19584872a3247b490ec4d05962ddbc480e6cc73f9520da4cc19d43d->leave($__internal_70625593b19584872a3247b490ec4d05962ddbc480e6cc73f9520da4cc19d43d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_58a4e752398918e93dc05e68273f766e98fd04c170c26a4b5cb5e1f6a03c9528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a4e752398918e93dc05e68273f766e98fd04c170c26a4b5cb5e1f6a03c9528->enter($__internal_58a4e752398918e93dc05e68273f766e98fd04c170c26a4b5cb5e1f6a03c9528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6710b10710ee770d96c56bfd40831fc4820215354d671289277fdd2c064b82ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6710b10710ee770d96c56bfd40831fc4820215354d671289277fdd2c064b82ef->enter($__internal_6710b10710ee770d96c56bfd40831fc4820215354d671289277fdd2c064b82ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h1>Articles :</h1>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Auteur</th>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Content</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 18, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "                        <tr class=\"pointer\" onclick=\"document.location = '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_article", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()))), "html", null, true);
            echo "';\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "author", array()), "username", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "pubdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array()), 200, true, "..."), "html", null, true);
            echo "</td>
                        </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"navigation\">
                    ";
        // line 35
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 35, $this->getSourceContext()); })()));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6710b10710ee770d96c56bfd40831fc4820215354d671289277fdd2c064b82ef->leave($__internal_6710b10710ee770d96c56bfd40831fc4820215354d671289277fdd2c064b82ef_prof);

        
        $__internal_58a4e752398918e93dc05e68273f766e98fd04c170c26a4b5cb5e1f6a03c9528->leave($__internal_58a4e752398918e93dc05e68273f766e98fd04c170c26a4b5cb5e1f6a03c9528_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  120 => 26,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  82 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BlogBundle::layout.html.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h1>Articles :</h1>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Auteur</th>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Content</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for post in pagination %}
                        <tr class=\"pointer\" onclick=\"document.location = '{{ path('show_article', {slug: post.slug}) }}';\" {% if loop.index is odd %}class=\"color\"{% endif %}>
                            <td>{{ post.author.username }}</td>
                            <td>{{ post.title }}</td>
                            <td>{{ post.pubdate | date('Y-m-d') }}</td>
                            <td>{{ post.content | truncate(200, true, '...') }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "BlogBundle:Default:index.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/src/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
