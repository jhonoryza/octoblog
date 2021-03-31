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

/* /var/www/octo/themes/krisawzm-simply-blog/layouts/default.htm */
class __TwigTemplate_b93fa8e6aea857ad6c8139c2562325777e9ef0209ce45e5aa162dee0fad1df74 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "meta_lang", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">

    ";
        // line 7
        $context["title"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "home")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7) . " - ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7))));
        // line 8
        echo "    <title>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">

    ";
        // line 11
        $context["description"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "description", [], "any", false, false, false, 11)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "description", [], "any", false, false, false, 11)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "whoami", [], "any", false, false, false, 11)));
        // line 12
        echo "    <meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\">
    <meta property=\"og:title\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <meta property=\"og:site_name\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
    <meta property=\"og:url\" content=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\">
    <meta property=\"og:description\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\">

    ";
        // line 18
        if (($context["metaImage"] ?? null)) {
            // line 19
            echo "      <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, ($context["metaImage"] ?? null), "html", null, true);
            echo "\">
      <link rel=\"image_src\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["metaImage"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 22
        echo "
    <meta name=\"canonical\" content=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\">

    ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 25), "meta_author", [], "any", false, false, false, 25)) {
            // line 26
            echo "      <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 26), "meta_author", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
    ";
        }
        // line 28
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/app.css");
        echo "\">
    ";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 31
        echo "    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-165370265-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165370265-1');
</script>

  </head>
  <body class=\"color-scheme-";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 42), "color_scheme", [], "any", false, false, false, 42), "html", null, true);
        echo "\">

    <section class=\"side\">

      <header class=\"side-header\">

        <a class=\"side-avatar\" href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
          <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 49), "avatar", [], "any", false, false, false, 49), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
        echo "\" width=\"120\" height=\"120\">
        </a>

        <h2 class=\"side-heading\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
        echo "</h2>

        <ul class=\"social-icons\">

          ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 56), "social_buttons", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["btn"]) {
            // line 57
            echo "
            <li>
              <a class=\"btn-social fa-";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "fa", [], "any", false, false, false, 59), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 59), "html", null, true);
            echo "\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "color", [], "any", false, false, false, 59), "html", null, true);
            echo ";\"></a>
            </li>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </ul>

      </header>

      <div class=\"side-content\">
        
        <!--search form-->
        <h3>Cari Artikel Disini</h3>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 74
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("searchForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 75
        echo "            </div>
        </div>

        <h3>Description</h3>

        <p>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 80), "whoami", [], "any", false, false, false, 80), "html", null, true);
        echo "</p>

        <hr>

        <h3>What I write about</h3>

        <ul class=\"side-categories\">
          ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 88
            echo "
            <li><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 89), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "post_count", [], "any", false, false, false, 89), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</a></li>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </ul>

        <hr>
        
        <h3>Archieves</h3>

        <h4><a href=\"";
        // line 98
        echo url("/archieves");
        echo "\">you can see here all of my posts</a></h4>

        <hr>

        <h3>Recent Posts</h3>

        <ul class=\"recent-posts\">

          ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recentBlogPosts"] ?? null), "posts", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 107
            echo "
            <li>
              <h4><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 109), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 109), "html", null, true);
            echo "</a></h4>
              ";
            // line 110
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 110), "M d, Y"), "html", null, true);
            echo "
            </li>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
        </ul>
        
        </br>
        <h3>©jardik - Made with octobercms from Bandung with love, Indonesia. October 2017</h3>

      </div>

    </section>

    <div class=\"content\">

      <a class=\"menu-btn\" href=\"#\">
        <span class=\"bar\"></span>
        <span class=\"bar\"></span>
        <span class=\"bar\"></span>
      </a>

      <div class=\"page-content width-";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 132), "content_max_width", [], "any", false, false, false, 132), "html", null, true);
        echo " font-size-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 132), "content_font_size", [], "any", false, false, false, 132), "html", null, true);
        echo "\">

        ";
        // line 134
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 135
        echo "
      </div>

    </div>

    <script src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js-dist/app.min.js");
        echo "\"></script>
    
    
    ";
        // line 143
        echo twig_escape_filter($this->env, ($context["scripts"] ?? null), "html", null, true);
        echo "
    <script id=\"dsq-count-scr\" src=\"//blog-jardik-xyz.disqus.com/count.js\" async></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/octo/themes/krisawzm-simply-blog/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 143,  318 => 140,  311 => 135,  309 => 134,  302 => 132,  282 => 114,  272 => 110,  266 => 109,  262 => 107,  258 => 106,  247 => 98,  239 => 92,  226 => 89,  223 => 88,  219 => 87,  209 => 80,  202 => 75,  198 => 74,  185 => 63,  171 => 59,  167 => 57,  163 => 56,  156 => 52,  148 => 49,  144 => 48,  135 => 42,  122 => 31,  119 => 30,  115 => 29,  112 => 28,  106 => 26,  104 => 25,  99 => 23,  96 => 22,  91 => 20,  86 => 19,  84 => 18,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  62 => 12,  60 => 11,  55 => 9,  50 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/octo/themes/krisawzm-simply-blog/layouts/default.htm", "");
    }
}
