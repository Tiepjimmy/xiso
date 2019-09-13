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

/* C:\xampp\htdocs\xiso/plugins/indikator/news/components/hocphi/default.htm */
class __TwigTemplate_1200121343c5a88cf729ce2da1e750f1ecd415d8ead4bf2292151646a9446c17 extends \Twig\Template
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
        $context["category"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "category", [], "any", false, false, false, 1);
        // line 2
        echo "


  <div class=\"txt-head-body\">
  \t<h1 class=\"title-page title-page-bb\">
  \t\t";
        // line 7
        echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 7)]);
        echo "
  \t</h1>
  \t<p>
  \t\t";
        // line 10
        echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "content", [], "any", false, false, false, 10)]);
        echo "
  \t</p>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/hocphi/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set category = __SELF__.category %}



  <div class=\"txt-head-body\">
  \t<h1 class=\"title-page title-page-bb\">
  \t\t{{html_strip(category.name)}}
  \t</h1>
  \t<p>
  \t\t{{html_strip(category.content)}}
  \t</p>
  </div>", "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/hocphi/default.htm", "");
    }
}
