<?php

/* E:\xampp\htdocs\10_projects_laravel\oct_cms/plugins/eduonix/resources/components/links/default.htm */
class __TwigTemplate_c602e6822e4bb6fff5bb42b5ddf3f97654643f0f8827d9f10d4bc424aa8b90a3 extends Twig_Template
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
        echo "<ul class=\"list-group\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "\t\t<li class=\"list-group-item\"> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "</a> </li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/plugins/eduonix/resources/components/links/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"list-group\">
\t{% for link in links %}
\t\t<li class=\"list-group-item\"> <a target=\"_blank\" href=\"{{link}}\">{{link}}</a> </li>
\t{% endfor %}
</ul>", "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/plugins/eduonix/resources/components/links/default.htm", "");
    }
}
