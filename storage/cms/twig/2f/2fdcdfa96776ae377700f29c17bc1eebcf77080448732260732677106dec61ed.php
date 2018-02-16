<?php

/* E:\xampp\htdocs\10_projects_laravel\oct_cms/themes/acme/pages/contact.htm */
class __TwigTemplate_34dad9938b361700e86a51d7bedfb1417df514fced05022fa08d5dd5bd16fae0 extends Twig_Template
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
        echo "<div class=\"container\">
    <h1>Contact Us</h1>
    <form>
        <div class=\"form-group\">
            <label for=\"email\">Email address:</label>
            <input type=\"email\" class=\"form-control\" id=\"email\">
        </div>
        <div class=\"form-group\">
            <label for=\"Name\">Your Name:</label>
            <input type=\"Name\" class=\"form-control\" id=\"Name\">
        </div>
        <div class=\"form-group\">
            <label for=\"message\">Message :</label>
            <textarea name=\"message\" id=\"message\" cols=\"80\" rows=\"5\"></textarea>
        </div>

        
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <h1>Contact Us</h1>
    <form>
        <div class=\"form-group\">
            <label for=\"email\">Email address:</label>
            <input type=\"email\" class=\"form-control\" id=\"email\">
        </div>
        <div class=\"form-group\">
            <label for=\"Name\">Your Name:</label>
            <input type=\"Name\" class=\"form-control\" id=\"Name\">
        </div>
        <div class=\"form-group\">
            <label for=\"message\">Message :</label>
            <textarea name=\"message\" id=\"message\" cols=\"80\" rows=\"5\"></textarea>
        </div>

        
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
    </form>
</div>", "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/acme/pages/contact.htm", "");
    }
}
