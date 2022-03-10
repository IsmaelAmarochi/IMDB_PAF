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

/* themes/custom/imdb/templates/layout/region--header.html.twig */
class __TwigTemplate_b34590a71e22e210486b20a5690de5dfed438748b50104ef401a611dabc916ff extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        if (($context["content"] ?? null)) {
            // line 16
            echo "\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 16, $this->source), "html", null, true);
            echo ">

\t\t<nav class=\"main\" data-aos=\"fade-up\"
     data-aos-easing=\"linear\"
     data-aos-duration=\"1000\">
\t\t\t<a href=\"/\">
\t\t\t\t<h1 class=\"text-logo\"> ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "imdb_branding", [], "any", false, false, true, 22), "content", [], "any", false, false, true, 22), "site_name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo " </h1>
\t\t\t</a>
\t\t\t<div class=\"nav-links\" id=\"navLinks\">
\t\t\t\t";
            // line 31
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "imdb_main_menu", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t</nav>

\t\t";
            // line 38
            echo "\t</div>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/imdb/templates/layout/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 38,  57 => 31,  51 => 22,  41 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/imdb/templates/layout/region--header.html.twig", "/var/www/html/web/themes/custom/imdb/templates/layout/region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
