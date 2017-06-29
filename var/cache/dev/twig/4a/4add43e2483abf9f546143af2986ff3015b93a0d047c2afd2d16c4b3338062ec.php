<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_6d5ef80e908fc1aec1cfe05b5c153ef4ce744dae314ae8ef523a934e76d456a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8b188f945e7bd4f6e129bec6ab3366bddd69ce3f4be5e28448cad97ebbecfcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b188f945e7bd4f6e129bec6ab3366bddd69ce3f4be5e28448cad97ebbecfcd9->enter($__internal_8b188f945e7bd4f6e129bec6ab3366bddd69ce3f4be5e28448cad97ebbecfcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_c8361da0bdacfd17b2634d1587faa5b8d75005047370b1e10384414bdcede9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8361da0bdacfd17b2634d1587faa5b8d75005047370b1e10384414bdcede9ac->enter($__internal_c8361da0bdacfd17b2634d1587faa5b8d75005047370b1e10384414bdcede9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b188f945e7bd4f6e129bec6ab3366bddd69ce3f4be5e28448cad97ebbecfcd9->leave($__internal_8b188f945e7bd4f6e129bec6ab3366bddd69ce3f4be5e28448cad97ebbecfcd9_prof);

        
        $__internal_c8361da0bdacfd17b2634d1587faa5b8d75005047370b1e10384414bdcede9ac->leave($__internal_c8361da0bdacfd17b2634d1587faa5b8d75005047370b1e10384414bdcede9ac_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d38e826646a4fbd1a0e1b47140ce67fe305e75a92a626b1575d3535472826dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38e826646a4fbd1a0e1b47140ce67fe305e75a92a626b1575d3535472826dc8->enter($__internal_d38e826646a4fbd1a0e1b47140ce67fe305e75a92a626b1575d3535472826dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0e3a8e7f61f3294aaf030e130417f10b95449a5eae0fba8fce250f49162846bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3a8e7f61f3294aaf030e130417f10b95449a5eae0fba8fce250f49162846bf->enter($__internal_0e3a8e7f61f3294aaf030e130417f10b95449a5eae0fba8fce250f49162846bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 6
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 6)->display($context);
        // line 7
        echo "        </div>
    </div>
";
        
        $__internal_0e3a8e7f61f3294aaf030e130417f10b95449a5eae0fba8fce250f49162846bf->leave($__internal_0e3a8e7f61f3294aaf030e130417f10b95449a5eae0fba8fce250f49162846bf_prof);

        
        $__internal_d38e826646a4fbd1a0e1b47140ce67fe305e75a92a626b1575d3535472826dc8->leave($__internal_d38e826646a4fbd1a0e1b47140ce67fe305e75a92a626b1575d3535472826dc8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BlogBundle::layout.html.twig\" %}

{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            {% include \"@FOSUser/Registration/register_content.html.twig\" %}
        </div>
    </div>
{% endblock content %}
", "@FOSUser/Registration/register.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
