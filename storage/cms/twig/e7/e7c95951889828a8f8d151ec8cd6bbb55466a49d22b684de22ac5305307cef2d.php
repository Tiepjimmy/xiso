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

/* C:\xampp\htdocs\xiso/plugins/indikator/news/components/cacdai/default.htm */
class __TwigTemplate_2a41512609906bd5ab09ba3ddb634f3632472f4ba62cee021a2b4ba33ddcbc22 extends \Twig\Template
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
        echo "
";
        // line 2
        $context["cacdai"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cacdai", [], "any", false, false, false, 2);
        // line 3
        $context["category"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "category", [], "any", false, false, false, 3);
        // line 4
        echo "
<div class=\"page-content animated fadeInRight\">
\t<div class=\"wrap-text-page text-left\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-bottom\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("homepage");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home.png");
        echo "\" alt=\"\"></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">
\t\t\t\t\t\t<span>\t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<span>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"wrapper-page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!--Sidebar menu start-->
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "\t\t\t\t</div>
\t\t\t\t<!--Sidebar menu end-->

\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"wrap-page-body\">
\t\t\t\t\t\t<div class=\"content-page\">
\t\t\t\t\t\t\t<div class=\"txt-head-body\">
\t\t\t\t\t\t\t\t<h1 class=\"title-page title-page-bb\">
\t\t\t\t\t\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "content", [], "any", false, false, false, 41);
        echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ibox-content\" id=\"ibox-content\">
                                <div id=\"vertical_band\" class=\"vertical-container center-orientation\">
                                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cacdai"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dai"]) {
            // line 47
            echo "                                    <div class=\"vertical-band-block\">
                                        <div class=\"vertical-band-content band-white\">
                                            <a href=\"";
            // line 49
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => twig_get_attribute($this->env, $this->source, $context["dai"], "slug", [], "any", false, false, false, 49)]);
            echo "\" class=\"link-content\">
                                                <div class=\"img\">
                                                    <img src=\"";
            // line 51
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["dai"], "image", [], "any", false, false, false, 51));
            echo "\" class=\"wow swing\" alt=\"\" style=\"visibility: visible; animation-name: swing;\">
                                                </div>
                                                <h2 class=\"title\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dai"], "title", [], "any", false, false, false, 53), "html", null, true);
            echo "</h2>
                                            </a>
                                        </div>
                                    </div>
                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dai'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Form sign up for advice start-->
                <div class=\"col-lg-4\">
                   ";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar-signup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "               </div>
               <!--Form sign up for advice end-->
           </div>
       </div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/cacdai/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 66,  148 => 65,  139 => 58,  128 => 53,  123 => 51,  118 => 49,  114 => 47,  110 => 46,  102 => 41,  96 => 38,  86 => 30,  82 => 29,  67 => 17,  61 => 14,  53 => 11,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set cacdai = __SELF__.cacdai %}
{% set category = __SELF__.category %}

<div class=\"page-content animated fadeInRight\">
\t<div class=\"wrap-text-page text-left\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-bottom\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"{{ 'homepage' |theme }}\"><img src=\"{{ 'assets/img/home.png'|theme}}\" alt=\"\"></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">
\t\t\t\t\t\t<span>\t{{category.name}}</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<span>{{post.title}}</span>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"wrapper-page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!--Sidebar menu start-->
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t{% partial 'site/sidebar'%}
\t\t\t\t</div>
\t\t\t\t<!--Sidebar menu end-->

\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"wrap-page-body\">
\t\t\t\t\t\t<div class=\"content-page\">
\t\t\t\t\t\t\t<div class=\"txt-head-body\">
\t\t\t\t\t\t\t\t<h1 class=\"title-page title-page-bb\">
\t\t\t\t\t\t\t\t\t{{category.name}}
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t{{category.content |raw}}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ibox-content\" id=\"ibox-content\">
                                <div id=\"vertical_band\" class=\"vertical-container center-orientation\">
                                    {%for dai in cacdai%}
                                    <div class=\"vertical-band-block\">
                                        <div class=\"vertical-band-content band-white\">
                                            <a href=\"{{'chuong-trinh-hoc' |page({slug:dai.slug})}}\" class=\"link-content\">
                                                <div class=\"img\">
                                                    <img src=\"{{ dai.image |media}}\" class=\"wow swing\" alt=\"\" style=\"visibility: visible; animation-name: swing;\">
                                                </div>
                                                <h2 class=\"title\">{{dai.title}}</h2>
                                            </a>
                                        </div>
                                    </div>
                                     {% endfor %}
                                </div>
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
</div>", "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/cacdai/default.htm", "");
    }
}
