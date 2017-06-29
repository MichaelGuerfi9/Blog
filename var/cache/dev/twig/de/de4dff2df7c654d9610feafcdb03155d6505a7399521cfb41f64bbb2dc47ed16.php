<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_3abd525907b605c90cffa4ff667d33f842f541149b0ef4c5f78f10f8d0149b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_486ec90ce8eebe8bfa949b8535b27203aeb22d99c6e76275508d4fecf9814b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486ec90ce8eebe8bfa949b8535b27203aeb22d99c6e76275508d4fecf9814b4c->enter($__internal_486ec90ce8eebe8bfa949b8535b27203aeb22d99c6e76275508d4fecf9814b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        $__internal_d44660d6bb184fc473198d4eacc72399a903ada79f29f6ef94038658c8209101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44660d6bb184fc473198d4eacc72399a903ada79f29f6ef94038658c8209101->enter($__internal_d44660d6bb184fc473198d4eacc72399a903ada79f29f6ef94038658c8209101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        
        $__internal_486ec90ce8eebe8bfa949b8535b27203aeb22d99c6e76275508d4fecf9814b4c->leave($__internal_486ec90ce8eebe8bfa949b8535b27203aeb22d99c6e76275508d4fecf9814b4c_prof);

        
        $__internal_d44660d6bb184fc473198d4eacc72399a903ada79f29f6ef94038658c8209101->leave($__internal_d44660d6bb184fc473198d4eacc72399a903ada79f29f6ef94038658c8209101_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        $__internal_962f543dfe06bba22ef20b04564e33c33a52c68c78fc7fb46cb0ff2cbd56c333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962f543dfe06bba22ef20b04564e33c33a52c68c78fc7fb46cb0ff2cbd56c333->enter($__internal_962f543dfe06bba22ef20b04564e33c33a52c68c78fc7fb46cb0ff2cbd56c333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        $__internal_b1b2396058f20229abf24226c969116281e78b9c6d10d123df6104b7cc9185bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b2396058f20229abf24226c969116281e78b9c6d10d123df6104b7cc9185bf->enter($__internal_b1b2396058f20229abf24226c969116281e78b9c6d10d123df6104b7cc9185bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 12, $this->getSourceContext()); })())) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("data-date-format" => (isset($context["moment_format"]) || array_key_exists("moment_format", $context) ? $context["moment_format"] : (function () { throw new Twig_Error_Runtime('Variable "moment_format" does not exist.', 15, $this->getSourceContext()); })())));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_b1b2396058f20229abf24226c969116281e78b9c6d10d123df6104b7cc9185bf->leave($__internal_b1b2396058f20229abf24226c969116281e78b9c6d10d123df6104b7cc9185bf_prof);

        
        $__internal_962f543dfe06bba22ef20b04564e33c33a52c68c78fc7fb46cb0ff2cbd56c333->leave($__internal_962f543dfe06bba22ef20b04564e33c33a52c68c78fc7fb46cb0ff2cbd56c333_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        $__internal_f9c2f2aa03428d78ed0b6c5abae12926cdff7083e7db6856d625c5c613a80f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c2f2aa03428d78ed0b6c5abae12926cdff7083e7db6856d625c5c613a80f12->enter($__internal_f9c2f2aa03428d78ed0b6c5abae12926cdff7083e7db6856d625c5c613a80f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        $__internal_d688012a186815c7148364384167cb31528e7ba64a0379b481f8ff619ec9d64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d688012a186815c7148364384167cb31528e7ba64a0379b481f8ff619ec9d64f->enter($__internal_d688012a186815c7148364384167cb31528e7ba64a0379b481f8ff619ec9d64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) || array_key_exists("wrap_fields_with_addons", $context) ? $context["wrap_fields_with_addons"] : (function () { throw new Twig_Error_Runtime('Variable "wrap_fields_with_addons" does not exist.', 25, $this->getSourceContext()); })())) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo (((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 34, $this->getSourceContext()); })())) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode((isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 34, $this->getSourceContext()); })()));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d688012a186815c7148364384167cb31528e7ba64a0379b481f8ff619ec9d64f->leave($__internal_d688012a186815c7148364384167cb31528e7ba64a0379b481f8ff619ec9d64f_prof);

        
        $__internal_f9c2f2aa03428d78ed0b6c5abae12926cdff7083e7db6856d625c5c613a80f12->leave($__internal_f9c2f2aa03428d78ed0b6c5abae12926cdff7083e7db6856d625c5c613a80f12_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        $__internal_e608f43ea2560f914df23a9fa34af89edc7f620ecfc9e3890d04f6099d822463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e608f43ea2560f914df23a9fa34af89edc7f620ecfc9e3890d04f6099d822463->enter($__internal_e608f43ea2560f914df23a9fa34af89edc7f620ecfc9e3890d04f6099d822463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        $__internal_8ad700ae57a3640c20fc80f10a036446b85ca7b3ba74d1cd43c886630346008c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad700ae57a3640c20fc80f10a036446b85ca7b3ba74d1cd43c886630346008c->enter($__internal_8ad700ae57a3640c20fc80f10a036446b85ca7b3ba74d1cd43c886630346008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 41, $this->getSourceContext()); })())) {
            // line 42
            echo "        <div class='input-group date' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 44, $this->getSourceContext()); })()), array("data-date-format" => (isset($context["moment_format"]) || array_key_exists("moment_format", $context) ? $context["moment_format"] : (function () { throw new Twig_Error_Runtime('Variable "moment_format" does not exist.', 44, $this->getSourceContext()); })())));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 46, $this->getSourceContext()); })())) {
            // line 47
            echo "          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_8ad700ae57a3640c20fc80f10a036446b85ca7b3ba74d1cd43c886630346008c->leave($__internal_8ad700ae57a3640c20fc80f10a036446b85ca7b3ba74d1cd43c886630346008c_prof);

        
        $__internal_e608f43ea2560f914df23a9fa34af89edc7f620ecfc9e3890d04f6099d822463->leave($__internal_e608f43ea2560f914df23a9fa34af89edc7f620ecfc9e3890d04f6099d822463_prof);

    }

    // line 52
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        $__internal_46dfd351d3ae710282979d3802c4da998d0d7b0f25ec1646d7b3c12f9128c5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dfd351d3ae710282979d3802c4da998d0d7b0f25ec1646d7b3c12f9128c5aa->enter($__internal_46dfd351d3ae710282979d3802c4da998d0d7b0f25ec1646d7b3c12f9128c5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        $__internal_f0a62774134c5d5a8819095f93e6c2a96bdd25451b6f6b9da64dc9bb78272c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a62774134c5d5a8819095f93e6c2a96bdd25451b6f6b9da64dc9bb78272c9c->enter($__internal_f0a62774134c5d5a8819095f93e6c2a96bdd25451b6f6b9da64dc9bb78272c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) || array_key_exists("wrap_fields_with_addons", $context) ? $context["wrap_fields_with_addons"] : (function () { throw new Twig_Error_Runtime('Variable "wrap_fields_with_addons" does not exist.', 54, $this->getSourceContext()); })())) {
            // line 55
            echo "            <div class=\"input-group\">
                ";
            // line 56
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 59
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 61
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 63
        echo (((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 63, $this->getSourceContext()); })())) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 63, $this->getSourceContext()); })()), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode((isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 63, $this->getSourceContext()); })()));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f0a62774134c5d5a8819095f93e6c2a96bdd25451b6f6b9da64dc9bb78272c9c->leave($__internal_f0a62774134c5d5a8819095f93e6c2a96bdd25451b6f6b9da64dc9bb78272c9c_prof);

        
        $__internal_46dfd351d3ae710282979d3802c4da998d0d7b0f25ec1646d7b3c12f9128c5aa->leave($__internal_46dfd351d3ae710282979d3802c4da998d0d7b0f25ec1646d7b3c12f9128c5aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  222 => 63,  218 => 61,  212 => 59,  206 => 56,  203 => 55,  200 => 54,  197 => 53,  188 => 52,  175 => 47,  173 => 46,  168 => 45,  165 => 44,  159 => 42,  156 => 41,  147 => 40,  129 => 34,  125 => 32,  119 => 30,  113 => 27,  110 => 26,  107 => 25,  104 => 24,  95 => 23,  82 => 18,  80 => 17,  75 => 16,  72 => 15,  66 => 13,  63 => 12,  54 => 11,  44 => 52,  41 => 51,  39 => 40,  36 => 39,  34 => 23,  31 => 22,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_date_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('date_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_date_picker_widget_html %}

{% block sonata_type_date_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_date_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_date_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_date_picker_widget %}

{% block sonata_type_datetime_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dtp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('datetime_widget') }}
    {% if datepicker_use_button %}
          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_datetime_picker_widget_html %}

{% block sonata_type_datetime_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_datetime_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_datetime_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_datetime_picker_widget %}
", "SonataCoreBundle:Form:datepicker.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/sonata-project/core-bundle/Resources/views/Form/datepicker.html.twig");
    }
}
