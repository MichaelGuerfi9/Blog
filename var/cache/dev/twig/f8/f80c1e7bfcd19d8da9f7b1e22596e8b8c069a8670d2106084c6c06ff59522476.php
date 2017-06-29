<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_675f0744b85aeb5ce2beb8093daeb8d92e112b5e4e167d76d5226b3639f0b2bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_209d3e43bd408e2172593a3d8ee3ef902e756d383982f73f2c798a8ae62d0828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209d3e43bd408e2172593a3d8ee3ef902e756d383982f73f2c798a8ae62d0828->enter($__internal_209d3e43bd408e2172593a3d8ee3ef902e756d383982f73f2c798a8ae62d0828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_0601b20bc76c9c2dc6daca31033b588fcfdfbe1123de32a56c582d5a6d3608e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0601b20bc76c9c2dc6daca31033b588fcfdfbe1123de32a56c582d5a6d3608e9->enter($__internal_0601b20bc76c9c2dc6daca31033b588fcfdfbe1123de32a56c582d5a6d3608e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_209d3e43bd408e2172593a3d8ee3ef902e756d383982f73f2c798a8ae62d0828->leave($__internal_209d3e43bd408e2172593a3d8ee3ef902e756d383982f73f2c798a8ae62d0828_prof);

        
        $__internal_0601b20bc76c9c2dc6daca31033b588fcfdfbe1123de32a56c582d5a6d3608e9->leave($__internal_0601b20bc76c9c2dc6daca31033b588fcfdfbe1123de32a56c582d5a6d3608e9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_68e0c9234389f54cdbd8d8a0f03c309eb10c140859f32b157bb7af6b8df44d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e0c9234389f54cdbd8d8a0f03c309eb10c140859f32b157bb7af6b8df44d05->enter($__internal_68e0c9234389f54cdbd8d8a0f03c309eb10c140859f32b157bb7af6b8df44d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a10a178e590d9bfc88e67d40bd00c5398678527f81a9d5506f4e20d6925bbb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10a178e590d9bfc88e67d40bd00c5398678527f81a9d5506f4e20d6925bbb82->enter($__internal_a10a178e590d9bfc88e67d40bd00c5398678527f81a9d5506f4e20d6925bbb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 6
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
        </div>
    </div>
";
        
        $__internal_a10a178e590d9bfc88e67d40bd00c5398678527f81a9d5506f4e20d6925bbb82->leave($__internal_a10a178e590d9bfc88e67d40bd00c5398678527f81a9d5506f4e20d6925bbb82_prof);

        
        $__internal_68e0c9234389f54cdbd8d8a0f03c309eb10c140859f32b157bb7af6b8df44d05->leave($__internal_68e0c9234389f54cdbd8d8a0f03c309eb10c140859f32b157bb7af6b8df44d05_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BlogBundle::layout.html.twig\" %}

{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            {{ include('@FOSUser/Security/login_content.html.twig') }}
        </div>
    </div>
{% endblock content %}
", "@FOSUser/Security/login.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
