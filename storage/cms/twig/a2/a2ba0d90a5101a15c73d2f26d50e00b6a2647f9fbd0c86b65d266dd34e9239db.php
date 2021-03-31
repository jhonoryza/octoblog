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

/* /var/www/webroot/themes/krisawzm-simply-blog/pages/blog/post.htm */
class __TwigTemplate_c25f220da5b65998e41f02ff7ac91194c62312f86bcd736bf9063890985093e2 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "\t<link href=\"https://fonts.googleapis.com/css?family=Amaranth|Dosis\" rel=\"stylesheet\">
    <link href=\"/themes/krisawzm-simply-blog/assets/css/custom.css\" rel=\"stylesheet\">
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 5
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 5);
        // line 6
        echo "
<article class=\"blog-post\" itemscope itemtype=\"https://schema.org/BlogPosting\">

  <header class=\"blog-header\">

    <h1 class=\"content-heading\" itemprop=\"headline\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 14
            echo "
      <img class=\"blog-featured-image\" src=\"";
            // line 15
            echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 15));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 15), "html", null, true);
            echo "\" itemprop=\"image\">

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, false, 19)) {
            // line 20
            echo "
      <p class=\"lead blog-excerpt\" itemprop=\"description\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>

    ";
        }
        // line 24
        echo "
  </header>

  <div class=\"markdown-body\" itemprop=\"articleBody\">
    ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 28);
        echo "
  </div>

  <footer class=\"blog-footer\">

    <hr>

    <p class=\"info\">
        Posted
        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 37), "count", [], "any", false, false, false, 37)) {
            echo " in
            <span itemprop=\"keywords\">
              ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 39));
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
                // line 40
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 40), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 40)) {
                    echo ", ";
                }
                // line 41
                echo "              ";
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
            // line 42
            echo "            </span>
        ";
        }
        // line 44
        echo "        on <time itemprop=\"datePublished\" datetime=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 44), "M d, Y"), "html", null, true);
        echo "</time>
        by <span itemprop=\"author\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 45), "full_name", [], "any", false, false, false, 45), "html", null, true);
        echo "</span>
    </p>

    <div class=\"btn-share-group\">

      <span class=\"btn-share btn-share-label\">Share this post:</span>

      ";
        // line 52
        $context["url"] = twig_urlencode_filter($this->extensions['Cms\Twig\Extension']->pageFilter(""));
        // line 53
        echo "      ";
        $context["title"] = twig_urlencode_filter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 53));
        // line 54
        echo "
      ";
        // line 55
        $context["social"] = [0 => [0 => "facebook", 1 => "Facebook", 2 => ("https://www.facebook.com/sharer/sharer.php?u=" .         // line 56
($context["url"] ?? null))], 1 => [0 => "gplus", 1 => "Google+", 2 => ("https://plus.google.com/share?url=" .         // line 57
($context["url"] ?? null))], 2 => [0 => "twitter", 1 => "Twitter", 2 => ("https://twitter.com/home?status=" .         // line 58
($context["url"] ?? null))], 3 => [0 => "reddit", 1 => "Reddit", 2 => ((("https://reddit.com/submit?url=" .         // line 59
($context["url"] ?? null)) . "&amp;title=") . ($context["title"] ?? null))], 4 => [0 => "tumblr", 1 => "Tumblr", 2 => ("https://tumblr.com/widgets/share/tool?canonicalUrl=" .         // line 60
($context["url"] ?? null))], 5 => [0 => "stumbleupon", 1 => "StumbleUpon", 2 => ((("https://www.stumbleupon.com/submit?url=" .         // line 61
($context["url"] ?? null)) . "&amp;title=") . ($context["title"] ?? null))], 6 => [0 => "linkedin", 1 => "LinkedIn", 2 => ((((((("https://www.linkedin.com/shareArticle?url=" .         // line 62
($context["url"] ?? null)) . "&amp;mini=true&amp;title=") . ($context["title"] ?? null)) . "&amp;summary=") . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, false, 62))) . "&amp;source=") . ($context["url"] ?? null))]];
        // line 64
        echo "
      ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 66
            echo "
        <a class=\"btn-share btn-share-";
            // line 67
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["n"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
            echo "\" href=\"";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["n"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[2] ?? null) : null);
            echo "\" target=\"_blank\" title=\"Share on ";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["n"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[1] ?? null) : null), "html", null, true);
            echo "\" aria-label=\"Share on ";
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["n"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null), "html", null, true);
            echo "\" role=\"button\"></a>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
    </div>
    
  </footer>
  
    <div id=\"disqus_thread\"></div>
    <script>
    
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://blog-jardik-xyz.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

</article>";
    }

    public function getTemplateName()
    {
        return "/var/www/webroot/themes/krisawzm-simply-blog/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 70,  202 => 67,  199 => 66,  195 => 65,  192 => 64,  190 => 62,  189 => 61,  188 => 60,  187 => 59,  186 => 58,  185 => 57,  184 => 56,  183 => 55,  180 => 54,  177 => 53,  175 => 52,  165 => 45,  158 => 44,  154 => 42,  140 => 41,  131 => 40,  114 => 39,  109 => 37,  97 => 28,  91 => 24,  85 => 21,  82 => 20,  80 => 19,  77 => 18,  66 => 15,  63 => 14,  59 => 13,  54 => 11,  47 => 6,  45 => 5,  43 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/webroot/themes/krisawzm-simply-blog/pages/blog/post.htm", "");
    }
}
