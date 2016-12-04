<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_21b360d3891cf1ca71aabeb4ca1b4cba6896f21a83ba03f5f257368d4b8004b4 extends Twig_Template
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
        $__internal_a62ed3788baf0e8c24ef82ac8c9e2db1abfb1e493647d0d32871b3dafaf54b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62ed3788baf0e8c24ef82ac8c9e2db1abfb1e493647d0d32871b3dafaf54b89->enter($__internal_a62ed3788baf0e8c24ef82ac8c9e2db1abfb1e493647d0d32871b3dafaf54b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a62ed3788baf0e8c24ef82ac8c9e2db1abfb1e493647d0d32871b3dafaf54b89->leave($__internal_a62ed3788baf0e8c24ef82ac8c9e2db1abfb1e493647d0d32871b3dafaf54b89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ebe05956862fdde69bb2b75fb28a73fbbe5e9719766a05774e93f89c85eae9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebe05956862fdde69bb2b75fb28a73fbbe5e9719766a05774e93f89c85eae9a->enter($__internal_9ebe05956862fdde69bb2b75fb28a73fbbe5e9719766a05774e93f89c85eae9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_9ebe05956862fdde69bb2b75fb28a73fbbe5e9719766a05774e93f89c85eae9a->leave($__internal_9ebe05956862fdde69bb2b75fb28a73fbbe5e9719766a05774e93f89c85eae9a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4111429c786cbff224589fe1aaba7cb7caeec91526c94dc015414b78a9e83a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4111429c786cbff224589fe1aaba7cb7caeec91526c94dc015414b78a9e83a6f->enter($__internal_4111429c786cbff224589fe1aaba7cb7caeec91526c94dc015414b78a9e83a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4111429c786cbff224589fe1aaba7cb7caeec91526c94dc015414b78a9e83a6f->leave($__internal_4111429c786cbff224589fe1aaba7cb7caeec91526c94dc015414b78a9e83a6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1b1650fc4ef96e0bdbfb50ff6f3754f0b10b28978bfa03cfe192819f8d99058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b1650fc4ef96e0bdbfb50ff6f3754f0b10b28978bfa03cfe192819f8d99058->enter($__internal_d1b1650fc4ef96e0bdbfb50ff6f3754f0b10b28978bfa03cfe192819f8d99058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1b1650fc4ef96e0bdbfb50ff6f3754f0b10b28978bfa03cfe192819f8d99058->leave($__internal_d1b1650fc4ef96e0bdbfb50ff6f3754f0b10b28978bfa03cfe192819f8d99058_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
