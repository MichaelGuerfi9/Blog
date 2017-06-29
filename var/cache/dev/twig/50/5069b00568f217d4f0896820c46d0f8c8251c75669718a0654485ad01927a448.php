<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_5e8ab57d0382232d2429f022b1fa26bbc52345edf43d4941b5c32794f355072b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_260a5d8c3d027c995533fba4b03fde69c282e955e719afe2be2848a7cbf56bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260a5d8c3d027c995533fba4b03fde69c282e955e719afe2be2848a7cbf56bc0->enter($__internal_260a5d8c3d027c995533fba4b03fde69c282e955e719afe2be2848a7cbf56bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        $__internal_a31a14e965e0261151d6473792baf2213fe2367d8848fc21f741cbdc5625c0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31a14e965e0261151d6473792baf2213fe2367d8848fc21f741cbdc5625c0db->enter($__internal_a31a14e965e0261151d6473792baf2213fe2367d8848fc21f741cbdc5625c0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_260a5d8c3d027c995533fba4b03fde69c282e955e719afe2be2848a7cbf56bc0->leave($__internal_260a5d8c3d027c995533fba4b03fde69c282e955e719afe2be2848a7cbf56bc0_prof);

        
        $__internal_a31a14e965e0261151d6473792baf2213fe2367d8848fc21f741cbdc5625c0db->leave($__internal_a31a14e965e0261151d6473792baf2213fe2367d8848fc21f741cbdc5625c0db_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_477560b651da8a1ac41422fd29029220f82bd139737ae6ff5a879578a10fa5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477560b651da8a1ac41422fd29029220f82bd139737ae6ff5a879578a10fa5fd->enter($__internal_477560b651da8a1ac41422fd29029220f82bd139737ae6ff5a879578a10fa5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_86b0f0a2ecacd0ea2398fabfd14b93b827bc8119b2cbc8fb0c202ea977e4d81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b0f0a2ecacd0ea2398fabfd14b93b827bc8119b2cbc8fb0c202ea977e4d81d->enter($__internal_86b0f0a2ecacd0ea2398fabfd14b93b827bc8119b2cbc8fb0c202ea977e4d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 13
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "user", array())) {
            // line 14
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 15
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_admin_security_logout");
            // line 16
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 17
            echo "        ";
            $context["_profile_uri"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 17, $this->getSourceContext()); })()), "userAdmin", array()), "isGranted", array(0 => "EDIT", 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "user", array())), "method")) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 17, $this->getSourceContext()); })()), "userAdmin", array()), "generateUrl", array(0 => "edit", 1 => array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "user", array()), "id", array()))), "method")) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 17, $this->getSourceContext()); })()), "userAdmin", array()), "generateUrl", array(0 => "show", 1 => array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "user", array()), "id", array()))), "method")));
            // line 18
            echo "        ";
            $context["_profile_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_profile", array(), "SonataUserBundle");
            // line 19
            echo "        ";
            $context["_user_image"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 19, $this->getSourceContext()); })()), "defaultAvatar", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 19, $this->getSourceContext()); })()), "defaultAvatar", array()))) : (null));
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            // line 22
            echo "
        ";
            // line 23
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 23, $this->getSourceContext()); })()), "impersonating", array()))) {
                // line 24
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 25
                echo "            ";
                $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 25, $this->getSourceContext()); })()), "impersonating", array()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 25, $this->getSourceContext()); })()), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit")));
                // line 26
                echo "            ";
                $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("switch_user_exit", array(), "SonataUserBundle");
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        <li class=\"user-header ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) || array_key_exists("_bg_class", $context) ? $context["_bg_class"] : (function () { throw new Twig_Error_Runtime('Variable "_bg_class" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
            ";
            // line 30
            if ((isset($context["_user_image"]) || array_key_exists("_user_image", $context) ? $context["_user_image"] : (function () { throw new Twig_Error_Runtime('Variable "_user_image" does not exist.', 30, $this->getSourceContext()); })())) {
                // line 31
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["_user_image"]) || array_key_exists("_user_image", $context) ? $context["_user_image"] : (function () { throw new Twig_Error_Runtime('Variable "_user_image" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 33
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->getSourceContext()); })()), "user", array()), "html", null, true);
            echo "</p>
        </li>

";
            // line 42
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["_profile_uri"]) || array_key_exists("_profile_uri", $context) ? $context["_profile_uri"] : (function () { throw new Twig_Error_Runtime('Variable "_profile_uri" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_profile_text"]) || array_key_exists("_profile_text", $context) ? $context["_profile_text"] : (function () { throw new Twig_Error_Runtime('Variable "_profile_text" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) || array_key_exists("_logout_uri", $context) ? $context["_logout_uri"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_uri" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) || array_key_exists("_logout_text", $context) ? $context["_logout_text"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_text" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
        
        $__internal_86b0f0a2ecacd0ea2398fabfd14b93b827bc8119b2cbc8fb0c202ea977e4d81d->leave($__internal_86b0f0a2ecacd0ea2398fabfd14b93b827bc8119b2cbc8fb0c202ea977e4d81d_prof);

        
        $__internal_477560b651da8a1ac41422fd29029220f82bd139737ae6ff5a879578a10fa5fd->leave($__internal_477560b651da8a1ac41422fd29029220f82bd139737ae6ff5a879578a10fa5fd_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 49,  116 => 45,  111 => 42,  104 => 33,  98 => 31,  96 => 30,  92 => 29,  89 => 28,  86 => 27,  83 => 26,  80 => 25,  77 => 24,  75 => 23,  72 => 22,  70 => 21,  68 => 20,  65 => 19,  62 => 18,  59 => 17,  56 => 16,  53 => 15,  50 => 14,  47 => 13,  29 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block user_block %}
    {% if app.user %}
        {% set _bg_class          = \"bg-light-blue\" %}
        {% set _logout_uri        = url('sonata_user_admin_security_logout') %}
        {% set _logout_text       = 'user_block_logout'|trans({}, 'SonataUserBundle') %}
        {% set _profile_uri       = sonata_user.userAdmin.isGranted('EDIT', app.user) ? sonata_user.userAdmin.generateUrl('edit', {id: app.user.id}) : sonata_user.userAdmin.generateUrl('show', {id: app.user.id}) %}
        {% set _profile_text      = 'user_block_profile'|trans({}, 'SonataUserBundle') %}
        {% set _user_image        = sonata_user.defaultAvatar ? asset(sonata_user.defaultAvatar) : null %}
        {# Customize this with your profile picture implementation, see below for example #}
        {#{% set _user_image  = app.user.profilePicture|default(asset(sonata_user.defaultAvatar)) %}#}

        {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}
            {% set _bg_class    = \"bg-light-green\" %}
            {% set _logout_uri  = url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) %}
            {% set _logout_text = 'switch_user_exit'|trans({}, 'SonataUserBundle') %}
        {% endif %}

        <li class=\"user-header {{ _bg_class }}\">
            {% if _user_image %}
                <img src=\"{{ _user_image }}\" class=\"img-circle\" alt=\"Avatar\" />
            {% endif %}
            <p>{{ app.user }}</p>
        </li>

{#
    Uncomment to add some information
        <li class=\"user-body\">

        </li>
#}

        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"{{ _profile_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> {{ _profile_text }}</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"{{ _logout_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> {{ _logout_text }}</a>
            </div>
        </li>
    {% endif %}
{% endblock %}
", "SonataUserBundle:Admin/Core:user_block.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/sonata-project/user-bundle/Resources/views/Admin/Core/user_block.html.twig");
    }
}
