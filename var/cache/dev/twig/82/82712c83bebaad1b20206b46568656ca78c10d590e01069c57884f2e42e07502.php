<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_05dfb656e8f1fea58b7aa22c5b32f66b9bfb692b5449bf5f5df4e9ab1cd222d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_497a1658f6668bff83b3f00a08f934ba7b3bcfbd5f2a4e954f761422453c299e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497a1658f6668bff83b3f00a08f934ba7b3bcfbd5f2a4e954f761422453c299e->enter($__internal_497a1658f6668bff83b3f00a08f934ba7b3bcfbd5f2a4e954f761422453c299e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        $__internal_6b305bf49d3ebba5839e8a438efe21db07870feb6e831b0a705139eb175f953e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b305bf49d3ebba5839e8a438efe21db07870feb6e831b0a705139eb175f953e->enter($__internal_6b305bf49d3ebba5839e8a438efe21db07870feb6e831b0a705139eb175f953e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_497a1658f6668bff83b3f00a08f934ba7b3bcfbd5f2a4e954f761422453c299e->leave($__internal_497a1658f6668bff83b3f00a08f934ba7b3bcfbd5f2a4e954f761422453c299e_prof);

        
        $__internal_6b305bf49d3ebba5839e8a438efe21db07870feb6e831b0a705139eb175f953e->leave($__internal_6b305bf49d3ebba5839e8a438efe21db07870feb6e831b0a705139eb175f953e_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_3bf568d53156d78bb4f3df662a3dcae6718e8eae8efd8e3afc57c4cf94430d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf568d53156d78bb4f3df662a3dcae6718e8eae8efd8e3afc57c4cf94430d15->enter($__internal_3bf568d53156d78bb4f3df662a3dcae6718e8eae8efd8e3afc57c4cf94430d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        $__internal_5a3b2e771da41e217d5d5eb777b9433d130daea0fc93c51b150a9d8f9756a512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3b2e771da41e217d5d5eb777b9433d130daea0fc93c51b150a9d8f9756a512->enter($__internal_5a3b2e771da41e217d5d5eb777b9433d130daea0fc93c51b150a9d8f9756a512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        // line 13
        ob_start();
        // line 14
        echo "    <div class=\"editable\">
        <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 16
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) || array_key_exists("read_only_choices", $context) ? $context["read_only_choices"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_choices" does not exist.', 18, $this->getSourceContext()); })())) > 0)) {
            // line 19
            echo "    <div class=\"readonly\">
        <h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) || array_key_exists("read_only_choices", $context) ? $context["read_only_choices"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_choices" does not exist.', 22, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 23
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5a3b2e771da41e217d5d5eb777b9433d130daea0fc93c51b150a9d8f9756a512->leave($__internal_5a3b2e771da41e217d5d5eb777b9433d130daea0fc93c51b150a9d8f9756a512_prof);

        
        $__internal_3bf568d53156d78bb4f3df662a3dcae6718e8eae8efd8e3afc57c4cf94430d15->leave($__internal_3bf568d53156d78bb4f3df662a3dcae6718e8eae8efd8e3afc57c4cf94430d15_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  75 => 23,  71 => 22,  66 => 20,  63 => 19,  61 => 18,  56 => 16,  52 => 15,  49 => 14,  47 => 13,  29 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block sonata_security_roles_widget %}
{% spaceless %}
    <div class=\"editable\">
        <h4>{{ 'field.label_roles_editable'|trans({}, \"SonataUserBundle\") }}</h4>
        {{ block('choice_widget') }}
    </div>
    {% if read_only_choices|length > 0 %}
    <div class=\"readonly\">
        <h4>{{ 'field.label_roles_readonly'|trans({}, \"SonataUserBundle\") }}</h4>
        <ul>
        {% for choice in read_only_choices %}
            <li>{{ choice }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
{% endspaceless %}
{% endblock sonata_security_roles_widget %}
", "SonataUserBundle:Form:form_admin_fields.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/sonata-project/user-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
