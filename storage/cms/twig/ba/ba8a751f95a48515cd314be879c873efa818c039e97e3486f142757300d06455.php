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

/* C:\xampp\htdocs\xiso/plugins/indikator/news/components/hocbong/default.htm */
class __TwigTemplate_3e5647ab054dcf02a42f00f8da61b081aac4e4b8a683f82bdd5e83cd67600fd6 extends \Twig\Template
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
        $context["hocbong"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "hocbong", [], "any", false, false, false, 1);
        // line 2
        $context["hocbongs"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "hocbongs", [], "any", false, false, false, 2);
        // line 3
        echo "
<div class=\"page-content animated fadeInRight\">
    <div class=\"wrap-text-page text-left\">
        <div class=\"container\">
            <div class=\"text-bottom\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home.png");
        echo "\" alt=\"\"></a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <span>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hocbongs"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
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
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "                </div>
                <!--Sidebar menu end-->

                <div class=\"col-lg-5\">
                    <div class=\"wrap-page-body\">
                        <div class=\"content-page\">
                            <div class=\"txt-head-body\">
                                <h1 class=\"title-page title-page-bb\">
                                   ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hocbongs"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "
                                </h1>
                                <p>
                                </p>
                            </div>
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hocbong"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Hocbong"]) {
            // line 40
            echo "                            <div class=\"txt-body\">
                                <h2>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hocbong"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</h2>
                                <p>
                                 ";
            // line 43
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["Hocbong"], "introductory", [], "any", false, false, false, 43), 150]);
            echo "
                              </p>

                          </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Hocbong'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                          
                          <div class=\"txt-body text-center\">
                            <a data-mobi=\"#js_frm_signup\" data-desktop=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("registration");
        echo "\" id=\"btn-register\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("registration");
        echo "\" title=\"Đăng kí học\" class=\"btn-regis-learn btn-general\">Đăng kí học</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Form sign up for advice start-->
            <div class=\"col-lg-4\">
                ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar-signup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "            </div>
            <!--Form sign up for advice end-->
        </div>
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/hocbong/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 59,  135 => 58,  122 => 50,  118 => 48,  107 => 43,  102 => 41,  99 => 40,  95 => 39,  87 => 34,  77 => 26,  73 => 25,  58 => 13,  50 => 10,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set hocbong = __SELF__.hocbong %}
{% set hocbongs = __SELF__.hocbongs %}

<div class=\"page-content animated fadeInRight\">
    <div class=\"wrap-text-page text-left\">
        <div class=\"container\">
            <div class=\"text-bottom\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{'homepage'|page}}\"><img src=\"{{ 'assets/img/home.png'|theme}}\" alt=\"\"></a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <span>{{hocbongs.name}}</span>
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
                                   {{hocbongs.name}}
                                </h1>
                                <p>
                                </p>
                            </div>
                            {%for Hocbong in hocbong%}
                            <div class=\"txt-body\">
                                <h2>{{Hocbong.title}}</h2>
                                <p>
                                 {{html_limit(Hocbong.introductory,150) | raw}}
                              </p>

                          </div>
                          {%endfor%}
                          
                          <div class=\"txt-body text-center\">
                            <a data-mobi=\"#js_frm_signup\" data-desktop=\"{{'registration'|page}}\" id=\"btn-register\" href=\"{{'registration'|page}}\" title=\"Đăng kí học\" class=\"btn-regis-learn btn-general\">Đăng kí học</a>
                        </div>
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
</div>
", "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/hocbong/default.htm", "");
    }
}
