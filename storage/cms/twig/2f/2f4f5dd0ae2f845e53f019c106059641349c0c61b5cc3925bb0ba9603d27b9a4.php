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

/* /var/www/octo/plugins/pkleindienst/blogsearch/components/searchform/default.htm */
class __TwigTemplate_2068cd3f91e0f75e5aac77cf3996948be6f590edec089c251dc792b4f844b1b0 extends \Twig\Template
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
        echo "<form class=\"form-inline\" method=\"GET\" action=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "resultPage", [], "any", false, false, false, 1));
        echo "\">
    <input type=\"text\" name=\"search\" class=\"form-control\">

    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryFilter", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <select name=\"cat[]\" class=\"form-control\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["key"] => $context["cat"]) {
                // line 7
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </select>
    ";
        }
        // line 11
        echo "
    <button class=\"btn btn btn-primary\" type=\"submit\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Search"]);
        echo "</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/octo/plugins/pkleindienst/blogsearch/components/searchform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  68 => 11,  64 => 9,  53 => 7,  49 => 6,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/octo/plugins/pkleindienst/blogsearch/components/searchform/default.htm", "");
    }
}
