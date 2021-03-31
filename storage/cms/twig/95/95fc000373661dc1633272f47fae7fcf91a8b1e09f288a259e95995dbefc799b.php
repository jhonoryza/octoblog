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

/* /var/www/octo/themes/krisawzm-simply-blog/pages/home.htm */
class __TwigTemplate_702c1a90077edf2ba5f4ca19f18f45dc51e61ec63fdb27b281dcb154f8ef6c3d extends \Twig\Template
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
        echo "<h1>Welcome to my blog</h1></br></br>

<h2>About</h2></br>

<p>Hi, perkenalkan saya Fajar Sidik Priatna,
seorang developer web, desktop, mobile dan embedded system yg tinggal di Indonesia tepatnya di Bandung. alumni pesantren persatuan islam 1 (pajagalan) bandung, lulus dari Departement Fisika penjurusan Instrumentasi Elektronika di Universitas Padjadjaran tahun 2014.
jika kalian menemukan bug atau ada sesuatu yg ingin disampaikan, kalian dapat menghubungi contact saya dibawah ini..</p></br></br>

<h2>Contact</h2></br>
    <header class=\"side-header\">
    <ul class=\"social-icons\">
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "social_buttons", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["btn"]) {
            // line 17
            echo "        <li>
          <a class=\"btn-social fa-";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "fa", [], "any", false, false, false, 18), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 18), "html", null, true);
            echo "\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "color", [], "any", false, false, false, 18), "html", null, true);
            echo ";\"></a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
    </header>
    <p>or mail: jardik.oryza@gmail.com.</p></br></br>

<h4>You can click <a href=\"";
        // line 25
        echo url("/page/1");
        echo "\">HERE</a> to see my recent posts<h4>";
    }

    public function getTemplateName()
    {
        return "/var/www/octo/themes/krisawzm-simply-blog/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  78 => 21,  65 => 18,  62 => 17,  58 => 16,  45 => 5,  43 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/octo/themes/krisawzm-simply-blog/pages/home.htm", "");
    }
}
