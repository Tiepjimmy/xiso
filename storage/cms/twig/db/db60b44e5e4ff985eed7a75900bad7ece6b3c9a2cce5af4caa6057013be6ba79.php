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

/* C:\xampp\htdocs\xiso/themes/xiso/partials/site/header.htm */
class __TwigTemplate_721f3a3299ba55fc3d3ba4fdb7b3d95abf5b058e319190db3ccd55b3977c1bf8 extends \Twig\Template
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
        echo "<div class=\"header-wra";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("setting"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "pper\">
        <!--Header main menu start-->
        <div class=\"header-main-wrapper\"> 
            <div class=\"container\">
                <div class=\"header-main-menu\">
                    <div class=\"slogan-content d-lg-none d-sm-block d-none\">
                        <span class=\"title-slogan\">XiSo Lập trình online - Kiến tạo tương lai</span>
                    </div>
                    <!--Main menu start-->
                    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "                    <!--Main menu end-->
                    <div class=\"mini-wrapper\">
                        <!--Register start-->
                        <div class=\"mini-wrapper-box\">
                            <div class=\"mini-box-popup\">
                                <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("registration");
        echo "\" title=\"Đăng ký\" class=\"btn btn-gnl-orange btn-register\">
                                    Đăng ký
                                </a>
                            </div>
                        </div>
                        <!--Register end-->
                    </div>

                    <!--Open or close mobile-->
                    <a href=\"#js_menu\" title=\"mobile button\" class=\"mobile-button\">
                        <i class=\"ion ion-md-list\"></i>
                    </a>
                </div>
            </div>
        </div>
        <!--Header main menu end-->
        <div class=\"header-main-bottom\">
            <div class=\"container\">
                <!--Logo start-->
                <div class=\"logo\">
                    <a class=\"logo-link\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\" title=\"Logo\">
                        <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo_tagline.png");
        echo "\" alt=\"Logo\">
                    </a>
                </div>
                <!--Logo end-->
                <div class=\"slogan--search-qa\">
                    <div class=\"slogan-content d-lg-block d-none\">
                        <h1 class=\"title-slogan\">XiSo Lập trình online - Kiến tạo tương lai</h1>
                    </div>
                    <div class=\"search-qa\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\">
                            <div class=\"input-group-append\">
                                <button class=\"input-group-text\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </div>
                        </div>
                        <ul class=\"qa-and-phone\">

                            <li class=\"d-sm-block d-none\">
                                <img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tel.png");
        echo "\" alt=\"Phone\">
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["setting"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["set1"]) {
            // line 59
            echo "                                <a href=\"tel:0981658329\" title=\"Phone\">set1.mobie</a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['set1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </li>
                            <li class=\"d-lg-table-cell d-none\">
                                <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/question.png");
        echo "\" alt=\"QA\">
                                <a href=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hoidap");
        echo "\" title=\"QA\">Hỏi đáp</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Banner start-->
";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "<!--Banner end-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 75,  149 => 74,  136 => 64,  132 => 63,  128 => 61,  121 => 59,  117 => 58,  113 => 57,  90 => 37,  86 => 36,  63 => 16,  56 => 11,  52 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header-wra{% component 'setting' %}pper\">
        <!--Header main menu start-->
        <div class=\"header-main-wrapper\"> 
            <div class=\"container\">
                <div class=\"header-main-menu\">
                    <div class=\"slogan-content d-lg-none d-sm-block d-none\">
                        <span class=\"title-slogan\">XiSo Lập trình online - Kiến tạo tương lai</span>
                    </div>
                    <!--Main menu start-->
                    {% partial 'site/menu'%}
                    <!--Main menu end-->
                    <div class=\"mini-wrapper\">
                        <!--Register start-->
                        <div class=\"mini-wrapper-box\">
                            <div class=\"mini-box-popup\">
                                <a href=\"{{'registration'|page }}\" title=\"Đăng ký\" class=\"btn btn-gnl-orange btn-register\">
                                    Đăng ký
                                </a>
                            </div>
                        </div>
                        <!--Register end-->
                    </div>

                    <!--Open or close mobile-->
                    <a href=\"#js_menu\" title=\"mobile button\" class=\"mobile-button\">
                        <i class=\"ion ion-md-list\"></i>
                    </a>
                </div>
            </div>
        </div>
        <!--Header main menu end-->
        <div class=\"header-main-bottom\">
            <div class=\"container\">
                <!--Logo start-->
                <div class=\"logo\">
                    <a class=\"logo-link\" href=\"{{'homepage' |page}}\" title=\"Logo\">
                        <img src=\"{{ 'assets/img/logo_tagline.png'|theme }}\" alt=\"Logo\">
                    </a>
                </div>
                <!--Logo end-->
                <div class=\"slogan--search-qa\">
                    <div class=\"slogan-content d-lg-block d-none\">
                        <h1 class=\"title-slogan\">XiSo Lập trình online - Kiến tạo tương lai</h1>
                    </div>
                    <div class=\"search-qa\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\">
                            <div class=\"input-group-append\">
                                <button class=\"input-group-text\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </div>
                        </div>
                        <ul class=\"qa-and-phone\">

                            <li class=\"d-sm-block d-none\">
                                <img src=\"{{ 'assets/img/tel.png'|theme }}\" alt=\"Phone\">
                                {% for set1 in setting %}
                                <a href=\"tel:0981658329\" title=\"Phone\">set1.mobie</a>
                                {% endfor %}
                            </li>
                            <li class=\"d-lg-table-cell d-none\">
                                <img src=\"{{ 'assets/img/question.png' |theme }}\" alt=\"QA\">
                                <a href=\"{{ 'hoidap'|page }}\" title=\"QA\">Hỏi đáp</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Banner start-->
{% partial 'site/banner'%}
<!--Banner end-->", "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/header.htm", "");
    }
}
