<?php

/* SonataBlockBundle:Profiler:block.html.twig */
class __TwigTemplate_32546246338907557c9f9ac4e0afa98e07f68e51012db28d633bca6c54e608e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "SonataBlockBundle:Profiler:block.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'table' => array($this, 'block_table'),
            'table_v2' => array($this, 'block_table_v2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19f797ac141b4af1bbcd137c60a05ac3c9792cefb7222029de63efd7a26dbc2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f797ac141b4af1bbcd137c60a05ac3c9792cefb7222029de63efd7a26dbc2a->enter($__internal_19f797ac141b4af1bbcd137c60a05ac3c9792cefb7222029de63efd7a26dbc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Profiler:block.html.twig"));

        $__internal_9d680e4235a74f8924174e55280ceed7309074743540acb4e3ff6c59ff0e01b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d680e4235a74f8924174e55280ceed7309074743540acb4e3ff6c59ff0e01b5->enter($__internal_9d680e4235a74f8924174e55280ceed7309074743540acb4e3ff6c59ff0e01b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Profiler:block.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f797ac141b4af1bbcd137c60a05ac3c9792cefb7222029de63efd7a26dbc2a->leave($__internal_19f797ac141b4af1bbcd137c60a05ac3c9792cefb7222029de63efd7a26dbc2a_prof);

        
        $__internal_9d680e4235a74f8924174e55280ceed7309074743540acb4e3ff6c59ff0e01b5->leave($__internal_9d680e4235a74f8924174e55280ceed7309074743540acb4e3ff6c59ff0e01b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04bf264ae8ded62585778f8e715bc34520ebd6387cd4b03963519c6de997304a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bf264ae8ded62585778f8e715bc34520ebd6387cd4b03963519c6de997304a->enter($__internal_04bf264ae8ded62585778f8e715bc34520ebd6387cd4b03963519c6de997304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d30e046f722454fde61884f2df7e19dfbd51fccafcf95a6c1decad6ab4662290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30e046f722454fde61884f2df7e19dfbd51fccafcf95a6c1decad6ab4662290->enter($__internal_d30e046f722454fde61884f2df7e19dfbd51fccafcf95a6c1decad6ab4662290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 4, $this->getSourceContext()); })()), 1)) : (1));
        // line 5
        echo "
    <div class=\"sf-toolbar-block\">
        ";
        // line 7
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 7, $this->getSourceContext()); })()) == 1)) {
            // line 8
            echo "            <div class=\"sf-toolbar-icon\">
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 9, $this->getSourceContext()); })()), "panel" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 9, $this->getSourceContext()); })()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                    <span class=\"sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "getTotalBlock", array(), "method"), "html", null, true);
            echo "</span> blocks
                </a>
            </div>
        ";
        } else {
            // line 15
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 15, $this->getSourceContext()); })()), "panel" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
            echo "\">
                <div class=\"sf-toolbar-icon\">
                    ";
            // line 17
            echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
            echo "
                    <span class=\"sf-toolbar-value\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 18, $this->getSourceContext()); })()), "getTotalBlock", array(), "method"), "html", null, true);
            echo "</span>
                </div>
            </a>
        ";
        }
        // line 22
        echo "
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->getSourceContext()); })()), "realBlocks", array())), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->getSourceContext()); })()), "containers", array())), "html", null, true);
        echo "</span>
            </div>
            ";
        // line 32
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 32, $this->getSourceContext()); })()) == 1)) {
            // line 33
            echo "                ";
            // line 35
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Total Blocks</b>
                    <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->getSourceContext()); })()), "getTotalBlock", array(), "method"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 40
        echo "            <div class=\"sf-toolbar-info-piece\">
                ";
        // line 41
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 41, $this->getSourceContext()); })()) == 1)) {
            echo "<hr />";
        }
        // line 42
        echo "                <b>Events</b>
                <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->getSourceContext()); })()), "events", array())), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
        
        $__internal_d30e046f722454fde61884f2df7e19dfbd51fccafcf95a6c1decad6ab4662290->leave($__internal_d30e046f722454fde61884f2df7e19dfbd51fccafcf95a6c1decad6ab4662290_prof);

        
        $__internal_04bf264ae8ded62585778f8e715bc34520ebd6387cd4b03963519c6de997304a->leave($__internal_04bf264ae8ded62585778f8e715bc34520ebd6387cd4b03963519c6de997304a_prof);

    }

    // line 49
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea48252e3fb8e5aa2eb887ff2c9aaa664a663b7e72fdcde52cc4eecdd41de653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea48252e3fb8e5aa2eb887ff2c9aaa664a663b7e72fdcde52cc4eecdd41de653->enter($__internal_ea48252e3fb8e5aa2eb887ff2c9aaa664a663b7e72fdcde52cc4eecdd41de653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_333243832c4e2b68fbcca12ac274ce009a6107cd43deabfe715d0ebe862c8efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333243832c4e2b68fbcca12ac274ce009a6107cd43deabfe715d0ebe862c8efd->enter($__internal_333243832c4e2b68fbcca12ac274ce009a6107cd43deabfe715d0ebe862c8efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 50
        echo "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 52
        echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
        echo "
        </span>
        <strong>Blocks";
        // line 54
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 54, $this->getSourceContext()); })()), "events", array())) > 0)) {
            echo "<strong>*</strong>";
        }
        echo "</strong>
        <span class=\"count\">
            <span>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_333243832c4e2b68fbcca12ac274ce009a6107cd43deabfe715d0ebe862c8efd->leave($__internal_333243832c4e2b68fbcca12ac274ce009a6107cd43deabfe715d0ebe862c8efd_prof);

        
        $__internal_ea48252e3fb8e5aa2eb887ff2c9aaa664a663b7e72fdcde52cc4eecdd41de653->leave($__internal_ea48252e3fb8e5aa2eb887ff2c9aaa664a663b7e72fdcde52cc4eecdd41de653_prof);

    }

    // line 61
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c658598dffe8ce316572150b731a785ac8c971ca3fb7288a536ef12c86c6bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c658598dffe8ce316572150b731a785ac8c971ca3fb7288a536ef12c86c6bab->enter($__internal_2c658598dffe8ce316572150b731a785ac8c971ca3fb7288a536ef12c86c6bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee54fd368540d67b3f35645574556a005af5ced7697525c0470df53088e2d8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee54fd368540d67b3f35645574556a005af5ced7697525c0470df53088e2d8fa->enter($__internal_ee54fd368540d67b3f35645574556a005af5ced7697525c0470df53088e2d8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 62
        echo "    ";
        // line 63
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 63, $this->getSourceContext()); })()), 1)) : (1));
        // line 64
        echo "
    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 74, $this->getSourceContext()); })()), "events", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 75
            echo "            <tr>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "template_code", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "event_name", array(), "array"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "blocks", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 80
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], 1, array()), "html", null, true);
                echo " (id:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], 0, array()), "html", null, true);
                echo ")
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 82
                echo "                        no block returned
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                </td>
                <td>
                    ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "listeners", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 87
                echo "                        ";
                echo twig_escape_filter($this->env, $context["listener"], "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 89
                echo "                        no listener registered
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    </table>

    <h2>Real Blocks</h2>
    ";
        // line 97
        $context["blocks"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 97, $this->getSourceContext()); })()), "realBlocks", array());
        // line 98
        echo "    ";
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 98, $this->getSourceContext()); })()) == 1)) {
            // line 99
            echo "        ";
            $this->displayBlock("table", $context, $blocks);
            echo "
    ";
        } else {
            // line 101
            echo "        <div class=\"tab-content\">
            ";
            // line 102
            $this->displayBlock("table_v2", $context, $blocks);
            echo "
        </div>
    ";
        }
        // line 105
        echo "
    <h2>Containers Blocks</h2>
    ";
        // line 107
        $context["blocks"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 107, $this->getSourceContext()); })()), "containers", array());
        // line 108
        echo "    ";
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 108, $this->getSourceContext()); })()) == 1)) {
            // line 109
            echo "        ";
            $this->displayBlock("table", $context, $blocks);
            echo "
    ";
        } else {
            // line 111
            echo "        <div class=\"tab-content\">
            ";
            // line 112
            $this->displayBlock("table_v2", $context, $blocks);
            echo "
        </div>
    ";
        }
        // line 115
        echo "
";
        
        $__internal_ee54fd368540d67b3f35645574556a005af5ced7697525c0470df53088e2d8fa->leave($__internal_ee54fd368540d67b3f35645574556a005af5ced7697525c0470df53088e2d8fa_prof);

        
        $__internal_2c658598dffe8ce316572150b731a785ac8c971ca3fb7288a536ef12c86c6bab->leave($__internal_2c658598dffe8ce316572150b731a785ac8c971ca3fb7288a536ef12c86c6bab_prof);

    }

    // line 118
    public function block_table($context, array $blocks = array())
    {
        $__internal_fb87d9949202a7f4607f1719facce65af374286514a89bea68d7892b6b72c400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb87d9949202a7f4607f1719facce65af374286514a89bea68d7892b6b72c400->enter($__internal_fb87d9949202a7f4607f1719facce65af374286514a89bea68d7892b6b72c400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_27394425cee613c53d3bb1f1214c149e80e3307392af2be9cc767726ea917086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27394425cee613c53d3bb1f1214c149e80e3307392af2be9cc767726ea917086->enter($__internal_27394425cee613c53d3bb1f1214c149e80e3307392af2be9cc767726ea917086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 119
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 128, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 129
            echo "
            ";
            // line 130
            $context["rowspan"] = 1;
            // line 131
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "handler", array())) {
                // line 132
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) || array_key_exists("rowspan", $context) ? $context["rowspan"] : (function () { throw new Twig_Error_Runtime('Variable "rowspan" does not exist.', 132, $this->getSourceContext()); })()) + 1);
                // line 133
                echo "            ";
            }
            // line 134
            echo "
            ";
            // line 135
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "js", array())) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "css", array())) > 0))) {
                // line 136
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) || array_key_exists("rowspan", $context) ? $context["rowspan"] : (function () { throw new Twig_Error_Runtime('Variable "rowspan" does not exist.', 136, $this->getSourceContext()); })()) + 1);
                // line 137
                echo "            ";
            }
            // line 138
            echo "            <tr>
                <th style=\"vertical-align: top\" rowspan=\"";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["rowspan"]) || array_key_exists("rowspan", $context) ? $context["rowspan"] : (function () { throw new Twig_Error_Runtime('Variable "rowspan" does not exist.', 139, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</th>
                <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "memory_end", array()) - twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "memory_start", array())) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "memory_peak", array()) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "duration", array()), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 147
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "handler", array())) {
                // line 148
                echo "                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>";
                // line 150
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "keys", array())), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 151
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "contextual_keys", array())), "html", null, true);
                echo "</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: ";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "ttl", array()), "html", null, true);
                echo "s. <br />
                        Lifetime: ";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "lifetime", array()), "html", null, true);
                echo "s. <br />
                        Backend: ";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "handler", array()), "html", null, true);
                echo " <br />
                        Loading from cache: ";
                // line 157
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "from_cache", array())) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                echo " <br />
                    </td>
                </tr>
            ";
            }
            // line 161
            echo "
            ";
            // line 162
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "js", array())) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "css", array())) > 0))) {
                // line 163
                echo "                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>";
                // line 165
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "js", array())), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 166
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "css", array())), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 170
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "    </table>
";
        
        $__internal_27394425cee613c53d3bb1f1214c149e80e3307392af2be9cc767726ea917086->leave($__internal_27394425cee613c53d3bb1f1214c149e80e3307392af2be9cc767726ea917086_prof);

        
        $__internal_fb87d9949202a7f4607f1719facce65af374286514a89bea68d7892b6b72c400->leave($__internal_fb87d9949202a7f4607f1719facce65af374286514a89bea68d7892b6b72c400_prof);

    }

    // line 175
    public function block_table_v2($context, array $blocks = array())
    {
        $__internal_4f9f83901d04af677e0fd6c1cf629224d3b11ddf463769f75779a0960da89050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9f83901d04af677e0fd6c1cf629224d3b11ddf463769f75779a0960da89050->enter($__internal_4f9f83901d04af677e0fd6c1cf629224d3b11ddf463769f75779a0960da89050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_v2"));

        $__internal_886e9f36861ed500a070847a4f38db9f9fa9ff373fd46767887599e2c92ab7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886e9f36861ed500a070847a4f38db9f9fa9ff373fd46767887599e2c92ab7cd->enter($__internal_886e9f36861ed500a070847a4f38db9f9fa9ff373fd46767887599e2c92ab7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_v2"));

        // line 176
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 176, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 177
            echo "        <table>
            <thead>
            <tr>
                <th colspan=\"2\">Block ";
            // line 180
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Name</th>
                <td>";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "name", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "type", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Mem. diff / Mem. peak / Duration</th>
                <td>";
            // line 194
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "memory_end", array()) - twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "memory_start", array())) / 1000), 0), "html", null, true);
            echo " Kb / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "memory_peak", array()) / 1000), 0), "html", null, true);
            echo " Kb / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "duration", array()), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 197
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "handler", array())) {
                // line 198
                echo "                <tr>
                    <th>Cache backend</th>
                    <td>
                        ";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "handler", array()), "html", null, true);
                echo " - Loading from cache: ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "from_cache", array())) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                // line 202
                echo "                    </td>
                </tr>
                <tr>
                    <th>Cache TTL / Lifetime</th>
                    <td>
                        ";
                // line 207
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "ttl", array()), "html", null, true);
                echo "s. / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "lifetime", array()), "html", null, true);
                echo "s
                    </td>
                </tr>
                <tr>
                    <th>
                        Cache Informations
                    </th>
                    <td>
                        Cache Keys: <pre>";
                // line 215
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "keys", array())), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 216
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "cache", array()), "contextual_keys", array())), "html", null, true);
                echo "</pre> <br />
                    </td>
                </tr>
            ";
            }
            // line 220
            echo "
            ";
            // line 221
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "js", array())) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "css", array())) > 0))) {
                // line 222
                echo "                <tr>
                    <th>Assets</th>
                    <td>
                        Javascripts: <pre>";
                // line 225
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "js", array())), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 226
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "assets", array()), "css", array())), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 230
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_886e9f36861ed500a070847a4f38db9f9fa9ff373fd46767887599e2c92ab7cd->leave($__internal_886e9f36861ed500a070847a4f38db9f9fa9ff373fd46767887599e2c92ab7cd_prof);

        
        $__internal_4f9f83901d04af677e0fd6c1cf629224d3b11ddf463769f75779a0960da89050->leave($__internal_4f9f83901d04af677e0fd6c1cf629224d3b11ddf463769f75779a0960da89050_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Profiler:block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 230,  617 => 226,  613 => 225,  608 => 222,  606 => 221,  603 => 220,  596 => 216,  592 => 215,  579 => 207,  572 => 202,  564 => 201,  559 => 198,  557 => 197,  547 => 194,  540 => 190,  533 => 186,  524 => 180,  519 => 177,  514 => 176,  505 => 175,  494 => 172,  487 => 170,  480 => 166,  476 => 165,  472 => 163,  470 => 162,  467 => 161,  456 => 157,  452 => 156,  448 => 155,  444 => 154,  438 => 151,  434 => 150,  430 => 148,  428 => 147,  422 => 144,  418 => 143,  414 => 142,  410 => 141,  406 => 140,  400 => 139,  397 => 138,  394 => 137,  391 => 136,  389 => 135,  386 => 134,  383 => 133,  380 => 132,  377 => 131,  375 => 130,  372 => 129,  368 => 128,  357 => 119,  348 => 118,  337 => 115,  331 => 112,  328 => 111,  322 => 109,  319 => 108,  317 => 107,  313 => 105,  307 => 102,  304 => 101,  298 => 99,  295 => 98,  293 => 97,  288 => 94,  280 => 91,  273 => 89,  265 => 87,  260 => 86,  256 => 84,  249 => 82,  239 => 80,  234 => 79,  229 => 77,  225 => 76,  222 => 75,  218 => 74,  206 => 64,  203 => 63,  201 => 62,  192 => 61,  178 => 56,  171 => 54,  166 => 52,  162 => 50,  153 => 49,  138 => 43,  135 => 42,  131 => 41,  128 => 40,  122 => 37,  118 => 35,  116 => 33,  114 => 32,  109 => 30,  102 => 26,  96 => 22,  89 => 18,  85 => 17,  79 => 15,  72 => 11,  69 => 10,  65 => 9,  62 => 8,  60 => 7,  56 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <div class=\"sf-toolbar-block\">
        {% if profiler_markup_version == 1 %}
            <div class=\"sf-toolbar-icon\">
                <a href=\"{{ path('_profiler', { 'token': token, 'panel': name }) }}\">
                    {# fake image span #}<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                    <span class=\"sf-toolbar-status\">{{ collector.getTotalBlock() }}</span> blocks
                </a>
            </div>
        {% else %}
            <a href=\"{{ path('_profiler', { 'token': token, 'panel': name }) }}\">
                <div class=\"sf-toolbar-icon\">
                    {{ include('@SonataBlock/Profiler/icon.svg') }}
                    <span class=\"sf-toolbar-value\">{{ collector.getTotalBlock() }}</span>
                </div>
            </a>
        {% endif %}

        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>{{ collector.realBlocks|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>{{ collector.containers|length }}</span>
            </div>
            {% if profiler_markup_version == 1 %}
                {# don't show the total number of blocks in the info in the new design,
                it's already shown in the toolbar #}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Total Blocks</b>
                    <span>{{ collector.getTotalBlock() }}</span>
                </div>
            {% endif %}
            <div class=\"sf-toolbar-info-piece\">
                {% if profiler_markup_version == 1 %}<hr />{% endif %}
                <b>Events</b>
                <span>{{ collector.events|length }}</span>
            </div>
        </div>
    </div>
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">
            {{ include('@SonataBlock/Profiler/icon.svg') }}
        </span>
        <strong>Blocks{% if collector.events|length > 0 %}<strong>*</strong>{% endif %}</strong>
        <span class=\"count\">
            <span>{{ collector.getTotalBlock() }}</span>
        </span>
    </span>
{% endblock %}

{% block panel %}
    {# NEXT_MAJOR : remove this when Symfony Requirement will be bumped to 2.8+ #}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        {% for event in collector.events %}
            <tr>
                <td>{{ event['template_code'] }}</td>
                <td>{{ event['event_name'] }}</td>
                <td>
                    {% for type in event['blocks'] %}
                        {{ type.1 }} (id:{{ type.0 }})
                    {% else %}
                        no block returned
                    {% endfor %}
                </td>
                <td>
                    {% for listener in event['listeners'] %}
                        {{ listener }}
                    {% else %}
                        no listener registered
                    {% endfor %}
                </td>
            </tr>
        {% endfor %}
    </table>

    <h2>Real Blocks</h2>
    {% set blocks = collector.realBlocks %}
    {% if profiler_markup_version == 1 %}
        {{ block('table') }}
    {% else %}
        <div class=\"tab-content\">
            {{ block('table_v2') }}
        </div>
    {% endif %}

    <h2>Containers Blocks</h2>
    {% set blocks = collector.containers %}
    {% if profiler_markup_version == 1 %}
        {{ block('table') }}
    {% else %}
        <div class=\"tab-content\">
            {{ block('table_v2') }}
        </div>
    {% endif %}

{% endblock %}

{% block table %}
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        {% for id, block in blocks %}

            {% set rowspan = 1 %}
            {% if block.cache.handler %}
                {% set rowspan = rowspan + 1 %}
            {% endif %}

            {% if block.assets.js|length > 0 or block.assets.css|length > 0 %}
                {% set rowspan = rowspan + 1 %}
            {% endif %}
            <tr>
                <th style=\"vertical-align: top\" rowspan=\"{{ rowspan }}\">{{ id }}</th>
                <td>{{ block.name }}</td>
                <td>{{ block.type }}</td>
                <td>{{ ((block.memory_end-block.memory_start)/1000)|number_format(0) }} Kb</td>
                <td>{{ (block.memory_peak/1000)|number_format(0) }} Kb</td>
                <td>{{ block.duration|number_format(2) }} ms</td>
            </tr>

            {% if block.cache.handler %}
                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>{{ block.cache.keys|json_encode() }}</pre> <br />
                        Contextual Keys: <pre>{{ block.cache.contextual_keys|json_encode() }}</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: {{ block.cache.ttl }}s. <br />
                        Lifetime: {{ block.cache.lifetime }}s. <br />
                        Backend: {{ block.cache.handler }} <br />
                        Loading from cache: {% if block.cache.from_cache %}YES{% else %}NO{% endif %} <br />
                    </td>
                </tr>
            {% endif %}

            {% if block.assets.js|length > 0 or block.assets.css|length > 0  %}
                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>{{ block.assets.js|json_encode() }}</pre><br />
                        Stylesheets: <pre>{{ block.assets.css|json_encode() }}</pre>
                    </td>
                </tr>
            {% endif %}

        {% endfor %}
    </table>
{% endblock %}

{% block table_v2 %}
    {% for id, block in blocks %}
        <table>
            <thead>
            <tr>
                <th colspan=\"2\">Block {{ id }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Name</th>
                <td>{{ block.name }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ block.type }}</td>
            </tr>
            <tr>
                <th>Mem. diff / Mem. peak / Duration</th>
                <td>{{ ((block.memory_end-block.memory_start)/1000)|number_format(0) }} Kb / {{ (block.memory_peak/1000)|number_format(0) }} Kb / {{ block.duration|number_format(2) }} ms</td>
            </tr>

            {% if block.cache.handler %}
                <tr>
                    <th>Cache backend</th>
                    <td>
                        {{ block.cache.handler }} - Loading from cache: {% if block.cache.from_cache %}YES{% else %}NO{% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Cache TTL / Lifetime</th>
                    <td>
                        {{ block.cache.ttl }}s. / {{ block.cache.lifetime }}s
                    </td>
                </tr>
                <tr>
                    <th>
                        Cache Informations
                    </th>
                    <td>
                        Cache Keys: <pre>{{ block.cache.keys|json_encode() }}</pre> <br />
                        Contextual Keys: <pre>{{ block.cache.contextual_keys|json_encode() }}</pre> <br />
                    </td>
                </tr>
            {% endif %}

            {% if block.assets.js|length > 0 or block.assets.css|length > 0  %}
                <tr>
                    <th>Assets</th>
                    <td>
                        Javascripts: <pre>{{ block.assets.js|json_encode() }}</pre><br />
                        Stylesheets: <pre>{{ block.assets.css|json_encode() }}</pre>
                    </td>
                </tr>
            {% endif %}
            </tbody>
        </table>
    {% endfor %}
{% endblock %}
", "SonataBlockBundle:Profiler:block.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/sonata-project/block-bundle/Resources/views/Profiler/block.html.twig");
    }
}
