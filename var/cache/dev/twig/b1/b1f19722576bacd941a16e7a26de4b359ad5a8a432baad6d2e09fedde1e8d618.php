<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c5ebd90dabd81c60e52e44b4579ed7539cd5966f609d77cae374ec347a80193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5ebd90dabd81c60e52e44b4579ed7539cd5966f609d77cae374ec347a80193->enter($__internal_8c5ebd90dabd81c60e52e44b4579ed7539cd5966f609d77cae374ec347a80193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f4773bc8e8e54eb11de611e98b2ac0bfcba3d1716fea0f4037ee5ed65bb53366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4773bc8e8e54eb11de611e98b2ac0bfcba3d1716fea0f4037ee5ed65bb53366->enter($__internal_f4773bc8e8e54eb11de611e98b2ac0bfcba3d1716fea0f4037ee5ed65bb53366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8c5ebd90dabd81c60e52e44b4579ed7539cd5966f609d77cae374ec347a80193->leave($__internal_8c5ebd90dabd81c60e52e44b4579ed7539cd5966f609d77cae374ec347a80193_prof);

        
        $__internal_f4773bc8e8e54eb11de611e98b2ac0bfcba3d1716fea0f4037ee5ed65bb53366->leave($__internal_f4773bc8e8e54eb11de611e98b2ac0bfcba3d1716fea0f4037ee5ed65bb53366_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c24c6db0a8df99baa5662ba0f38c6110da93ba273f39bc8dcd12828e8ff9b6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24c6db0a8df99baa5662ba0f38c6110da93ba273f39bc8dcd12828e8ff9b6ec->enter($__internal_c24c6db0a8df99baa5662ba0f38c6110da93ba273f39bc8dcd12828e8ff9b6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24a5d663397180e04ca2daefbd3aa8f4db03e713c0fd9e320898727b49e08a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a5d663397180e04ca2daefbd3aa8f4db03e713c0fd9e320898727b49e08a61->enter($__internal_24a5d663397180e04ca2daefbd3aa8f4db03e713c0fd9e320898727b49e08a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_24a5d663397180e04ca2daefbd3aa8f4db03e713c0fd9e320898727b49e08a61->leave($__internal_24a5d663397180e04ca2daefbd3aa8f4db03e713c0fd9e320898727b49e08a61_prof);

        
        $__internal_c24c6db0a8df99baa5662ba0f38c6110da93ba273f39bc8dcd12828e8ff9b6ec->leave($__internal_c24c6db0a8df99baa5662ba0f38c6110da93ba273f39bc8dcd12828e8ff9b6ec_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5652f7f17de21f7657e78774d41c429d01272184710869c4fceeff92494190eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5652f7f17de21f7657e78774d41c429d01272184710869c4fceeff92494190eb->enter($__internal_5652f7f17de21f7657e78774d41c429d01272184710869c4fceeff92494190eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_497e68feb75d4fcff7f5ce0d11ef84c1040944e16354c2bc27a3c121a6c5804a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497e68feb75d4fcff7f5ce0d11ef84c1040944e16354c2bc27a3c121a6c5804a->enter($__internal_497e68feb75d4fcff7f5ce0d11ef84c1040944e16354c2bc27a3c121a6c5804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_497e68feb75d4fcff7f5ce0d11ef84c1040944e16354c2bc27a3c121a6c5804a->leave($__internal_497e68feb75d4fcff7f5ce0d11ef84c1040944e16354c2bc27a3c121a6c5804a_prof);

        
        $__internal_5652f7f17de21f7657e78774d41c429d01272184710869c4fceeff92494190eb->leave($__internal_5652f7f17de21f7657e78774d41c429d01272184710869c4fceeff92494190eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2f3fb9fa68026f0047d742347e05992282aca7a19cb35eb92e136531c8107ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f3fb9fa68026f0047d742347e05992282aca7a19cb35eb92e136531c8107ab->enter($__internal_a2f3fb9fa68026f0047d742347e05992282aca7a19cb35eb92e136531c8107ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c66f15879fbc852c0fca4823f51990081ecfe66927ec8c6418f338a44c6fec5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66f15879fbc852c0fca4823f51990081ecfe66927ec8c6418f338a44c6fec5e->enter($__internal_c66f15879fbc852c0fca4823f51990081ecfe66927ec8c6418f338a44c6fec5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c66f15879fbc852c0fca4823f51990081ecfe66927ec8c6418f338a44c6fec5e->leave($__internal_c66f15879fbc852c0fca4823f51990081ecfe66927ec8c6418f338a44c6fec5e_prof);

        
        $__internal_a2f3fb9fa68026f0047d742347e05992282aca7a19cb35eb92e136531c8107ab->leave($__internal_a2f3fb9fa68026f0047d742347e05992282aca7a19cb35eb92e136531c8107ab_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60435ccba9c4f7b71cb85846bebdd77a47b9fda0eda27757f3e0a5f38dba19da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60435ccba9c4f7b71cb85846bebdd77a47b9fda0eda27757f3e0a5f38dba19da->enter($__internal_60435ccba9c4f7b71cb85846bebdd77a47b9fda0eda27757f3e0a5f38dba19da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b0c4c275a8d4581845228e7a978f4b14bcece17e42e7f37a77baa4a34a26af24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c4c275a8d4581845228e7a978f4b14bcece17e42e7f37a77baa4a34a26af24->enter($__internal_b0c4c275a8d4581845228e7a978f4b14bcece17e42e7f37a77baa4a34a26af24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b0c4c275a8d4581845228e7a978f4b14bcece17e42e7f37a77baa4a34a26af24->leave($__internal_b0c4c275a8d4581845228e7a978f4b14bcece17e42e7f37a77baa4a34a26af24_prof);

        
        $__internal_60435ccba9c4f7b71cb85846bebdd77a47b9fda0eda27757f3e0a5f38dba19da->leave($__internal_60435ccba9c4f7b71cb85846bebdd77a47b9fda0eda27757f3e0a5f38dba19da_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/lpu/projects/symfonyblog/app/Resources/views/base.html.twig");
    }
}
