<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partial_styles.phtml */
class __TwigTemplate_94fde05b2a2839ba1d38339493c0fa691eda4047b280d23e8197c6f9f8a6d1aa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Cuprum\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/min.css?v=";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 2), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />";
    }

    public function getTemplateName()
    {
        return "partial_styles.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <link href=\"https://fonts.googleapis.com/css?family=Cuprum\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/min.css?v={{guest.system_version}}\" type=\"text/css\" media=\"screen\" />", "partial_styles.phtml", "/var/www/html/bb-themes/admin_default/html/partial_styles.phtml");
    }
}
