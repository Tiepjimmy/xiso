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

/* C:\xampp\htdocs\xiso/plugins/indikator/news/components/tintuc/default.htm */
class __TwigTemplate_147f42198586f527f383e0458fa0c5686a62de594a3f932afe06ad81484b73d9 extends \Twig\Template
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
        $context["postone"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "postone", [], "any", false, false, false, 2);
        // line 3
        $context["listpost"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "listpost", [], "any", false, false, false, 3);
        // line 4
        echo "<div class=\"page-content animated fadeInRight\">
    <div class=\"wrap-text-page text-center\">
        <div class=\"container\">
            <div class=\"text-bottom\">
                <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/user.png");
        echo "\" alt=\"\">
                <span>Là học sinh muốn học lập trình nhưng không có tiền</span>
            </div>
        </div>
    </div>

    <div class=\"section-news section-news-area\">
        <div class=\"container\">
            <div class=\"content-news\">
                <div class=\"news-header-title mb-30\">
                    <h2 class=\"title-inner news-title\">Bản tin XiSo</h2>
                    <a href=\"#\" title=\"\" class=\"btn read-more\">Cập nhật tin tức từ XiSo</a>
                </div>

                <div class=\"content-news-slide\">
                    <!--Slide carousel start-->
                    <div class=\"js-slides owl-carousel\">
                        <!--New slide item start-->
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postone"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["postone1"]) {
            // line 27
            echo "                        <div class=\"new-slide-content\">
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postone1"], "data", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["key1"] => $context["value"]) {
                // line 29
                echo "                            ";
                if (($context["key1"] == 0)) {
                    // line 30
                    echo "                            <div class=\"row row-new-first row-new-item\">
                                <div class=\"col-new-first col-lg-6\">
                                    <div class=\"new-image\">
                                        <a href=\"";
                    // line 33
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 33)]);
                    echo "\" title=\"\" class=\"new-img hover-link\">
                                            <img src=\"";
                    // line 34
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 34));
                    echo "\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-new-first col-lg-6\">
                                    <div class=\"new-detail-item\">
                                        <div class=\"new-item\">
                                            <a href=\"";
                    // line 41
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 41)]);
                    echo "\" title=\"\">
                                                <h3 class=\"title-new title__2 clamp__4 small-clamp_3\">
                                                    ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 43), "html", null, true);
                    echo "
                                                </h3>
                                            </a>
                                            <p class=\"clamp__3\">
                                                ";
                    // line 47
                    echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["value"], "introductory", [], "any", false, false, false, 47)]);
                    echo "
                                            </p>
                                        </div>
                                        <a href=\"";
                    // line 50
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 50)]);
                    echo "\" class=\"view-item-detail\" title=\"Chi tiết\">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row row-new-second row-new-item\">
                                ";
                } else {
                    // line 56
                    echo "                                <div class=\"col-new-second col-lg-6\">
                                    <div class=\"content-new-detail-item --flex-sd\">
                                        <div class=\"new-image\">
                                            <a href=\"";
                    // line 59
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 59)]);
                    echo "\" title=\"\" class=\"new-img hover-link\">
                                                <img src=\"";
                    // line 60
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 60));
                    echo "\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"new-detail-item\">
                                            <div class=\"new-item\">
                                                <a href=\"";
                    // line 65
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 65)]);
                    echo "\" title=\"\">
                                                    <h3 class=\"title-new title__2 clamp__4 small-clamp_3\">
                                                        ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 67), "html", null, true);
                    echo "
                                                    </h3>
                                                </a>
                                                <p class=\"clamp__3\">
                                                   ";
                    // line 71
                    echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["value"], "introductory", [], "any", false, false, false, 71)]);
                    echo "
                                               </p>
                                           </div>
                                           <a href=\"";
                    // line 74
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["value"], "slug", [], "any", false, false, false, 74)]);
                    echo "\" class=\"view-item-detail\" title=\"Chi tiết\">Chi tiết</a>
                                       </div>
                                   </div>
                               </div>
                               ";
                }
                // line 79
                echo "                               ";
                if ((($context["key1"] + 1) == twig_get_attribute($this->env, $this->source, $context["postone1"], "count", [], "any", false, false, false, 79))) {
                    // line 80
                    echo "                           </div>
                           ";
                }
                // line 82
                echo "                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                       </div>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['postone1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "



                       <!--New slide item end-->
                   </div>
                   <!--Slide carousel end-->
               </div>
           </div>
           <div class=\"line line-bottom l-t\"></div>
           ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listpost"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["allpost"]) {
            // line 96
            echo "          <div class=\"wrapper-blog\"> 
            <!--Blog item start-->

            <div class=\"row row-blog\">
              <div class=\"col-blog col-lg-4 col-md-5\">
                    <a title=\"";
            // line 101
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["allpost"], "slug", [], "any", false, false, false, 101)]);
            echo "\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["allpost"], "slug", [], "any", false, false, false, 101)]);
            echo "\" class=\"img\">
                        <img src=\"";
            // line 102
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["allpost"], "image", [], "any", false, false, false, 102));
            echo "\" alt=\"\">
                    </a>
              </div>
              <div class=\"col-blog col-lg-8 col-md-7\">
                  <div class=\"content-blog\">
                        <div class=\"title-blog\">
                            <a href=\"";
            // line 108
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tin-tuc", ["slug" => twig_get_attribute($this->env, $this->source, $context["allpost"], "slug", [], "any", false, false, false, 108)]);
            echo "\" title=\"\">
                                <h3 class=\"title-inner clamp__2\">
                                   ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allpost"], "title", [], "any", false, false, false, 110), "html", null, true);
            echo "
                               </h3>
                           </a>
                           <span class=\"date\"> ";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allpost"], "published_at", [], "any", false, false, false, 113), "d-m-Y"), "html", null, true);
            echo "</span>
                       </div>

                         <p class=\"short-text clamp__3\">
                          ";
            // line 117
            echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["allpost"], "introductory", [], "any", false, false, false, 117), 150]);
            echo "
                          </p>
                </div>
              </div>
              <div class=\"col-12\">
                  <div class=\"line line-gray\"></div>
              </div>

        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allpost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        <!--Blog item end-->
        <div class=\"view-more text-center\" id=\"listrecord\">
            <div   class=\"link-view-more btn-general\" title=\"Xem thêm\">Xem thêm</div>
        </div>
    </div>

</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/tintuc/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 127,  250 => 117,  243 => 113,  237 => 110,  232 => 108,  223 => 102,  217 => 101,  210 => 96,  206 => 95,  194 => 85,  187 => 83,  181 => 82,  177 => 80,  174 => 79,  166 => 74,  160 => 71,  153 => 67,  148 => 65,  140 => 60,  136 => 59,  131 => 56,  122 => 50,  116 => 47,  109 => 43,  104 => 41,  94 => 34,  90 => 33,  85 => 30,  82 => 29,  78 => 28,  75 => 27,  71 => 26,  50 => 8,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set postone = __SELF__.postone %}
{% set listpost = __SELF__.listpost %}
<div class=\"page-content animated fadeInRight\">
    <div class=\"wrap-text-page text-center\">
        <div class=\"container\">
            <div class=\"text-bottom\">
                <img src=\"{{ 'assets/img/user.png'|theme }}\" alt=\"\">
                <span>Là học sinh muốn học lập trình nhưng không có tiền</span>
            </div>
        </div>
    </div>

    <div class=\"section-news section-news-area\">
        <div class=\"container\">
            <div class=\"content-news\">
                <div class=\"news-header-title mb-30\">
                    <h2 class=\"title-inner news-title\">Bản tin XiSo</h2>
                    <a href=\"#\" title=\"\" class=\"btn read-more\">Cập nhật tin tức từ XiSo</a>
                </div>

                <div class=\"content-news-slide\">
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




                       <!--New slide item end-->
                   </div>
                   <!--Slide carousel end-->
               </div>
           </div>
           <div class=\"line line-bottom l-t\"></div>
           {% for allpost in listpost %}
          <div class=\"wrapper-blog\"> 
            <!--Blog item start-->

            <div class=\"row row-blog\">
              <div class=\"col-blog col-lg-4 col-md-5\">
                    <a title=\"{{ 'tin-tuc' | page({slug:allpost.slug})}}\" href=\"{{ 'tin-tuc' | page({slug:allpost.slug})}}\" class=\"img\">
                        <img src=\"{{allpost.image | media}}\" alt=\"\">
                    </a>
              </div>
              <div class=\"col-blog col-lg-8 col-md-7\">
                  <div class=\"content-blog\">
                        <div class=\"title-blog\">
                            <a href=\"{{ 'tin-tuc' | page({slug:allpost.slug})}}\" title=\"\">
                                <h3 class=\"title-inner clamp__2\">
                                   {{allpost.title }}
                               </h3>
                           </a>
                           <span class=\"date\"> {{ allpost.published_at|date('d-m-Y') }}</span>
                       </div>

                         <p class=\"short-text clamp__3\">
                          {{html_strip(allpost.introductory,150)}}
                          </p>
                </div>
              </div>
              <div class=\"col-12\">
                  <div class=\"line line-gray\"></div>
              </div>

        </div>
        {%endfor%}
        <!--Blog item end-->
        <div class=\"view-more text-center\" id=\"listrecord\">
            <div   class=\"link-view-more btn-general\" title=\"Xem thêm\">Xem thêm</div>
        </div>
    </div>

</div>
</div>
</div>", "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/tintuc/default.htm", "");
    }
}
