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

/* C:\xampp\htdocs\xiso/themes/xiso/partials/site/footer.htm */
class __TwigTemplate_57fb30f8162a0de4ba4ab22a99e543231635af08a6c041fbb9822b772d31a095 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"footer-inner text-center\">
        ";
        // line 3
        if (($context["setting"] ?? null)) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["setting"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["set"]) {
                // line 5
                echo "        <div class=\"row\">

            <div class=\"widget-text col-lg-5 col-12\">
                <div class=\"logo--ft\">
                    <a href=\"";
                // line 9
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
                echo "\" title=\"Logo\">
                        <img src=\"";
                // line 10
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["set"], "image", [], "any", false, false, false, 10));
                echo "\" class=\"d-lg-block d-none\" alt=\"Logo\">
                        <img src=\"";
                // line 11
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo_tagline_transparent.png");
                echo "\" class=\"d-lg-none d-block\" alt=\"Logo\">
                    </a>
                    <h5 class=\"slogan-ft\">
                      ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["set"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "
                  </h5>
              </div>
          </div>
          <div class=\"widget-text widget-link widget-col-small col-lg-3 col-sm-6\">
            <h3 class=\"text-title-ft\">Link hữu ích</h3>
            <ul>
                <li>
                    <i class=\"ion ion-ios-redo\"></i>
                    <a href=\"";
                // line 23
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuongtrinhhoc");
                echo "\" title=\"Chương trình học\">
                        Chương trình học XiSo
                    </a>
                </li>
                <li>
                    <i class=\"ion ion-ios-redo\"></i>
                    <a href=\"";
                // line 29
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("cach-hoc");
                echo "\" title=\"Cách học\">
                        Cách học
                    </a>
                </li>
                <li>
                    <i class=\"ion ion-ios-redo\"></i>
                    <a href=\"";
                // line 35
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tintuc");
                echo "\" title=\"Tin Tức\">
                        Tin tức
                    </a>
                </li>
                <li>
                    <i class=\"ion ion-ios-redo\"></i>
                    <a href=\"";
                // line 41
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("hoc-phi");
                echo "\" title=\"Học phí\">
                        Học phí
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"widget-text widget-link widget-col-small col-lg-4 col-sm-6\">
            <h3 class=\"text-title-ft\">Liên hệ với chúng tôi</h3>

            <ul>

                <li>
                    <img src=\"";
                // line 53
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/school.png");
                echo "\" alt=\"\">
                    <a href=\"#\" title=\"Trường học trực tuyến Xiso\">
                        ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["set"], "name", [], "any", false, false, false, 55), "html", null, true);
                echo "
                    </a>
                </li>
                <li>
                    <img src=\"";
                // line 59
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/email.png");
                echo "\" alt=\"Email\"> Email:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["set"], "email", [], "any", false, false, false, 59), "html", null, true);
                echo "
                    <a href=\"#\" title=\"Email\">
                    </a>
                </li>
                <li>
                    <img src=\"";
                // line 64
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/telephone.png");
                echo "\" alt=\"Hotline\"> Hotline:
                    <a href=\"#\" title=\"Hotline\">
                        ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["set"], "mobie", [], "any", false, false, false, 66), "html", null, true);
                echo "
                    </a>
                </li>
                <li>
                    Kêt nối với chúng tôi:
                    <a href=\"https://www.facebook.com/Truonglaptrinhtructuyen/\" target=\"_blank\" title=\"Liên hệ\">
                        <span class=\"fa fa-facebook-square\"></span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['set'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "    ";
        }
        // line 81
        echo "    <a id=\"call_phone\" title=\"Call phone\" href=\"#\"></a>
</div>
</div>

<!--Support online-->
<div id=\"fb-root\"></div>
<div id=\"cfacebook\" class=\"messagebox\">
    <a href=\"javascript:void(0);\" class=\"chat_fb\" onclick=\"return false;\"></a>
    <div class=\"fchat\">
        <div style=\"width:250px;\" class=\"fb-page\" data-href=\"https://www.facebook.com/\"
        data-tabs=\"messages\" data-width=\"260\"
        data-height=\"280\" data-small-header=\"true\">
        <div class=\"fb-xfbml-parse-ignore\">
            <blockquote></blockquote>
        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 81,  169 => 80,  149 => 66,  144 => 64,  134 => 59,  127 => 55,  122 => 53,  107 => 41,  98 => 35,  89 => 29,  80 => 23,  68 => 14,  62 => 11,  58 => 10,  54 => 9,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"footer-inner text-center\">
        {% if setting  %}
        {% for set in setting %}
        <div class=\"row\">

            <div class=\"widget-text col-lg-5 col-12\">
                <div class=\"logo--ft\">
                    <a href=\"{{ 'homepage'|page }}\" title=\"Logo\">
                        <img src=\"{{set.image |media}}\" class=\"d-lg-block d-none\" alt=\"Logo\">
                        <img src=\"{{'assets/img/logo_tagline_transparent.png'|theme}}\" class=\"d-lg-none d-block\" alt=\"Logo\">
                    </a>
                    <h5 class=\"slogan-ft\">
                      {{set.name}}
                  </h5>
              </div>
          </div>
          <div class=\"widget-text widget-link widget-col-small col-lg-3 col-sm-6\">
            <h3 class=\"text-title-ft\">Link hữu ích</h3>
            <ul>
                <li>
                    <i class=\"ion ion-ios-redo\"></i>
                    <a href=\"{{ 'chuongtrinhhoc'|page }}\" title=\"Chương trình học\">
                        Chương trình học XiSo
                    </a>
                </li>
                <li>
                    <i class=\"ion ion-ios-redo\"></i>
                    <a href=\"{{ 'cach-hoc' | page }}\" title=\"Cách học\">
                        Cách học
                    </a>
                </li>
                <li>
                    <i class=\"ion ion-ios-redo\"></i>
                    <a href=\"{{ 'tintuc' |page }}\" title=\"Tin Tức\">
                        Tin tức
                    </a>
                </li>
                <li>
                    <i class=\"ion ion-ios-redo\"></i>
                    <a href=\"{{ 'hoc-phi' |page }}\" title=\"Học phí\">
                        Học phí
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"widget-text widget-link widget-col-small col-lg-4 col-sm-6\">
            <h3 class=\"text-title-ft\">Liên hệ với chúng tôi</h3>

            <ul>

                <li>
                    <img src=\"{{'assets/img/school.png'|theme}}\" alt=\"\">
                    <a href=\"#\" title=\"Trường học trực tuyến Xiso\">
                        {{set.name}}
                    </a>
                </li>
                <li>
                    <img src=\"{{'assets/img/email.png'|theme}}\" alt=\"Email\"> Email:{{set.email}}
                    <a href=\"#\" title=\"Email\">
                    </a>
                </li>
                <li>
                    <img src=\"{{ 'assets/img/telephone.png'|theme }}\" alt=\"Hotline\"> Hotline:
                    <a href=\"#\" title=\"Hotline\">
                        {{set.mobie}}
                    </a>
                </li>
                <li>
                    Kêt nối với chúng tôi:
                    <a href=\"https://www.facebook.com/Truonglaptrinhtructuyen/\" target=\"_blank\" title=\"Liên hệ\">
                        <span class=\"fa fa-facebook-square\"></span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    {% endfor %}
    {% endif  %}
    <a id=\"call_phone\" title=\"Call phone\" href=\"#\"></a>
</div>
</div>

<!--Support online-->
<div id=\"fb-root\"></div>
<div id=\"cfacebook\" class=\"messagebox\">
    <a href=\"javascript:void(0);\" class=\"chat_fb\" onclick=\"return false;\"></a>
    <div class=\"fchat\">
        <div style=\"width:250px;\" class=\"fb-page\" data-href=\"https://www.facebook.com/\"
        data-tabs=\"messages\" data-width=\"260\"
        data-height=\"280\" data-small-header=\"true\">
        <div class=\"fb-xfbml-parse-ignore\">
            <blockquote></blockquote>
        </div>
    </div>
</div>
</div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/footer.htm", "");
    }
}
