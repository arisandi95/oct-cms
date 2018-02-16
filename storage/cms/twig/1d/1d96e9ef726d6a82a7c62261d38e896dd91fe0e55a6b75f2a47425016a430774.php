<?php

/* E:\xampp\htdocs\10_projects_laravel\oct_cms/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_db82a680a98d9dd36be731658c134685245e61eee3e130bc811676c80e1a314c extends Twig_Template
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
        return "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/responsiv-clean/pages/contact.htm";
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
</div>", "E:\\xampp\\htdocs\\10_projects_laravel\\oct_cms/themes/responsiv-clean/pages/contact.htm", "");
    }
}
