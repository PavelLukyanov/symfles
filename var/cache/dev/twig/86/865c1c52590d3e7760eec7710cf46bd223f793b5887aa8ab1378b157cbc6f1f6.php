<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_01a4a9c8974000784e1dbfc6b6ee7f581e3cf5ef6b74c459bd13c358d76df3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a4a9c8974000784e1dbfc6b6ee7f581e3cf5ef6b74c459bd13c358d76df3bb->enter($__internal_01a4a9c8974000784e1dbfc6b6ee7f581e3cf5ef6b74c459bd13c358d76df3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f7f5f96bb11b6feb1975aba5b18d598be946ff436b08b3cee054ab004236181c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f5f96bb11b6feb1975aba5b18d598be946ff436b08b3cee054ab004236181c->enter($__internal_f7f5f96bb11b6feb1975aba5b18d598be946ff436b08b3cee054ab004236181c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01a4a9c8974000784e1dbfc6b6ee7f581e3cf5ef6b74c459bd13c358d76df3bb->leave($__internal_01a4a9c8974000784e1dbfc6b6ee7f581e3cf5ef6b74c459bd13c358d76df3bb_prof);

        
        $__internal_f7f5f96bb11b6feb1975aba5b18d598be946ff436b08b3cee054ab004236181c->leave($__internal_f7f5f96bb11b6feb1975aba5b18d598be946ff436b08b3cee054ab004236181c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33c59233ec9cb346e9bb1825599ddb9160656c4d1abc349c975dc7e3b713ca22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c59233ec9cb346e9bb1825599ddb9160656c4d1abc349c975dc7e3b713ca22->enter($__internal_33c59233ec9cb346e9bb1825599ddb9160656c4d1abc349c975dc7e3b713ca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e5fa8eb3ee47af5d3aa2fff0deec519d9d75d565758c2ff0a5a47f3f2a4020d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fa8eb3ee47af5d3aa2fff0deec519d9d75d565758c2ff0a5a47f3f2a4020d7->enter($__internal_e5fa8eb3ee47af5d3aa2fff0deec519d9d75d565758c2ff0a5a47f3f2a4020d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e5fa8eb3ee47af5d3aa2fff0deec519d9d75d565758c2ff0a5a47f3f2a4020d7->leave($__internal_e5fa8eb3ee47af5d3aa2fff0deec519d9d75d565758c2ff0a5a47f3f2a4020d7_prof);

        
        $__internal_33c59233ec9cb346e9bb1825599ddb9160656c4d1abc349c975dc7e3b713ca22->leave($__internal_33c59233ec9cb346e9bb1825599ddb9160656c4d1abc349c975dc7e3b713ca22_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cd8ee66e6dde6bb80b97c6684401f71d5f8f1bd904dbfc77524afae4ccfa4c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd8ee66e6dde6bb80b97c6684401f71d5f8f1bd904dbfc77524afae4ccfa4c5->enter($__internal_4cd8ee66e6dde6bb80b97c6684401f71d5f8f1bd904dbfc77524afae4ccfa4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_594fe81e27740187347dc7a87ae4c0dddd36e85289a8642a64031c8f77655060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594fe81e27740187347dc7a87ae4c0dddd36e85289a8642a64031c8f77655060->enter($__internal_594fe81e27740187347dc7a87ae4c0dddd36e85289a8642a64031c8f77655060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_594fe81e27740187347dc7a87ae4c0dddd36e85289a8642a64031c8f77655060->leave($__internal_594fe81e27740187347dc7a87ae4c0dddd36e85289a8642a64031c8f77655060_prof);

        
        $__internal_4cd8ee66e6dde6bb80b97c6684401f71d5f8f1bd904dbfc77524afae4ccfa4c5->leave($__internal_4cd8ee66e6dde6bb80b97c6684401f71d5f8f1bd904dbfc77524afae4ccfa4c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57a489d64ef69b92ec0fb85aeb7ee286d314f436f6e42cc1a9b65ae6280b7746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a489d64ef69b92ec0fb85aeb7ee286d314f436f6e42cc1a9b65ae6280b7746->enter($__internal_57a489d64ef69b92ec0fb85aeb7ee286d314f436f6e42cc1a9b65ae6280b7746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38ec78ea05f6b5a67868f482a4c0fe1b06c601ae07c72a8fdda28109e3d52c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ec78ea05f6b5a67868f482a4c0fe1b06c601ae07c72a8fdda28109e3d52c1b->enter($__internal_38ec78ea05f6b5a67868f482a4c0fe1b06c601ae07c72a8fdda28109e3d52c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_38ec78ea05f6b5a67868f482a4c0fe1b06c601ae07c72a8fdda28109e3d52c1b->leave($__internal_38ec78ea05f6b5a67868f482a4c0fe1b06c601ae07c72a8fdda28109e3d52c1b_prof);

        
        $__internal_57a489d64ef69b92ec0fb85aeb7ee286d314f436f6e42cc1a9b65ae6280b7746->leave($__internal_57a489d64ef69b92ec0fb85aeb7ee286d314f436f6e42cc1a9b65ae6280b7746_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/lpu/projects/symfonyblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
