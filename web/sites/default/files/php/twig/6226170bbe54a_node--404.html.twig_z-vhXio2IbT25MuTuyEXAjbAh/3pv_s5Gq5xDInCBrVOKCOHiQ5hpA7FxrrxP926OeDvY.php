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

/* themes/custom/imdb/templates/node/node--404.html.twig */
class __TwigTemplate_6501ee938a9c45b01b61c5230ff0ffc91bfe2795977c77c357cbfdec7186d7fa extends \Twig\Template
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

  ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 3, $this->source), "html", null, true);
        echo "
  ";
        // line 4
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 5
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 5, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 6, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 6, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 9
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "

  ";
        // line 11
        if (($context["display_submitted"] ?? null)) {
            // line 12
            echo "    <footer>
      ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 13, $this->source), "html", null, true);
            echo "
      <div";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 14, $this->source), "html", null, true);
            echo ">
        ";
            // line 15
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 16
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 16, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 20
        echo "
  <div";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 21, $this->source), "html", null, true);
        echo " data-aos=\"fade-up\"
                               data-aos-easing=\"linear\"
                               data-aos-duration=\"1000\">

    <div class=\"face\">
      <div class=\"band\">
        <div class=\"red\"></div>
        <div class=\"white\"></div>
        <div class=\"blue\"></div>
      </div>
      <div class=\"eyes\"></div>
      <div class=\"dimples\"></div>
      <div class=\"mouth\"></div>
    </div>

    <h1 class=\"h1-404\"> ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo " </h1>
    <div class=\"hero-btn btn-404\"> ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_error_404_btn", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo " </div>

  </div>

</article>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/imdb/templates/node/node--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  114 => 36,  96 => 21,  93 => 20,  85 => 16,  83 => 15,  79 => 14,  75 => 13,  72 => 12,  70 => 11,  64 => 9,  56 => 6,  51 => 5,  49 => 4,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/imdb/templates/node/node--404.html.twig", "/var/www/html/web/themes/custom/imdb/templates/node/node--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "trans" => 15);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
