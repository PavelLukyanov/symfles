<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_693ce7bb96d9146ba67ab268f7a81cdf4f1608e56b661641748f705c7b7a2e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c6a15908a238e33251e77e076f96be5e9637ca48fd4f868c0c3cc2e90498f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6a15908a238e33251e77e076f96be5e9637ca48fd4f868c0c3cc2e90498f29->enter($__internal_4c6a15908a238e33251e77e076f96be5e9637ca48fd4f868c0c3cc2e90498f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2e2af778bef5d713bb0e082fef09ce220d4a1ba705c7a2db9ef4c436252f624f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2af778bef5d713bb0e082fef09ce220d4a1ba705c7a2db9ef4c436252f624f->enter($__internal_2e2af778bef5d713bb0e082fef09ce220d4a1ba705c7a2db9ef4c436252f624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4c6a15908a238e33251e77e076f96be5e9637ca48fd4f868c0c3cc2e90498f29->leave($__internal_4c6a15908a238e33251e77e076f96be5e9637ca48fd4f868c0c3cc2e90498f29_prof);

        
        $__internal_2e2af778bef5d713bb0e082fef09ce220d4a1ba705c7a2db9ef4c436252f624f->leave($__internal_2e2af778bef5d713bb0e082fef09ce220d4a1ba705c7a2db9ef4c436252f624f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa21b95a8e7b33381abe7f96f08759977aaef3f2bf541a1b2f1ad67c6058b8ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa21b95a8e7b33381abe7f96f08759977aaef3f2bf541a1b2f1ad67c6058b8ec->enter($__internal_fa21b95a8e7b33381abe7f96f08759977aaef3f2bf541a1b2f1ad67c6058b8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0ecf7e80455f76949a6c9f3237224d98af6eba562f8fd6945dd40ef5ad7ca76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ecf7e80455f76949a6c9f3237224d98af6eba562f8fd6945dd40ef5ad7ca76->enter($__internal_f0ecf7e80455f76949a6c9f3237224d98af6eba562f8fd6945dd40ef5ad7ca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f0ecf7e80455f76949a6c9f3237224d98af6eba562f8fd6945dd40ef5ad7ca76->leave($__internal_f0ecf7e80455f76949a6c9f3237224d98af6eba562f8fd6945dd40ef5ad7ca76_prof);

        
        $__internal_fa21b95a8e7b33381abe7f96f08759977aaef3f2bf541a1b2f1ad67c6058b8ec->leave($__internal_fa21b95a8e7b33381abe7f96f08759977aaef3f2bf541a1b2f1ad67c6058b8ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/lpu/projects/symfonyblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
