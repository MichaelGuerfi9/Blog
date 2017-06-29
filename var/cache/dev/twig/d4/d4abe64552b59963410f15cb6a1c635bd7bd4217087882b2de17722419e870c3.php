<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_477053cc4e67009d61d0279e148da7e285f0a253687525c36a8ae564a826e846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3c6d0076f68269008603c010f4e0a1ac484bff3d37ecba9dd0ac725db83494d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c6d0076f68269008603c010f4e0a1ac484bff3d37ecba9dd0ac725db83494d->enter($__internal_c3c6d0076f68269008603c010f4e0a1ac484bff3d37ecba9dd0ac725db83494d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_1f5d6fa84001dc2baeff27408c6b6ee29114ac1c373e257395462a92e246926d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5d6fa84001dc2baeff27408c6b6ee29114ac1c373e257395462a92e246926d->enter($__internal_1f5d6fa84001dc2baeff27408c6b6ee29114ac1c373e257395462a92e246926d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3c6d0076f68269008603c010f4e0a1ac484bff3d37ecba9dd0ac725db83494d->leave($__internal_c3c6d0076f68269008603c010f4e0a1ac484bff3d37ecba9dd0ac725db83494d_prof);

        
        $__internal_1f5d6fa84001dc2baeff27408c6b6ee29114ac1c373e257395462a92e246926d->leave($__internal_1f5d6fa84001dc2baeff27408c6b6ee29114ac1c373e257395462a92e246926d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
