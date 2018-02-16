<?php

/* E:\xampp\htdocs\10_projects_laravel\oct_cms/themes/acme/partials/site/header.htm */
class __TwigTemplate_83d195162120762d2b18d50e61c25a5863e074d3fb6c9bec4c9826be4ea76a20 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item ";
        // line 9
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
            <li class=\"nav-item ";
        // line 10
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About Us</a></li>
            <li class=\"nav-item ";
        // line 11
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a></li>
            <li class=\"nav-item ";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog</a></li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  45 => 11,  37 => 10,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item {% if this.page.id == 'home' %}active{% endif %}\"><a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a></li>
            <li class=\"nav-item {% if this.page.id == 'about' %}active{% endif %}\"><a class=\"nav-link\" href=\"{{ 'about'|page }}\">About Us</a></li>
            <li class=\"nav-item {% if this.page.id == 'contact' %}active{% endif %}\"><a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a></li>
            <li class=\"nav-item {% if this.page.id == 'blog' %}active{% endif %}\"><a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a></li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>", "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/partials/site/header.htm", "");
    }
}
