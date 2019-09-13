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

/* C:\xampp\htdocs\xiso/plugins/indikator/news/components/chitiettintuc/default.htm */
class __TwigTemplate_793f7919053054b49cd07438b58992322c5c91238118641ca4113c07dbe365f8 extends \Twig\Template
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
        $context["threepost"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "threepost", [], "any", false, false, false, 1);
        // line 2
        echo "

<div class=\"page-content animated fadeInRight\">
        <div class=\"wrap-text-page text-center\">
            <div class=\"container\">
                <div class=\"text-bottom\">
                    <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/user.png");
        echo "\" alt=\"\">
                    <span>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>

        <div class=\"wrapper-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <!--Sidebar menu start-->
                    <div class=\"col-lg-3\">
                        <div class=\"sidebar-collapse\">
                            <div class=\"back-to-news nav-link\">
                                <a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tintuc");
        echo "\" title=\"\" class=\"link-to-news\">
                                    <i class=\"ion ion-md-arrow-back\"></i>
                                    <span>Quay lại trang tin tức</span>
                                </a>
                            </div>
                            <div class=\"nav-link block-share\">
                                <span>Chia sẻ trang này</span>
                                <p class=\"icon--fnt\">
                                    <a href=\"https://www.facebook.com/Truonglaptrinhtructuyen/?__tn__=%2Cd%2CP-R&eid=ARAIU3rqsDSUSYdwLnw30-d24qRBVbJzTkPytgM3oqqUgjJmbWF6pTu-HYX7DJPUzFWq1gLNI-_Hk5kV\" title=\"\" class=\"_icon _icon-fb\">
                                        <i class=\"fa fa-facebook-square\"></i>
                                    </a>
                                    <a href=\"#\" title=\"\" class=\"_icon _icon-print\">
                                        <i class=\"fa fa-print\"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Sidebar menu end-->
                    <div class=\"col-lg-9\">
                        <div class=\"wrap-page-body\">
                            <div class=\"content-page\">
                                <div class=\"blog-detail\">
                                    <div class=\"title-header-top\">
                                        <h1 class=\"title-inner\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 45), "html", null, true);
        echo "</h1>
                                        <p class=\"date\">
                                            <span>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 47), "H-m"), "html", null, true);
        echo "</span>
                                            <span>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 48), "d-m-Y"), "html", null, true);
        echo "</span>
                                        </p>
                                    </div>
                                    <div class=\"detail\">
                                        <p>
                                          ";
        // line 53
        echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "introductory", [], "any", false, false, false, 53), 7000]);
        echo "
                                        </p>
                                        </div>

                                    <div class=\"relate-blog\">
                                        <h3 class=\"title-relate-blog\">Bài liên quan</h3>
                                        <ul class=\"list-relate-blog\">
                                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["threepost"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["threeposts"]) {
            // line 61
            echo "                                            <li class=\"item-relate\">
                                                <a href=\"";
            // line 62
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["threeposts"], "slug", [], "any", false, false, false, 62)]);
            echo "\" title=\"\">
                                                    <span>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["threeposts"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
                                                    <span class=\"day\">";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["threeposts"], "published_at", [], "any", false, false, false, 64), "d-m-Y"), "html", null, true);
            echo "</span>
                                                </a>
                                            </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['threeposts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/chitiettintuc/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 68,  135 => 64,  131 => 63,  127 => 62,  124 => 61,  120 => 60,  110 => 53,  102 => 48,  98 => 47,  93 => 45,  66 => 21,  51 => 9,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set threepost = __SELF__.threepost %}


<div class=\"page-content animated fadeInRight\">
        <div class=\"wrap-text-page text-center\">
            <div class=\"container\">
                <div class=\"text-bottom\">
                    <img src=\"{{ 'assets/img/user.png'|theme}}\" alt=\"\">
                    <span>{{post.title}}</span>
                </div>
            </div>
        </div>

        <div class=\"wrapper-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <!--Sidebar menu start-->
                    <div class=\"col-lg-3\">
                        <div class=\"sidebar-collapse\">
                            <div class=\"back-to-news nav-link\">
                                <a href=\"{{ 'tintuc'|page}}\" title=\"\" class=\"link-to-news\">
                                    <i class=\"ion ion-md-arrow-back\"></i>
                                    <span>Quay lại trang tin tức</span>
                                </a>
                            </div>
                            <div class=\"nav-link block-share\">
                                <span>Chia sẻ trang này</span>
                                <p class=\"icon--fnt\">
                                    <a href=\"https://www.facebook.com/Truonglaptrinhtructuyen/?__tn__=%2Cd%2CP-R&eid=ARAIU3rqsDSUSYdwLnw30-d24qRBVbJzTkPytgM3oqqUgjJmbWF6pTu-HYX7DJPUzFWq1gLNI-_Hk5kV\" title=\"\" class=\"_icon _icon-fb\">
                                        <i class=\"fa fa-facebook-square\"></i>
                                    </a>
                                    <a href=\"#\" title=\"\" class=\"_icon _icon-print\">
                                        <i class=\"fa fa-print\"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Sidebar menu end-->
                    <div class=\"col-lg-9\">
                        <div class=\"wrap-page-body\">
                            <div class=\"content-page\">
                                <div class=\"blog-detail\">
                                    <div class=\"title-header-top\">
                                        <h1 class=\"title-inner\">{{post.title}}</h1>
                                        <p class=\"date\">
                                            <span>{{ post.published_at|date('H-m') }}</span>
                                            <span>{{ post.published_at|date('d-m-Y') }}</span>
                                        </p>
                                    </div>
                                    <div class=\"detail\">
                                        <p>
                                          {{html_limit(post.introductory, 7000) | raw}}
                                        </p>
                                        </div>

                                    <div class=\"relate-blog\">
                                        <h3 class=\"title-relate-blog\">Bài liên quan</h3>
                                        <ul class=\"list-relate-blog\">
                                            {% for threeposts in threepost%}
                                            <li class=\"item-relate\">
                                                <a href=\"{{ 'tin-tuc' | page({slug:threeposts.slug})}}\" title=\"\">
                                                    <span>{{threeposts.title}}</span>
                                                    <span class=\"day\">{{ threeposts.published_at|date('d-m-Y') }}</span>
                                                </a>
                                            </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
", "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/chitiettintuc/default.htm", "");
    }
}
