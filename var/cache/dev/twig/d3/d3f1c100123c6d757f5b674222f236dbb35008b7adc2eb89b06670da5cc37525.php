<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_bc304e969b086a86c4460a729aa4ebb627d31fb54b031a24d8573273032c3c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_234f6c26b1ad88aae0a239161b2aa82fb668f262277cccdc01085db3c180bd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234f6c26b1ad88aae0a239161b2aa82fb668f262277cccdc01085db3c180bd4f->enter($__internal_234f6c26b1ad88aae0a239161b2aa82fb668f262277cccdc01085db3c180bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_0301ecf3a985834b91a54c24aa22fa73eb6cb8b66610d5e1fe72b683183676fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0301ecf3a985834b91a54c24aa22fa73eb6cb8b66610d5e1fe72b683183676fa->enter($__internal_0301ecf3a985834b91a54c24aa22fa73eb6cb8b66610d5e1fe72b683183676fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_234f6c26b1ad88aae0a239161b2aa82fb668f262277cccdc01085db3c180bd4f->leave($__internal_234f6c26b1ad88aae0a239161b2aa82fb668f262277cccdc01085db3c180bd4f_prof);

        
        $__internal_0301ecf3a985834b91a54c24aa22fa73eb6cb8b66610d5e1fe72b683183676fa->leave($__internal_0301ecf3a985834b91a54c24aa22fa73eb6cb8b66610d5e1fe72b683183676fa_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_5a00ff16ae0db29191c0b05ec9cd7fec7f001952252e1c1b26e4e33f0ede471f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a00ff16ae0db29191c0b05ec9cd7fec7f001952252e1c1b26e4e33f0ede471f->enter($__internal_5a00ff16ae0db29191c0b05ec9cd7fec7f001952252e1c1b26e4e33f0ede471f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_10ee801df659ac9b6769707677b7f9bff68afb5b30632c3e03c7e81ff388dc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ee801df659ac9b6769707677b7f9bff68afb5b30632c3e03c7e81ff388dc95->enter($__internal_10ee801df659ac9b6769707677b7f9bff68afb5b30632c3e03c7e81ff388dc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "extra", array(0 => "request"), "method")) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "extra", array(0 => "request"), "method")) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_10ee801df659ac9b6769707677b7f9bff68afb5b30632c3e03c7e81ff388dc95->leave($__internal_10ee801df659ac9b6769707677b7f9bff68afb5b30632c3e03c7e81ff388dc95_prof);

        
        $__internal_5a00ff16ae0db29191c0b05ec9cd7fec7f001952252e1c1b26e4e33f0ede471f->leave($__internal_5a00ff16ae0db29191c0b05ec9cd7fec7f001952252e1c1b26e4e33f0ede471f_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_1210a167b16942b445906118d5b3787af52f5eda644aee3b3bc58b7929304734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1210a167b16942b445906118d5b3787af52f5eda644aee3b3bc58b7929304734->enter($__internal_1210a167b16942b445906118d5b3787af52f5eda644aee3b3bc58b7929304734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_a5a318a1c3b0b5a33a5a4e2f6f216d2b20ae65b0bdc4e0b30839c009c87fa8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a318a1c3b0b5a33a5a4e2f6f216d2b20ae65b0bdc4e0b30839c009c87fa8f3->enter($__internal_a5a318a1c3b0b5a33a5a4e2f6f216d2b20ae65b0bdc4e0b30839c009c87fa8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 10, $this->getSourceContext()); })()), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 12, $this->getSourceContext()); })()), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 13, $this->getSourceContext()); })()), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 13, $this->getSourceContext()); })())) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 18, $this->getSourceContext()); })()))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 19, $this->getSourceContext()); })()), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->getSourceContext()); })()), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->getSourceContext()); })()), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_a5a318a1c3b0b5a33a5a4e2f6f216d2b20ae65b0bdc4e0b30839c009c87fa8f3->leave($__internal_a5a318a1c3b0b5a33a5a4e2f6f216d2b20ae65b0bdc4e0b30839c009c87fa8f3_prof);

        
        $__internal_1210a167b16942b445906118d5b3787af52f5eda644aee3b3bc58b7929304734->leave($__internal_1210a167b16942b445906118d5b3787af52f5eda644aee3b3bc58b7929304734_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_3dfb2c5aeddc00e8accb52bf6be36a0ddd28cf172c0f8eff2ce6699574d2cdda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfb2c5aeddc00e8accb52bf6be36a0ddd28cf172c0f8eff2ce6699574d2cdda->enter($__internal_3dfb2c5aeddc00e8accb52bf6be36a0ddd28cf172c0f8eff2ce6699574d2cdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_fb0815e7190b7fba47e05f0d238890e58dc2e2420fb24a3a918e1f8333396664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0815e7190b7fba47e05f0d238890e58dc2e2420fb24a3a918e1f8333396664->enter($__internal_fb0815e7190b7fba47e05f0d238890e58dc2e2420fb24a3a918e1f8333396664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })()), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 29, $this->getSourceContext()); })()), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method"), (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 32, $this->getSourceContext()); })()), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fb0815e7190b7fba47e05f0d238890e58dc2e2420fb24a3a918e1f8333396664->leave($__internal_fb0815e7190b7fba47e05f0d238890e58dc2e2420fb24a3a918e1f8333396664_prof);

        
        $__internal_3dfb2c5aeddc00e8accb52bf6be36a0ddd28cf172c0f8eff2ce6699574d2cdda->leave($__internal_3dfb2c5aeddc00e8accb52bf6be36a0ddd28cf172c0f8eff2ce6699574d2cdda_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_685f706a91c0e39b3def0239848bdbbff81ab7513ed2e5625e8961f51bf7df75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685f706a91c0e39b3def0239848bdbbff81ab7513ed2e5625e8961f51bf7df75->enter($__internal_685f706a91c0e39b3def0239848bdbbff81ab7513ed2e5625e8961f51bf7df75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_fad5bf66e7dbbd26ec3c455633ee0bcef69e07ef69ccf47079226a605513cea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad5bf66e7dbbd26ec3c455633ee0bcef69e07ef69ccf47079226a605513cea6->enter($__internal_fad5bf66e7dbbd26ec3c455633ee0bcef69e07ef69ccf47079226a605513cea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 42, $this->getSourceContext()); })()), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 44, $this->getSourceContext()); })());
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 46, $this->getSourceContext()); })()), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fad5bf66e7dbbd26ec3c455633ee0bcef69e07ef69ccf47079226a605513cea6->leave($__internal_fad5bf66e7dbbd26ec3c455633ee0bcef69e07ef69ccf47079226a605513cea6_prof);

        
        $__internal_685f706a91c0e39b3def0239848bdbbff81ab7513ed2e5625e8961f51bf7df75->leave($__internal_685f706a91c0e39b3def0239848bdbbff81ab7513ed2e5625e8961f51bf7df75_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_d075e9a51d6ef67de4865af4d7bc9b5662c5883c547991e615e5b539d2f7d22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d075e9a51d6ef67de4865af4d7bc9b5662c5883c547991e615e5b539d2f7d22e->enter($__internal_d075e9a51d6ef67de4865af4d7bc9b5662c5883c547991e615e5b539d2f7d22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_7e954a36791341be4a6d18b1afd1ef5224f373e39fa56a4299a2e7a395fb11f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e954a36791341be4a6d18b1afd1ef5224f373e39fa56a4299a2e7a395fb11f0->enter($__internal_7e954a36791341be4a6d18b1afd1ef5224f373e39fa56a4299a2e7a395fb11f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) || array_key_exists("is_link", $context) ? $context["is_link"] : (function () { throw new Twig_Error_Runtime('Variable "is_link" does not exist.', 53, $this->getSourceContext()); })()))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 53, $this->getSourceContext()); })()))) : (""));
        }
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 53, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 53, $this->getSourceContext()); })()), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_7e954a36791341be4a6d18b1afd1ef5224f373e39fa56a4299a2e7a395fb11f0->leave($__internal_7e954a36791341be4a6d18b1afd1ef5224f373e39fa56a4299a2e7a395fb11f0_prof);

        
        $__internal_d075e9a51d6ef67de4865af4d7bc9b5662c5883c547991e615e5b539d2f7d22e->leave($__internal_d075e9a51d6ef67de4865af4d7bc9b5662c5883c547991e615e5b539d2f7d22e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
