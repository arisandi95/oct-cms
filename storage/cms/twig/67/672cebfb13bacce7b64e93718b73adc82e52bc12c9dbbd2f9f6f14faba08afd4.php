<?php

/* E:\xampp\htdocs\10_projects_laravel\oct_cms/themes/acme/pages/about.htm */
class __TwigTemplate_79e51acc1f3fb4e80e73cdd96e999880fee8524fe4d903c77c53feec433ffa6a extends Twig_Template
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
        // line 1
        echo "<h1>About Us</h1>
<p>This is the about page</p>
<br>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "<hr>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>This is the about page</p>
<br>
{% component 'resourcesLinks' %}
<hr>", "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/pages/about.htm", "");
    }
}
