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

/* themes/custom/imdb/templates/paragraph/paragraph--latest-movies.html.twig */
class __TwigTemplate_e7490e5eaf171f6aa0c8ddd1813db891d6ed42a16e1aaa1466574705fffc6fb2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((        // line 5
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 5, $this->source)))) : (""))];
        // line 8
        $this->displayBlock('paragraph', $context, $blocks);
        // line 15
        echo "
";
    }

    // line 8
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "container-80-mb"], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo ">
\t\t";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "\t</div>
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 11, $this->source), "html", null, true);
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/imdb/templates/paragraph/paragraph--latest-movies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  68 => 10,  63 => 13,  61 => 10,  56 => 9,  52 => 8,  47 => 15,  45 => 8,  43 => 5,  42 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/imdb/templates/paragraph/paragraph--latest-movies.html.twig", "/var/www/html/web/themes/custom/imdb/templates/paragraph/paragraph--latest-movies.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 8);
        static $filters = array("clean_class" => 4, "escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape'],
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
