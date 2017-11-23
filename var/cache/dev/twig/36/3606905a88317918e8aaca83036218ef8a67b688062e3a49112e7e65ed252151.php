<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41c4838f5ab7e26e7f7b5ecac2f9b2ae0fb8624add2692a7619af17ee9f642a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c4838f5ab7e26e7f7b5ecac2f9b2ae0fb8624add2692a7619af17ee9f642a2->enter($__internal_41c4838f5ab7e26e7f7b5ecac2f9b2ae0fb8624add2692a7619af17ee9f642a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ed35f9ea60c45fccc816cd8fc5b51dab61d4eb1b3ce662afba2f327724828a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed35f9ea60c45fccc816cd8fc5b51dab61d4eb1b3ce662afba2f327724828a46->enter($__internal_ed35f9ea60c45fccc816cd8fc5b51dab61d4eb1b3ce662afba2f327724828a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c4838f5ab7e26e7f7b5ecac2f9b2ae0fb8624add2692a7619af17ee9f642a2->leave($__internal_41c4838f5ab7e26e7f7b5ecac2f9b2ae0fb8624add2692a7619af17ee9f642a2_prof);

        
        $__internal_ed35f9ea60c45fccc816cd8fc5b51dab61d4eb1b3ce662afba2f327724828a46->leave($__internal_ed35f9ea60c45fccc816cd8fc5b51dab61d4eb1b3ce662afba2f327724828a46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d539fb2ff38414c72bcf670cbd36f7294cda04f28b8e2f461a5d0191ae7e7eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d539fb2ff38414c72bcf670cbd36f7294cda04f28b8e2f461a5d0191ae7e7eb5->enter($__internal_d539fb2ff38414c72bcf670cbd36f7294cda04f28b8e2f461a5d0191ae7e7eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7bd26e3c65d941dca0fcabe5e7cb4ae91b9745eed8c91fdcc380fbbd14d40c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd26e3c65d941dca0fcabe5e7cb4ae91b9745eed8c91fdcc380fbbd14d40c42->enter($__internal_7bd26e3c65d941dca0fcabe5e7cb4ae91b9745eed8c91fdcc380fbbd14d40c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7bd26e3c65d941dca0fcabe5e7cb4ae91b9745eed8c91fdcc380fbbd14d40c42->leave($__internal_7bd26e3c65d941dca0fcabe5e7cb4ae91b9745eed8c91fdcc380fbbd14d40c42_prof);

        
        $__internal_d539fb2ff38414c72bcf670cbd36f7294cda04f28b8e2f461a5d0191ae7e7eb5->leave($__internal_d539fb2ff38414c72bcf670cbd36f7294cda04f28b8e2f461a5d0191ae7e7eb5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b47df86b14e23c0f0307ccdabfc1b92f7fdcb8fb70e3a06efa99c4fa9d913014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47df86b14e23c0f0307ccdabfc1b92f7fdcb8fb70e3a06efa99c4fa9d913014->enter($__internal_b47df86b14e23c0f0307ccdabfc1b92f7fdcb8fb70e3a06efa99c4fa9d913014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b2a9d6a10e5a4a930faa0518930cc3267782f1b0a5bccc3fd97d6fc88ac15bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2a9d6a10e5a4a930faa0518930cc3267782f1b0a5bccc3fd97d6fc88ac15bd->enter($__internal_0b2a9d6a10e5a4a930faa0518930cc3267782f1b0a5bccc3fd97d6fc88ac15bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0b2a9d6a10e5a4a930faa0518930cc3267782f1b0a5bccc3fd97d6fc88ac15bd->leave($__internal_0b2a9d6a10e5a4a930faa0518930cc3267782f1b0a5bccc3fd97d6fc88ac15bd_prof);

        
        $__internal_b47df86b14e23c0f0307ccdabfc1b92f7fdcb8fb70e3a06efa99c4fa9d913014->leave($__internal_b47df86b14e23c0f0307ccdabfc1b92f7fdcb8fb70e3a06efa99c4fa9d913014_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffd85617253a7793763bff92f6165475ac89f745ba3b175cd8e7f4618c725f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd85617253a7793763bff92f6165475ac89f745ba3b175cd8e7f4618c725f05->enter($__internal_ffd85617253a7793763bff92f6165475ac89f745ba3b175cd8e7f4618c725f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c820ad236d36a6fec2364219b7d1ec964384f39869e5bc32c5a81827367e7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c820ad236d36a6fec2364219b7d1ec964384f39869e5bc32c5a81827367e7a7->enter($__internal_1c820ad236d36a6fec2364219b7d1ec964384f39869e5bc32c5a81827367e7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1c820ad236d36a6fec2364219b7d1ec964384f39869e5bc32c5a81827367e7a7->leave($__internal_1c820ad236d36a6fec2364219b7d1ec964384f39869e5bc32c5a81827367e7a7_prof);

        
        $__internal_ffd85617253a7793763bff92f6165475ac89f745ba3b175cd8e7f4618c725f05->leave($__internal_ffd85617253a7793763bff92f6165475ac89f745ba3b175cd8e7f4618c725f05_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/lpu/projects/symfonyblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
