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

/* /var/www/octo/plugins/pkleindienst/blogsearch/components/searchresult/default.htm */
class __TwigTemplate_441e9dce2a0fab4f57b2f92ea49d9705726b15c84b206d837098b7b4404c02dd extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "
<h2>";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Search Results for:"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchTerm", [], "any", false, false, false, 3), "html", null, true);
        echo "</h2>

<ul class=\"post-list\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "    <li>
        <h3><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 8), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 8);
            echo "</a></h3>

        <p class=\"info\">
            ";
            // line 11
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Posted"]);
            echo "
            ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 12), "count", [], "any", false, false, false, 12)) {
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["in"]);
                echo " ";
            }
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 13));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 14), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 14)) {
                    echo ", ";
                }
                // line 15
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["on"]);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 16), "M d, Y"), "html", null, true);
            echo "
        </p>

        ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 19)) {
                // line 20
                echo "        <p class=\"excerpt\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 20);
                echo "</p>
        ";
            } else {
                // line 22
                echo "        <div class=\"content\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 22);
                echo "</div>
        ";
            }
            // line 24
            echo "    </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "    <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</ul>

";
        // line 30
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['posts'] = ($context["posts"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::pagination")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/octo/plugins/pkleindienst/blogsearch/components/searchresult/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  155 => 28,  146 => 26,  140 => 24,  134 => 22,  128 => 20,  126 => 19,  117 => 16,  103 => 15,  94 => 14,  76 => 13,  70 => 12,  66 => 11,  58 => 8,  55 => 7,  50 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/octo/plugins/pkleindienst/blogsearch/components/searchresult/default.htm", "");
    }
}
