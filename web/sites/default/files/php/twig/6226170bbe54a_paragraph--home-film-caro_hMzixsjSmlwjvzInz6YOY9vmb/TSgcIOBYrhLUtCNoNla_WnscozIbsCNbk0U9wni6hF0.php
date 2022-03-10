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

/* themes/custom/imdb/templates/paragraph/paragraph--home-film-carousel.html.twig */
class __TwigTemplate_6869446635f8883db608673d41798dfea83feb4a4e9baa6ef2bb9ffd93756bd1 extends \Twig\Template
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
        // line 41
        echo "

";
        // line 44
        $context["classes"] = [0 => "paragraph", 1 => "paragraph-movie", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 47
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 47), 47, $this->source))), 3 => ((        // line 48
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 48, $this->source)))) : (""))];
        // line 51
        $this->displayBlock('paragraph', $context, $blocks);
        // line 58
        echo "
";
    }

    // line 51
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "container-80"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
        echo ">
    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "  </div>
";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "      <h1 data-aos=\"fade-up\" class=\"paragraph-title\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 54, $this->source), "html", null, true);
        echo " </h1>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/imdb/templates/paragraph/paragraph--home-film-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 54,  72 => 53,  67 => 56,  65 => 53,  60 => 52,  56 => 51,  51 => 58,  49 => 51,  47 => 48,  46 => 47,  45 => 44,  41 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/imdb/templates/paragraph/paragraph--home-film-carousel.html.twig", "/var/www/html/web/themes/custom/imdb/templates/paragraph/paragraph--home-film-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 44, "block" => 51);
        static $filters = array("clean_class" => 47, "escape" => 52);
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
