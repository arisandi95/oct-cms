<?php

/* E:\xampp\htdocs\10_projects_laravel\oct_cms/themes/acme/pages/home.htm */
class __TwigTemplate_1d36c5b3155f4ed2176ada17321de8f3dabbf25d8f6b9a7f3122eaa7f694b4cf extends Twig_Template
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
        echo "<br>
<div class=\"jumbotron\">
    <h1>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
    <p>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\" class=\"btn btn-primary\">Read More</a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br>
<div class=\"jumbotron\">
    <h1>{{this.theme.site_name}}</h1>
    <p>{{this.theme.site_description}}</p>
    <p>
        <a href=\"{{'about'|page}}\" class=\"btn btn-primary\">Read More</a>
    </p>
</div>", "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/pages/home.htm", "");
    }
}
