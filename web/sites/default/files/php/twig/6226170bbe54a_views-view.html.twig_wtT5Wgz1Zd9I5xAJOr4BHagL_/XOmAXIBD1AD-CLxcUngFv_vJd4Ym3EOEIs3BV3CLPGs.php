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

/* themes/custom/imdb/templates/views/views-view.html.twig */
class __TwigTemplate_edad0ba86c0b1cf38d1eedf7bfefeaa7f46e5862df1058c8027cf4a439ae3046 extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => ((        // line 3
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 3, $this->source))) : (""))];
        // line 6
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 6), 6, $this->source), "html", null, true);
        echo ">
\t";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 7, $this->source), "html", null, true);
        echo "
\t";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 8, $this->source), "html", null, true);
        echo "
\t";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "

\t";
        // line 11
        if (($context["header"] ?? null)) {
            // line 12
            echo "\t\t<header>
\t\t\t";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 13, $this->source), "html", null, true);
            echo "
\t\t</header>
\t";
        }
        // line 16
        echo "
\t<div class=\"exposed-filter container-80-mb\" data-aos=\"fade-up\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 17, $this->source), "html", null, true);
        echo "</div>


\t";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 20, $this->source), "html", null, true);
        echo "

\t";
        // line 22
        if (($context["rows"] ?? null)) {
            // line 23
            echo "<div class=\"row \" data-aos=\"fade-up\" data-aos-anchor-placement=\"center-bottom\">
\t\t\t";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 24, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        } elseif (        // line 26
($context["empty"] ?? null)) {
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 27, $this->source), "html", null, true);
            echo "
\t";
        }
        // line 29
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 29, $this->source), "html", null, true);
        echo "

\t";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 31, $this->source), "html", null, true);
        echo "
\t";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 32, $this->source), "html", null, true);
        echo "

\t";
        // line 34
        if (($context["footer"] ?? null)) {
            // line 35
            echo "\t\t<footer>
\t\t\t";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 36, $this->source), "html", null, true);
            echo "
\t\t</footer>
\t";
        }
        // line 39
        echo "
\t";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 40, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/imdb/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 40,  128 => 39,  122 => 36,  119 => 35,  117 => 34,  112 => 32,  108 => 31,  102 => 29,  97 => 27,  95 => 26,  90 => 24,  87 => 23,  85 => 22,  80 => 20,  74 => 17,  71 => 16,  65 => 13,  62 => 12,  60 => 11,  55 => 9,  51 => 8,  47 => 7,  42 => 6,  40 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/imdb/templates/views/views-view.html.twig", "/var/www/html/web/themes/custom/imdb/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 11);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
