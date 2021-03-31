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

/* /var/www/webroot/themes/krisawzm-simply-blog/partials/blogPostsList.htm */
class __TwigTemplate_bb3ab0a840338c76dc7ed0f98b87ac95682ce53a42bc185db3f3394337afa6e7 extends \Twig\Template
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
        echo "<section class=\"posts-list\">

  <h1 class=\"content-heading\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h1>

  ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blogPostsListRaw"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
  ";
        // line 7
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 7);
        // line 8
        echo "  
  ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 9) > 1)) {
            // line 10
            echo "
    <nav class=\"btn-group posts-pagination\" role=\"navigation\">

      ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 13) > 1)) {
                // line 14
                echo "        <a class=\"btn btn-outline\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "baseFileName", [], "any", false, false, false, 14), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 14) - 1)]);
                echo "\" rel=\"prev\">Previous page</a>
      ";
            }
            // line 16
            echo "
      ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 17)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        <a class=\"btn btn-outline";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 18) == $context["page"])) ? (" selected") : (""));
                echo "\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "baseFileName", [], "any", false, false, false, 18), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
      ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 21) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 21))) {
                // line 22
                echo "        <a class=\"btn btn-outline\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "baseFileName", [], "any", false, false, false, 22), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 22) + 1)]);
                echo "\" rel=\"next\">Next page</a>
      ";
            }
            // line 24
            echo "
    </nav>

  ";
        }
        // line 27
        echo " 
  

</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/webroot/themes/krisawzm-simply-blog/partials/blogPostsList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  104 => 24,  98 => 22,  96 => 21,  93 => 20,  80 => 18,  76 => 17,  73 => 16,  67 => 14,  65 => 13,  60 => 10,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/webroot/themes/krisawzm-simply-blog/partials/blogPostsList.htm", "");
    }
}
