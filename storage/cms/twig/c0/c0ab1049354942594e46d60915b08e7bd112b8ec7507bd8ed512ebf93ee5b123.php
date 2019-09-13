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

/* C:\xampp\htdocs\xiso/plugins/indikator/news/components/cachhoc/default.htm */
class __TwigTemplate_7659961f15a12cf636253027763c6ed52dc2b471f3ed3adac6ba20e93bcdc5ce extends \Twig\Template
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
        $context["cachhoc"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cachhoc", [], "any", false, false, false, 1);
        // line 2
        $context["title"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "title", [], "any", false, false, false, 2);
        // line 3
        echo "

<div class=\"page-content animated fadeInRight\">
  <div class=\"wrap-text-page text-left\">
    <div class=\"container\">
      <div class=\"text-bottom\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home.png");
        echo "\" alt=\"\"></a>
          </li>
          <li class=\"breadcrumb-item active\">
            <span>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["title"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
          </li>
        </ol>
      </div>
    </div>
  </div>

  <div class=\"wrapper-page\">
    <div class=\"container\">
      <div class=\"row\">
        <!--Sidebar menu start-->
        <div class=\"col-lg-3\">
          ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "        </div>
        <!--Sidebar menu end-->

        <div class=\"col-lg-5\">
          <div class=\"wrap-page-body\">
            <div class=\"content-page\">
              <div class=\"txt-head-body\">
                <h1 class=\"title-page title-page-bb\">
                  ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["title"] ?? null), "name", [], "any", false, false, false, 35), "html", null, true);
        echo " chương trình XiSo CHUẨN và HIỆU QUẢ
                </h1>
                
              </div>
              ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cachhoc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pot"]) {
            // line 40
            echo "              <div class=\"txt-body\">
                <h3>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pot"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</h3>
                <p>
                  ";
            // line 43
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["pot"], "introductory", [], "any", false, false, false, 43), 150]);
            echo "
                </p>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
          </div>
        </div>

        <!--Form sign up for advice start-->
        <div class=\"col-lg-4\">
         ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar-signup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "       </div>
       <!--Form sign up for advice end-->
     </div>
   </div>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/cachhoc/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 54,  125 => 53,  117 => 47,  107 => 43,  102 => 41,  99 => 40,  95 => 39,  88 => 35,  78 => 27,  74 => 26,  59 => 14,  51 => 11,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cachhoc = __SELF__.cachhoc %}
{% set title = __SELF__.title %}


<div class=\"page-content animated fadeInRight\">
  <div class=\"wrap-text-page text-left\">
    <div class=\"container\">
      <div class=\"text-bottom\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a href=\"{{ 'homepage' | page}}\"><img src=\"{{'assets/img/home.png'|theme }}\" alt=\"\"></a>
          </li>
          <li class=\"breadcrumb-item active\">
            <span>{{title.name}}</span>
          </li>
        </ol>
      </div>
    </div>
  </div>

  <div class=\"wrapper-page\">
    <div class=\"container\">
      <div class=\"row\">
        <!--Sidebar menu start-->
        <div class=\"col-lg-3\">
          {% partial 'site/sidebar'%}
        </div>
        <!--Sidebar menu end-->

        <div class=\"col-lg-5\">
          <div class=\"wrap-page-body\">
            <div class=\"content-page\">
              <div class=\"txt-head-body\">
                <h1 class=\"title-page title-page-bb\">
                  {{title.name}} chương trình XiSo CHUẨN và HIỆU QUẢ
                </h1>
                
              </div>
              {% for pot in cachhoc %}
              <div class=\"txt-body\">
                <h3>{{pot.title}}</h3>
                <p>
                  {{html_limit(pot.introductory,150) | raw}}
                </p>
              </div>
              {% endfor %}
            </div>
          </div>
        </div>

        <!--Form sign up for advice start-->
        <div class=\"col-lg-4\">
         {% partial 'site/sidebar-signup'%}
       </div>
       <!--Form sign up for advice end-->
     </div>
   </div>
 </div>
</div>", "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/cachhoc/default.htm", "");
    }
}
