<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_21d02cec2661196a7d9c32b295f43eefb51acdfcea9da16cec14a52d4ecc5ca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b2a1434c964db743e90f062f9ca212282fd715b4e5cecccb33a7098ba53c34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2a1434c964db743e90f062f9ca212282fd715b4e5cecccb33a7098ba53c34e->enter($__internal_5b2a1434c964db743e90f062f9ca212282fd715b4e5cecccb33a7098ba53c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_f98996a4a18ef5b98e0b20c0aee0fbc7162b5d29ab144c320011ebb4948f91e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98996a4a18ef5b98e0b20c0aee0fbc7162b5d29ab144c320011ebb4948f91e6->enter($__internal_f98996a4a18ef5b98e0b20c0aee0fbc7162b5d29ab144c320011ebb4948f91e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_5b2a1434c964db743e90f062f9ca212282fd715b4e5cecccb33a7098ba53c34e->leave($__internal_5b2a1434c964db743e90f062f9ca212282fd715b4e5cecccb33a7098ba53c34e_prof);

        
        $__internal_f98996a4a18ef5b98e0b20c0aee0fbc7162b5d29ab144c320011ebb4948f91e6->leave($__internal_f98996a4a18ef5b98e0b20c0aee0fbc7162b5d29ab144c320011ebb4948f91e6_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_48eca163fd1737cc873219c3d211e1c67649255d98f9431da4567337e4fb7cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48eca163fd1737cc873219c3d211e1c67649255d98f9431da4567337e4fb7cdb->enter($__internal_48eca163fd1737cc873219c3d211e1c67649255d98f9431da4567337e4fb7cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_b970c56328fcb775699d7351ee3b5405a0b61c470b6fd656f1f6b0fc3b41bf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b970c56328fcb775699d7351ee3b5405a0b61c470b6fd656f1f6b0fc3b41bf49->enter($__internal_b970c56328fcb775699d7351ee3b5405a0b61c470b6fd656f1f6b0fc3b41bf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_b970c56328fcb775699d7351ee3b5405a0b61c470b6fd656f1f6b0fc3b41bf49->leave($__internal_b970c56328fcb775699d7351ee3b5405a0b61c470b6fd656f1f6b0fc3b41bf49_prof);

        
        $__internal_48eca163fd1737cc873219c3d211e1c67649255d98f9431da4567337e4fb7cdb->leave($__internal_48eca163fd1737cc873219c3d211e1c67649255d98f9431da4567337e4fb7cdb_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
