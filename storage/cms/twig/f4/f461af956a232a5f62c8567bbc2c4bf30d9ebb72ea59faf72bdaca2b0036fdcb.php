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

/* C:\xampp\htdocs\xiso/themes/xiso/pages/hoc-phi.htm */
class __TwigTemplate_a6ceb6e7876edf6d5b5425204973587fcdc88e8bb03eb9c12e3eb706f752ea05 extends \Twig\Template
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
                            <span>Học phí</span>
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
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "                    </div>
                    <!--Sidebar menu end-->

                    <div class=\"col-lg-5\">
                        <div class=\"wrap-page-body\">
                            <div class=\"content-page\">
                                   ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsHocphi"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "                                <div class=\"txt-body\">
                                    <h2 class=\"pb-5\">Bảng học phí chương trình XiSo</h2>
                                    <div class=\"table-responsive table-responsive-tuition\">
                                        <table class=\"table table-striped table-tuition\">
                                            <thead class=\"thead-tuition\">
                                            <tr>
                                                <th></th>
                                                <th>Level</th>
                                                <th>Đai</th>
                                                <th>Môn học</th>
                                                <th colspan=\"2\" class=\"text-center\">Hình thức đóng</th>
                                            </tr>
                                            <tr>
                                                <th colspan=\"4\"></th>
                                                <th>Theo môn</th>
                                                <th>Theo đai</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hocphi"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hocphis"]) {
            // line 50
            echo "
                                            <tr>
                                                <td class=\"tbl-band-color\">
                                                    <div class=\"band-color\"></div>
                                                </td>
                                                <td>
                                                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hocphis"], "lever", [], "any", false, false, false, 56), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    <span> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hocphis"], "dai", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>
                                                </td>
                                                <td class=\"tbl-name\">
                                                    <div class=\"tbl-block-name\">
                                                        <p> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hocphis"], "monhoc", [], "any", false, false, false, 63), "html", null, true);
            echo "</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hocphis"], "theomon", [], "any", false, false, false, 67), "html", null, true);
            echo "</p>
                                                </td>
                                                <td>
                                                    <span>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hocphis"], "theodai", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>
                                                </td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hocphis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Form sign up for advice start-->
                    <div class=\"col-lg-4\">
                         ";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar-signup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 85
        echo "                    </div>
                    <!--Form sign up for advice end-->
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/hoc-phi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 85,  162 => 84,  150 => 74,  140 => 70,  134 => 67,  127 => 63,  120 => 59,  114 => 56,  106 => 50,  102 => 49,  81 => 30,  77 => 29,  69 => 23,  65 => 22,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-content animated fadeInRight\">
        <div class=\"wrap-text-page text-left\">
            <div class=\"container\">
                <div class=\"text-bottom\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{'homepage'| page}}\"><img src=\"{{ 'assets/img/home.png'|theme}}\" alt=\"\"></a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <span>Học phí</span>
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
                                   {% component 'newsHocphi' %}
                                <div class=\"txt-body\">
                                    <h2 class=\"pb-5\">Bảng học phí chương trình XiSo</h2>
                                    <div class=\"table-responsive table-responsive-tuition\">
                                        <table class=\"table table-striped table-tuition\">
                                            <thead class=\"thead-tuition\">
                                            <tr>
                                                <th></th>
                                                <th>Level</th>
                                                <th>Đai</th>
                                                <th>Môn học</th>
                                                <th colspan=\"2\" class=\"text-center\">Hình thức đóng</th>
                                            </tr>
                                            <tr>
                                                <th colspan=\"4\"></th>
                                                <th>Theo môn</th>
                                                <th>Theo đai</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for hocphis in hocphi %}

                                            <tr>
                                                <td class=\"tbl-band-color\">
                                                    <div class=\"band-color\"></div>
                                                </td>
                                                <td>
                                                    {{hocphis.lever}}
                                                </td>
                                                <td>
                                                    <span> {{hocphis.dai}}</span>
                                                </td>
                                                <td class=\"tbl-name\">
                                                    <div class=\"tbl-block-name\">
                                                        <p> {{hocphis.monhoc}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>{{hocphis.theomon}}</p>
                                                </td>
                                                <td>
                                                    <span>{{hocphis.theodai}}</span>
                                                </td>
                                            </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
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
    </div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/hoc-phi.htm", "");
    }
}
