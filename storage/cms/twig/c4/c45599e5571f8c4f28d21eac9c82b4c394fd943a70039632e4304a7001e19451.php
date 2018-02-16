<?php

/* E:\xampp\htdocs\10_projects_laravel\oct_cms/themes/acme/pages/blog.htm */
class __TwigTemplate_1c3ffbaf3ed019120aa8e2aa5b54b805ea3d858549c48111653f7421a4a1e6ef extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPosts' %}", "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/pages/blog.htm", "");
    }
}
