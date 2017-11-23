<?php

/* lucky/index.html.twig */
class __TwigTemplate_b213a154ae35d2fb0c19c504551c26a36923bbade4080ddea1a5d1dfdddb21b1 extends Twig_Template
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
        $__internal_b46f678ac4e7db03e21777bba9a44a884887e017ddfe19dd5a34ff930c7fdda5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46f678ac4e7db03e21777bba9a44a884887e017ddfe19dd5a34ff930c7fdda5->enter($__internal_b46f678ac4e7db03e21777bba9a44a884887e017ddfe19dd5a34ff930c7fdda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/index.html.twig"));

        $__internal_1d02694df456df7c8d17d6d51e68b416a24fe179631d379efb6abfddb6863d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d02694df456df7c8d17d6d51e68b416a24fe179631d379efb6abfddb6863d81->enter($__internal_1d02694df456df7c8d17d6d51e68b416a24fe179631d379efb6abfddb6863d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/index.html.twig"));

        // line 1
        echo "<html>
<body>

";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <button type=\"submit\">Отправить</button>

";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


<table>
    <thead>
    <th>ID</th>
    <th>Name</th>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </tbody>
</table>

</body>
</html>";
        
        $__internal_b46f678ac4e7db03e21777bba9a44a884887e017ddfe19dd5a34ff930c7fdda5->leave($__internal_b46f678ac4e7db03e21777bba9a44a884887e017ddfe19dd5a34ff930c7fdda5_prof);

        
        $__internal_1d02694df456df7c8d17d6d51e68b416a24fe179631d379efb6abfddb6863d81->leave($__internal_1d02694df456df7c8d17d6d51e68b416a24fe179631d379efb6abfddb6863d81_prof);

    }

    public function getTemplateName()
    {
        return "lucky/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  64 => 21,  60 => 20,  57 => 19,  53 => 18,  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>

{{ form_start(form) }}
{{ form_widget(form) }}

    <button type=\"submit\">Отправить</button>

{{ form_end(form) }}


<table>
    <thead>
    <th>ID</th>
    <th>Name</th>
    </thead>
    <tbody>
    {% for post in posts %}
        <tr>
            <td>{{ post.id }}</td>
            <td>{{ post.name }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

</body>
</html>", "lucky/index.html.twig", "/home/lpu/projects/symfonyblog/app/Resources/views/lucky/index.html.twig");
    }
}
