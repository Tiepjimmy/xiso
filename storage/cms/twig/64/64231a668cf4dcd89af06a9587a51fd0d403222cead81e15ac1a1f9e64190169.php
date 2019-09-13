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

/* C:\xampp\htdocs\xiso/themes/xiso/pages/homepage.htm */
class __TwigTemplate_4d2c8309852eec9a8b32bae369a8d0a31682d472bf9e3dda072282cab9c1777b extends \Twig\Template
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
        echo "<div class=\"page-content animated fadeInRight\">
    <div class=\"wrap-text-page text-center\">
        <div class=\"container\">
            <div class=\"text-bottom\">
                <img src=\"img/user.png\" alt=\"\">
                <span>Là học sinh muốn học lập trình nhưng không có tiền</span>
            </div>
        </div>
    </div>
    <!--Utilities start-->
    <div class=\"section-utilities\">
        <div class=\"container\">
            <h2 class=\"title-inner title-bdr_bf__top\">Tại sao nên chọn XiSo?</h2>
            <div class=\"row row-utilities\">

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["info"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gt"]) {
            // line 17
            echo "                <div class=\"col-utilities col-md-4 col-sm-6\">
                    <div class=\"item-utilities\">
                        <div class=\"img-item wow pulse\" data-wow-iteration=\"2\">
                            <img src=\"";
            // line 20
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["gt"], "image", [], "any", false, false, false, 20));
            echo "\" alt=\"icon_home\">
                        </div>
                        <div class=\"text-item\">
                            <h2 class=\"title__2\">";
            // line 23
            echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["gt"], "name", [], "any", false, false, false, 23)]);
            echo "</h2>
                            <p class=\"clamp__6 wow fadeInDown\">
                                ";
            // line 25
            echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["gt"], "content", [], "any", false, false, false, 25)]);
            echo "
                            </p>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>
        </div>
    </div>
    <!--Utilities end-->
    <!--List students start-->

    <div class=\"section-list-students\">
        <div class=\"container\">
            <div class=\"row row-list-students\">
                <!--Student item start-->
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comment"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["binhluan"]) {
            // line 42
            echo "                <div class=\"col-student col-md-4 col-sm-6\">
                    <div class=\"student-wrap wow fadeInUp\">
                        <div class=\"student-img\">
                            <a href=\"#\" title=\"\">
                                <img src=\"";
            // line 46
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["binhluan"], "image", [], "any", false, false, false, 46));
            echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"student-content\">
                            <div class=\"hover-content text-detail-content\">
                                <p class=\"clamp__5 small-clamp_3\">
                                 ";
            // line 52
            echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["binhluan"], "content", [], "any", false, false, false, 52)]);
            echo "
                             </p>
                         </div>
                         <div class=\"title-student-show text-center\">
                            <a href=\"#\" title=\"\">
                                <h3 class=\"title__2 tt-student\">
                                    ";
            // line 58
            echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["binhluan"], "name", [], "any", false, false, false, 58)]);
            echo "
                                </h3>
                            </a>
                            <p class=\"short-detail\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["binhluan"], "year", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Student item end-->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['binhluan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </div>
    </div>
</div>


<!--List students end-->
<!--News start-->
<div class=\"section-news\">
    <div class=\"container\">
        <div class=\"wrapper-news\">
            <div class=\"content-news\">
                <div class=\"news-header-title\">
                    <h2 class=\"title-inner news-title\">Tin tức</h2>
                    <a href=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tintuc");
        echo "\" title=\"Đọc thêm\" class=\"btn read-more\">Đọc thêm</a>
                </div>
                <div class=\"content-news-slide wow fadeInUp\">
                    <!--Slide carousel start-->
                    <div class=\"js-slides owl-carousel\">
                        <!--New slide item start-->
                          ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postone"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["postone1"]) {
            // line 88
            echo "                            <div class=\"new-slide-content\">
                                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postone1"], "data", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["key1"] => $context["value"]) {
                // line 90
                echo "                                    ";
                if (($context["key1"] == 0)) {
                    // line 91
                    echo "                                        <div class=\"row row-new-first row-new-item\">
                                            <div class=\"col-new-first col-lg-6\">
                                                <div class=\"new-image\">
                                                    <a href=\"";
                    // line 94
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 94)]);
                    echo "\" title=\"\" class=\"new-img hover-link\">
                                                        <img src=\"";
                    // line 95
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 95));
                    echo "\" alt=\"\">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col-new-first col-lg-6\">
                                                <div class=\"new-detail-item\">
                                                    <div class=\"new-item\">
                                                        <a href=\"";
                    // line 102
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 102)]);
                    echo "\" title=\"\">
                                                            <h3 class=\"title-new title__2 clamp__4 small-clamp_3\">
                                                                ";
                    // line 104
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 104), "html", null, true);
                    echo "
                                                            </h3>
                                                        </a>
                                                        <p class=\"clamp__3\">
                                                            ";
                    // line 108
                    echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["value"], "introductory", [], "any", false, false, false, 108)]);
                    echo "
                                                        </p>
                                                    </div>
                                                    <a href=\"";
                    // line 111
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 111)]);
                    echo "\" class=\"view-item-detail\" title=\"Chi tiết\">Chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row row-new-second row-new-item\">
                                    ";
                } else {
                    // line 117
                    echo "                                        <div class=\"col-new-second col-lg-6\">
                                            <div class=\"content-new-detail-item --flex-sd\">
                                                <div class=\"new-image\">
                                                    <a href=\"";
                    // line 120
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 120)]);
                    echo "\" title=\"\" class=\"new-img hover-link\">
                                                        <img src=\"";
                    // line 121
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 121));
                    echo "\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"new-detail-item\">
                                                    <div class=\"new-item\">
                                                        <a href=\"";
                    // line 126
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 126)]);
                    echo "\" title=\"\">
                                                            <h3 class=\"title-new title__2 clamp__4 small-clamp_3\">
                                                                ";
                    // line 128
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 128), "html", null, true);
                    echo "
                                                            </h3>
                                                        </a>
                                                        <p class=\"clamp__3\">
                                                                 ";
                    // line 132
                    echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["value"], "introductory", [], "any", false, false, false, 132)]);
                    echo "
                                                        </p>
                                                    </div>
                                                    <a href=\"";
                    // line 135
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 135)]);
                    echo "\" class=\"view-item-detail\" title=\"Chi tiết\">Chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 140
                echo "                                    ";
                if ((($context["key1"] + 1) == twig_get_attribute($this->env, $this->source, $context["postone1"], "count", [], "any", false, false, false, 140))) {
                    // line 141
                    echo "                                    </div>
                                    ";
                }
                // line 143
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['postone1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                    
                    </div>
                    <!--Slide carousel end-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--News end-->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 146,  285 => 144,  279 => 143,  275 => 141,  272 => 140,  264 => 135,  258 => 132,  251 => 128,  246 => 126,  238 => 121,  234 => 120,  229 => 117,  220 => 111,  214 => 108,  207 => 104,  202 => 102,  192 => 95,  188 => 94,  183 => 91,  180 => 90,  176 => 89,  173 => 88,  169 => 87,  160 => 81,  145 => 68,  132 => 61,  126 => 58,  117 => 52,  108 => 46,  102 => 42,  98 => 41,  86 => 31,  74 => 25,  69 => 23,  63 => 20,  58 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-content animated fadeInRight\">
    <div class=\"wrap-text-page text-center\">
        <div class=\"container\">
            <div class=\"text-bottom\">
                <img src=\"img/user.png\" alt=\"\">
                <span>Là học sinh muốn học lập trình nhưng không có tiền</span>
            </div>
        </div>
    </div>
    <!--Utilities start-->
    <div class=\"section-utilities\">
        <div class=\"container\">
            <h2 class=\"title-inner title-bdr_bf__top\">Tại sao nên chọn XiSo?</h2>
            <div class=\"row row-utilities\">

                {%for gt in info %}
                <div class=\"col-utilities col-md-4 col-sm-6\">
                    <div class=\"item-utilities\">
                        <div class=\"img-item wow pulse\" data-wow-iteration=\"2\">
                            <img src=\"{{ gt.image | media}}\" alt=\"icon_home\">
                        </div>
                        <div class=\"text-item\">
                            <h2 class=\"title__2\">{{ html_strip(gt.name)|raw}}</h2>
                            <p class=\"clamp__6 wow fadeInDown\">
                                {{ html_strip(gt.content) |raw }}
                            </p>
                        </div>
                    </div>
                </div>
                {% endfor%}
            </div>
        </div>
    </div>
    <!--Utilities end-->
    <!--List students start-->

    <div class=\"section-list-students\">
        <div class=\"container\">
            <div class=\"row row-list-students\">
                <!--Student item start-->
                {%for binhluan in comment %}
                <div class=\"col-student col-md-4 col-sm-6\">
                    <div class=\"student-wrap wow fadeInUp\">
                        <div class=\"student-img\">
                            <a href=\"#\" title=\"\">
                                <img src=\"{{ binhluan.image |media}}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"student-content\">
                            <div class=\"hover-content text-detail-content\">
                                <p class=\"clamp__5 small-clamp_3\">
                                 {{ html_strip(binhluan.content)|raw }}
                             </p>
                         </div>
                         <div class=\"title-student-show text-center\">
                            <a href=\"#\" title=\"\">
                                <h3 class=\"title__2 tt-student\">
                                    {{ html_strip(binhluan.name)|raw }}
                                </h3>
                            </a>
                            <p class=\"short-detail\">{{ binhluan.year }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Student item end-->
            {% endfor %}
        </div>
    </div>
</div>


<!--List students end-->
<!--News start-->
<div class=\"section-news\">
    <div class=\"container\">
        <div class=\"wrapper-news\">
            <div class=\"content-news\">
                <div class=\"news-header-title\">
                    <h2 class=\"title-inner news-title\">Tin tức</h2>
                    <a href=\"{{'tintuc'|page}}\" title=\"Đọc thêm\" class=\"btn read-more\">Đọc thêm</a>
                </div>
                <div class=\"content-news-slide wow fadeInUp\">
                    <!--Slide carousel start-->
                    <div class=\"js-slides owl-carousel\">
                        <!--New slide item start-->
                          {% for key, postone1  in postone %}
                            <div class=\"new-slide-content\">
                                {% for key1, value in postone1.data  %}
                                    {% if key1 == 0 %}
                                        <div class=\"row row-new-first row-new-item\">
                                            <div class=\"col-new-first col-lg-6\">
                                                <div class=\"new-image\">
                                                    <a href=\"{{ 'tin-tuc' | page({slug:value.slug})}}\" title=\"\" class=\"new-img hover-link\">
                                                        <img src=\"{{value.image | media }}\" alt=\"\">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col-new-first col-lg-6\">
                                                <div class=\"new-detail-item\">
                                                    <div class=\"new-item\">
                                                        <a href=\"{{ 'tin-tuc' | page({slug:value.slug})}}\" title=\"\">
                                                            <h3 class=\"title-new title__2 clamp__4 small-clamp_3\">
                                                                {{value.title}}
                                                            </h3>
                                                        </a>
                                                        <p class=\"clamp__3\">
                                                            {{html_strip(value.introductory)| raw}}
                                                        </p>
                                                    </div>
                                                    <a href=\"{{ 'tin-tuc' | page({slug:value.slug})}}\" class=\"view-item-detail\" title=\"Chi tiết\">Chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row row-new-second row-new-item\">
                                    {% else %}
                                        <div class=\"col-new-second col-lg-6\">
                                            <div class=\"content-new-detail-item --flex-sd\">
                                                <div class=\"new-image\">
                                                    <a href=\"{{ 'tin-tuc' | page({slug:value.slug})}}\" title=\"\" class=\"new-img hover-link\">
                                                        <img src=\"{{value.image | media }}\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"new-detail-item\">
                                                    <div class=\"new-item\">
                                                        <a href=\"{{ 'tin-tuc' | page({slug:value.slug})}}\" title=\"\">
                                                            <h3 class=\"title-new title__2 clamp__4 small-clamp_3\">
                                                                {{value.title}}
                                                            </h3>
                                                        </a>
                                                        <p class=\"clamp__3\">
                                                                 {{html_strip(value.introductory)| raw}}
                                                        </p>
                                                    </div>
                                                    <a href=\"{{ 'tin-tuc' | page({slug:value.slug})}}\" class=\"view-item-detail\" title=\"Chi tiết\">Chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    {% endif%}
                                    {% if key1 + 1 == postone1.count%}
                                    </div>
                                    {%endif%}
                                {% endfor%}
                            </div>
                        {% endfor%}
                    
                    </div>
                    <!--Slide carousel end-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--News end-->
</div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/homepage.htm", "");
    }
}
