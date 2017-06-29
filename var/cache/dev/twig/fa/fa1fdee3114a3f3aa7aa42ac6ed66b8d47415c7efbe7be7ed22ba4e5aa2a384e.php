<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d5a7cd82b41b430864701bf6c6107dc710aa7541eb794bca5d43d90fcb582b64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c35d87afde6167fecc050187c05eab6ce7ce01febf12d296305669f789fc90ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35d87afde6167fecc050187c05eab6ce7ce01febf12d296305669f789fc90ff->enter($__internal_c35d87afde6167fecc050187c05eab6ce7ce01febf12d296305669f789fc90ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fcdd1ffd59c65da6329bd0dc6134bf1964b3cef175f7a30e6256ae2ca7c16129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdd1ffd59c65da6329bd0dc6134bf1964b3cef175f7a30e6256ae2ca7c16129->enter($__internal_fcdd1ffd59c65da6329bd0dc6134bf1964b3cef175f7a30e6256ae2ca7c16129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35d87afde6167fecc050187c05eab6ce7ce01febf12d296305669f789fc90ff->leave($__internal_c35d87afde6167fecc050187c05eab6ce7ce01febf12d296305669f789fc90ff_prof);

        
        $__internal_fcdd1ffd59c65da6329bd0dc6134bf1964b3cef175f7a30e6256ae2ca7c16129->leave($__internal_fcdd1ffd59c65da6329bd0dc6134bf1964b3cef175f7a30e6256ae2ca7c16129_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07215d79f8ef5edf9f493f99f92f2a45fcdce84222818513e7013d050d9bb880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07215d79f8ef5edf9f493f99f92f2a45fcdce84222818513e7013d050d9bb880->enter($__internal_07215d79f8ef5edf9f493f99f92f2a45fcdce84222818513e7013d050d9bb880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d19965ae3a5b969177314ec88f3e406a482bed3aafe32d6b80314211d758f413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19965ae3a5b969177314ec88f3e406a482bed3aafe32d6b80314211d758f413->enter($__internal_d19965ae3a5b969177314ec88f3e406a482bed3aafe32d6b80314211d758f413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d19965ae3a5b969177314ec88f3e406a482bed3aafe32d6b80314211d758f413->leave($__internal_d19965ae3a5b969177314ec88f3e406a482bed3aafe32d6b80314211d758f413_prof);

        
        $__internal_07215d79f8ef5edf9f493f99f92f2a45fcdce84222818513e7013d050d9bb880->leave($__internal_07215d79f8ef5edf9f493f99f92f2a45fcdce84222818513e7013d050d9bb880_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_42d978b712ac00da4c072c5ec4c791de2f57a1ff85cfc028951bcb182f8eafdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d978b712ac00da4c072c5ec4c791de2f57a1ff85cfc028951bcb182f8eafdb->enter($__internal_42d978b712ac00da4c072c5ec4c791de2f57a1ff85cfc028951bcb182f8eafdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e94ead6df6675124108f33cb96b465dfcce1a7b20c6df1acfac5ad9a6c6fbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e94ead6df6675124108f33cb96b465dfcce1a7b20c6df1acfac5ad9a6c6fbf8->enter($__internal_2e94ead6df6675124108f33cb96b465dfcce1a7b20c6df1acfac5ad9a6c6fbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2e94ead6df6675124108f33cb96b465dfcce1a7b20c6df1acfac5ad9a6c6fbf8->leave($__internal_2e94ead6df6675124108f33cb96b465dfcce1a7b20c6df1acfac5ad9a6c6fbf8_prof);

        
        $__internal_42d978b712ac00da4c072c5ec4c791de2f57a1ff85cfc028951bcb182f8eafdb->leave($__internal_42d978b712ac00da4c072c5ec4c791de2f57a1ff85cfc028951bcb182f8eafdb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9359c5273378825764f6fdb34c77bce137d7675b76bf5ae4893754e828d448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9359c5273378825764f6fdb34c77bce137d7675b76bf5ae4893754e828d448->enter($__internal_bb9359c5273378825764f6fdb34c77bce137d7675b76bf5ae4893754e828d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97c2d6a6158bed6dbe379e57d3aae94620e1caa681953dd7bc427a98232fda29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c2d6a6158bed6dbe379e57d3aae94620e1caa681953dd7bc427a98232fda29->enter($__internal_97c2d6a6158bed6dbe379e57d3aae94620e1caa681953dd7bc427a98232fda29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_97c2d6a6158bed6dbe379e57d3aae94620e1caa681953dd7bc427a98232fda29->leave($__internal_97c2d6a6158bed6dbe379e57d3aae94620e1caa681953dd7bc427a98232fda29_prof);

        
        $__internal_bb9359c5273378825764f6fdb34c77bce137d7675b76bf5ae4893754e828d448->leave($__internal_bb9359c5273378825764f6fdb34c77bce137d7675b76bf5ae4893754e828d448_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/michaelguerfi/Dev/Blog_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
