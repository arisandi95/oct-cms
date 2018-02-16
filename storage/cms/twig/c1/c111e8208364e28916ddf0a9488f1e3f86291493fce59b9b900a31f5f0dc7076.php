<?php

/* E:\xampp\htdocs\10_projects_laravel\oct_cms/themes/acme/layouts/default.htm */
class __TwigTemplate_ffc3cf8463503902ca457ec61d4a9ce081704d6412a1a3d20432c33c1552a810 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Acme ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
         <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/superhero/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\">
        ";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 9
        echo "    </head>
     <body>
        <header>
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        </header>

        <div class=\"container\">
            ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 17
        echo "        </div>

     <footer>
         ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "     </footer>

        <script src=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>

     </body>
</html>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  73 => 24,  69 => 23,  65 => 21,  61 => 20,  56 => 17,  54 => 16,  49 => 13,  45 => 12,  40 => 9,  37 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>Acme {{this.page.title}}</title>
         <meta name=\"description\" content=\"{{this.page.meta_description}}\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/superhero/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css' | theme }}\">
        {% styles %}
    </head>
     <body>
        <header>
            {% partial 'site/header' %}
        </header>

        <div class=\"container\">
            {% page %}
        </div>

     <footer>
         {% partial 'site/footer' %}
     </footer>

        <script src=\"{{'assets/vendor/jquery.js' | theme}}\"></script>
        <script src=\"{{'assets/vendor/bootstrap.js' | theme}}\"></script>
        <script src=\"{{'assets/javascript/app.js' | theme}}\"></script>

     </body>
</html>", "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/layouts/default.htm", "");
    }
}
