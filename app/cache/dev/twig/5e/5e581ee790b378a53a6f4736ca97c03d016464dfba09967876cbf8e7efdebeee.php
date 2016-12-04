<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_c761e3371a80ae7a23aaf67284729e7b988f4e7bef77a16f6480180ecc675118 extends Twig_Template
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
        $__internal_33827ae6325e1af5a2fdbad94616c8c3cab5a6548b08531a043ca9c20eeac57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33827ae6325e1af5a2fdbad94616c8c3cab5a6548b08531a043ca9c20eeac57f->enter($__internal_33827ae6325e1af5a2fdbad94616c8c3cab5a6548b08531a043ca9c20eeac57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_33827ae6325e1af5a2fdbad94616c8c3cab5a6548b08531a043ca9c20eeac57f->leave($__internal_33827ae6325e1af5a2fdbad94616c8c3cab5a6548b08531a043ca9c20eeac57f_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle::Components/motd.html.twig", "C:\\wamp\\www\\apiFrais\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
