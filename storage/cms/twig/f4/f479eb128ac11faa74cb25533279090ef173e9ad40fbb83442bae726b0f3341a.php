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

/* C:\xampp\htdocs\xiso/themes/xiso/partials/site/sidebar.htm */
class __TwigTemplate_f93106b0d6fdf10a6cb7ddecb1d4ed83461492cdd08214fe4fe19fca481a4ce4 extends \Twig\Template
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
        echo "<div class=\"sidebar-collapse\">
    <ul class=\"nav-sidebar\" id=\"nav-sidebar\">
        <li class=\"nav-item\" data-active=\"1\">
            <a class=\"nav-link\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cach-hoc");
        echo "\" title=\"\">
                <span>Cách học tại XiSO</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"2\">
            <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hoc-phi");
        echo "\" title=\"\">
                <span>Học phí</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"3\">
            <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hoc-bong");
        echo "\" title=\"\">
                <span>Học bổng</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"4\">
            <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hoidap");
        echo "\" title=\"\">
                <span>Câu hỏi thường gặp</span>
            </a>
        </li>
        <li class=\"item-region nav-item\" data-active=\"5\">
            <a href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuongtrinhhoc");
        echo "\" class=\"nav-link\" title=\"\">
                <span>Chương trình học XiSo</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"6\">
            <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-trang"]);
        echo "\" class=\"nav-link\" title=\"\">
                <span>Đai trắng</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"7\">
            <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-vang"]);
        echo "\" class=\"nav-link\" title=\"\">
                <span>Đai vàng</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"8\">
            <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-xanh-la-cay"]);
        echo "\" class=\"nav-link\" title=\"\">
                <span>Đai xanh lá cây</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"9\">
            <a href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-xanh-da-troi"]);
        echo "\" class=\"nav-link\" title=\"\">
                <span>Đai xanh da trời</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"10\">
            <a href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-do"]);
        echo "\" class=\"nav-link\" title=\"\">
                <span>Đai đỏ</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"11\">
            <a href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-den"]);
        echo "\"  class=\"nav-link\" title=\"\">
                <span>Đai đen</span>
            </a>
        </li>
    </ul>
    <div class=\"nav-link block-share\">
        <span>Chia sẻ trang này</span>
        <p class=\"icon--fnt\">
            <a href=\"https://www.facebook.com/\" target=\"_blank\" title=\"\" class=\"_icon _icon-fb\">
                <i class=\"fa fa-facebook-square\"></i>
            </a>
            <a href=\"#\" title=\"\" class=\"_icon _icon-print\">
                <i class=\"fa fa-print\"></i>
            </a>
        </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  114 => 49,  106 => 44,  98 => 39,  90 => 34,  82 => 29,  74 => 24,  66 => 19,  58 => 14,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-collapse\">
    <ul class=\"nav-sidebar\" id=\"nav-sidebar\">
        <li class=\"nav-item\" data-active=\"1\">
            <a class=\"nav-link\" href=\"{{ 'cach-hoc' |page }}\" title=\"\">
                <span>Cách học tại XiSO</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"2\">
            <a class=\"nav-link\" href=\"{{ 'hoc-phi'|page}}\" title=\"\">
                <span>Học phí</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"3\">
            <a class=\"nav-link\" href=\"{{ 'hoc-bong'|page }}\" title=\"\">
                <span>Học bổng</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"4\">
            <a class=\"nav-link\" href=\"{{ 'hoidap'|page }}\" title=\"\">
                <span>Câu hỏi thường gặp</span>
            </a>
        </li>
        <li class=\"item-region nav-item\" data-active=\"5\">
            <a href=\"{{ 'chuongtrinhhoc'|page}}\" class=\"nav-link\" title=\"\">
                <span>Chương trình học XiSo</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"6\">
            <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-trang'})}}\" class=\"nav-link\" title=\"\">
                <span>Đai trắng</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"7\">
            <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-vang'})}}\" class=\"nav-link\" title=\"\">
                <span>Đai vàng</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"8\">
            <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-xanh-la-cay'})}}\" class=\"nav-link\" title=\"\">
                <span>Đai xanh lá cây</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"9\">
            <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-xanh-da-troi'})}}\" class=\"nav-link\" title=\"\">
                <span>Đai xanh da trời</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"10\">
            <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-do'})}}\" class=\"nav-link\" title=\"\">
                <span>Đai đỏ</span>
            </a>
        </li>
        <li class=\"nav-item\" data-active=\"11\">
            <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-den'})}}\"  class=\"nav-link\" title=\"\">
                <span>Đai đen</span>
            </a>
        </li>
    </ul>
    <div class=\"nav-link block-share\">
        <span>Chia sẻ trang này</span>
        <p class=\"icon--fnt\">
            <a href=\"https://www.facebook.com/\" target=\"_blank\" title=\"\" class=\"_icon _icon-fb\">
                <i class=\"fa fa-facebook-square\"></i>
            </a>
            <a href=\"#\" title=\"\" class=\"_icon _icon-print\">
                <i class=\"fa fa-print\"></i>
            </a>
        </p>
    </div>
</div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/sidebar.htm", "");
    }
}
