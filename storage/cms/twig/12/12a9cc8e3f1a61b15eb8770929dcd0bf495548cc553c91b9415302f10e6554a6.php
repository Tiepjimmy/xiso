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

/* C:\xampp\htdocs\xiso/plugins/indikator/news/components/chuongtrinhhoc/default.htm */
class __TwigTemplate_1c98e577acd32d8eb0bb90b97192b5c10e6f08a1ff5e2298d1bcd596e5f5bfd7 extends \Twig\Template
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
 <div class=\"page-content animated fadeInRight\">
        <div class=\"wrap-text-page text-left\">
            <div class=\"container\">
                <div class=\"text-bottom\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"/\"><img src=\"img/home.png\" alt=\"\"></a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <span>Chương trình học XiSo</span>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <span>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
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
        echo "                    </div>
                    <!--Sidebar menu end-->

                    <div class=\"col-lg-5\">
                        <div class=\"wrap-page-body\">
                            <div class=\"content-page\">
                                <div class=\"txt-head-body\">
                                    <h1 class=\"title-page title-page-bb\">
                                        ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 35), "html", null, true);
        echo "
                                    </h1>
                                </div>
                                <div class=\"txt-body\">
                                    <h2>Danh sách các môn học thuộc Đai đỏ</h2>
                                    <div class=\"subjects-content text-center\">
                                        <div class=\"subjects-item\">
                                            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "link_url1", [], "any", false, false, false, 42), "html", null, true);
        echo "\" target=\"_brank\" title=\"\">
                                                <div class=\"img wow bounceIn\">
                                                    <img src=\"";
        // line 44
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "img", [], "any", false, false, false, 44));
        echo "\" alt=\"\">
                                                </div>
                                                <h3>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "contentimg1", [], "any", false, false, false, 46), "html", null, true);
        echo "</h3>
                                            </a>
                                        </div>
                                        <div class=\"subjects-item\">
                                            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "link_url2", [], "any", false, false, false, 50), "html", null, true);
        echo "\" title=\"\">
                                                <div class=\"img wow bounceIn\">
                                                    <img src=\"";
        // line 52
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "img2", [], "any", false, false, false, 52));
        echo "\" alt=\"\">
                                                </div>
                                                <h3>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "contentimg2", [], "any", false, false, false, 54), "html", null, true);
        echo "</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"txt-body\">
                                    <h2>";
        // line 60
        echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 60)]);
        echo "</h2>
                                    <ul>
                                        <li>
                                           ";
        // line 63
        echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "introductory", [], "any", false, false, false, 63), 1000]);
        echo "
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"txt-body text-center\">
                                    <a href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("registration");
        echo "\" title=\"Đăng kí học\" class=\"btn-regis-learn btn-general\">Đăng kí học</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Form sign up for advice start-->
                    <div class=\"col-lg-4\">
                        ";
        // line 76
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar-signup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 77
        echo "                    </div>
                    <!--Form sign up for advice end-->
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/chuongtrinhhoc/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 77,  152 => 76,  141 => 68,  133 => 63,  127 => 60,  118 => 54,  113 => 52,  108 => 50,  101 => 46,  96 => 44,  91 => 42,  81 => 35,  71 => 27,  67 => 26,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
 <div class=\"page-content animated fadeInRight\">
        <div class=\"wrap-text-page text-left\">
            <div class=\"container\">
                <div class=\"text-bottom\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"/\"><img src=\"img/home.png\" alt=\"\"></a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <span>Chương trình học XiSo</span>
                        </li>
                        <li class=\"breadcrumb-item\">
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
                        {% partial 'site/sidebar'%}
                    </div>
                    <!--Sidebar menu end-->

                    <div class=\"col-lg-5\">
                        <div class=\"wrap-page-body\">
                            <div class=\"content-page\">
                                <div class=\"txt-head-body\">
                                    <h1 class=\"title-page title-page-bb\">
                                        {{post.title}}
                                    </h1>
                                </div>
                                <div class=\"txt-body\">
                                    <h2>Danh sách các môn học thuộc Đai đỏ</h2>
                                    <div class=\"subjects-content text-center\">
                                        <div class=\"subjects-item\">
                                            <a href=\"{{ post.link_url1}}\" target=\"_brank\" title=\"\">
                                                <div class=\"img wow bounceIn\">
                                                    <img src=\"{{post.img|media }}\" alt=\"\">
                                                </div>
                                                <h3>{{post.contentimg1}}</h3>
                                            </a>
                                        </div>
                                        <div class=\"subjects-item\">
                                            <a href=\"{{ post.link_url2}}\" title=\"\">
                                                <div class=\"img wow bounceIn\">
                                                    <img src=\"{{post.img2|media }}\" alt=\"\">
                                                </div>
                                                <h3>{{post.contentimg2}}</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"txt-body\">
                                    <h2>{{html_strip(post.content)}}</h2>
                                    <ul>
                                        <li>
                                           {{html_limit(post.introductory,1000)|raw }}
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"txt-body text-center\">
                                    <a href=\"{{ 'registration' |page }}\" title=\"Đăng kí học\" class=\"btn-regis-learn btn-general\">Đăng kí học</a>
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
    </div>", "C:\\xampp\\htdocs\\xiso/plugins/indikator/news/components/chuongtrinhhoc/default.htm", "");
    }
}
