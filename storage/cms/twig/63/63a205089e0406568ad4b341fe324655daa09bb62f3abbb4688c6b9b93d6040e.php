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

/* C:\xampp\htdocs\xiso/plugins/indikator/news/components/gioithieu/default.htm */
class __TwigTemplate_3b76e1e210ae2faaa792f163c5102d5dfc58b97c47e8684c5add6cdb0b807d9d extends \Twig\Template
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
        echo "    <div class=\"page-content animated fadeInRight\">
        <div class=\"wrap-text-page text-left\">
            <div class=\"container\">
                <div class=\"text-bottom\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home.png");
        echo "\" alt=\"\"></a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <span>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
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
                        <div class=\"sidebar-collapse\">
                            <ul class=\"nav-sidebar\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gioi-thieu", ["slug" => "hop-tac-hocmai-funix"]);
        echo "\" title=\"\">
                                        <span>Hợp tác HOCMAI-FUNiX</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gioi-thieu", ["slug" => "ve-xiso"]);
        echo "\" title=\"\">
                                        <span>Về XiSo</span>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"nav-link block-share\">
                                <span>Chia sẻ trang này</span>
                                <p class=\"icon--fnt\">
                                    <a href=\"#\" title=\"\" class=\"_icon _icon-fb\">
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
                                <div class=\"txt-head-body\">
                                    <h1 class=\"title-page title-page-bb pb-15\">
                                       ";
        // line 55
        echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 55)]);
        echo "
                                    </h1>
                                    <p>
                                       ";
        // line 58
        echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "introductory", [], "any", false, false, false, 58)]);
        echo "
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/gioithieu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 58,  107 => 55,  79 => 30,  71 => 25,  53 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"page-content animated fadeInRight\">
        <div class=\"wrap-text-page text-left\">
            <div class=\"container\">
                <div class=\"text-bottom\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ 'homepage' |page}}\"><img src=\"{{'assets/img/home.png'|theme }}\" alt=\"\"></a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <span>{{post.title}}</span>
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
                        <div class=\"sidebar-collapse\">
                            <ul class=\"nav-sidebar\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"{{ 'gioi-thieu'|page({slug:'hop-tac-hocmai-funix'})}}\" title=\"\">
                                        <span>Hợp tác HOCMAI-FUNiX</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'gioi-thieu'|page({slug:'ve-xiso'})}}\" title=\"\">
                                        <span>Về XiSo</span>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"nav-link block-share\">
                                <span>Chia sẻ trang này</span>
                                <p class=\"icon--fnt\">
                                    <a href=\"#\" title=\"\" class=\"_icon _icon-fb\">
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
                                <div class=\"txt-head-body\">
                                    <h1 class=\"title-page title-page-bb pb-15\">
                                       {{html_strip(post.title)}}
                                    </h1>
                                    <p>
                                       {{html_strip(post.introductory)}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>", "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/gioithieu/default.htm", "");
    }
}
