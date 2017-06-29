<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_6eb6bde0eb31286581358bb4d9a1cf837109c2dafc08208a874e6c74206561b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9318583292863fd01e2bfe0e0dbb5e912f0ee479a05ebbd3979e4a68f522c931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9318583292863fd01e2bfe0e0dbb5e912f0ee479a05ebbd3979e4a68f522c931->enter($__internal_9318583292863fd01e2bfe0e0dbb5e912f0ee479a05ebbd3979e4a68f522c931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_6eb0c875e679b4e6d354d0e514b352fbaf5db6b17f982ad9d475826266647679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb0c875e679b4e6d354d0e514b352fbaf5db6b17f982ad9d475826266647679->enter($__internal_6eb0c875e679b4e6d354d0e514b352fbaf5db6b17f982ad9d475826266647679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_9318583292863fd01e2bfe0e0dbb5e912f0ee479a05ebbd3979e4a68f522c931->leave($__internal_9318583292863fd01e2bfe0e0dbb5e912f0ee479a05ebbd3979e4a68f522c931_prof);

        
        $__internal_6eb0c875e679b4e6d354d0e514b352fbaf5db6b17f982ad9d475826266647679->leave($__internal_6eb0c875e679b4e6d354d0e514b352fbaf5db6b17f982ad9d475826266647679_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
