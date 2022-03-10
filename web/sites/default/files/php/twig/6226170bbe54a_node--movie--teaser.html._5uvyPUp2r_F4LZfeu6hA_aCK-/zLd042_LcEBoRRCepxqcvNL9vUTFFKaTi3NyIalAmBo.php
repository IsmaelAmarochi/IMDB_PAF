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

/* themes/custom/imdb/templates/node/node--movie--teaser.html.twig */
class __TwigTemplate_034d3bc78bc33e53c6edbab49e21fa7271f88c191dd3b6a35f4c3145fd97acc8 extends \Twig\Template
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
        // line 1
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">
\t<div";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "wrap"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo ">
\t\t<div class=\"container-teaser\">
\t\t\t<div class=\"post\">
\t\t\t\t<div class=\"header_post\">
\t\t\t\t\t<img class=\"movie-image\" src=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_movie_image", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6), "fileuri", [], "any", false, false, true, 6), 6, $this->source)]), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"body_post movie-body\">
\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<a href=\" ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 11, $this->source), "html", null, true);
        echo "\" class=\"url\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<p>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<div class=\"container_infos\">
\t\t\t\t\t\t\t<div class=\"postedBy\">
\t\t\t\t\t\t\t\t<span>director</span>
\t\t\t\t\t\t\t\t";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_director", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"container_tags\">
\t\t\t\t\t\t\t\t<span>genre</span>
\t\t\t\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_genre", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/imdb/templates/node/node--movie--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  73 => 17,  66 => 13,  59 => 11,  51 => 6,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/imdb/templates/node/node--movie--teaser.html.twig", "/var/www/html/web/themes/custom/imdb/templates/node/node--movie--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("file_url" => 6);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['file_url']
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
